const express = require('express');
const bodyParser = require('body-parser');
const sqlite3 = require('sqlite3').verbose();
const path = require('path');
const bcrypt = require('bcrypt');
const jwt = require('jsonwebtoken'); // Mantén solo esta importación
const app = express();
const PORT = 3000;

// Middleware
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());
app.use(express.static(path.join(__dirname, 'public'))); // Carpeta para tus interfaces

// Base de datos
const db = new sqlite3.Database('./usuarios.db', (err) => {
  if (err) return console.error(err.message);
  console.log('✅ Conectado a la base de datos SQLite');
});

// Crear tabla si no existe
db.run(`
  CREATE TABLE IF NOT EXISTS usuarios (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    cedula TEXT UNIQUE,
    nombres TEXT,
    apellidos TEXT,
    carrera TEXT,
    correo TEXT UNIQUE,
    contraseña TEXT,
    rol TEXT
  )
`);

// Ruta para registrar usuario
app.post('/register', (req, res) => {
  const { cedula, nombres, apellidos, carrera, correo, contraseña, rol } = req.body;

  // Generar el hash de la contraseña
  bcrypt.hash(contraseña, 10, (err, hashedPassword) => {  // Usé un valor de 'saltRounds' que es 10 (normalmente recomendado)
    if (err) {
      return res.status(500).json({ mensaje: 'Error al generar el hash de la contraseña' });
    }

    // Insertar el nuevo usuario con la contraseña hasheada
    db.run(`
      INSERT INTO usuarios (cedula, nombres, apellidos, carrera, correo, contraseña, rol)
      VALUES (?, ?, ?, ?, ?, ?, ?)
    `, [cedula, nombres, apellidos, carrera, correo, hashedPassword, rol], function (err) {
      if (err) {
        return res.status(400).json({ mensaje: 'Error al registrar', error: err.message });
      }
      res.json({ mensaje: 'Usuario registrado exitosamente' });
    });
  });
});

// Ruta de login (actualizada para usar JWT)
app.post('/login', (req, res) => {
  const { correo, contraseña } = req.body;

  db.get(`
    SELECT * FROM usuarios WHERE correo = ?
  `, [correo], (err, row) => {
    if (err) {
      return res.status(500).json({ mensaje: 'Error en el servidor' });
    }
    if (!row) {
      return res.status(401).json({ mensaje: 'Credenciales inválidas' });
    }

    bcrypt.compare(contraseña, row.contraseña, (err, result) => {
      if (err || !result) {
        return res.status(401).json({ mensaje: 'Credenciales inválidas' });
      }

      // Crear el token JWT
      const token = jwt.sign({ id: row.id, rol: row.rol }, 'tu_clave_secreta', { expiresIn: '1h' });

      res.json({
        mensaje: 'Login exitoso',
        token,
        rol: row.rol,  // Asegúrate de incluir el rol aquí
        usuario: {
          nombres: row.nombres,
          correo: row.correo,
          cedula: row.cedula,
        }
        
      });
      
    });
  });
});

// Middleware para verificar el token
function verifyToken(req, res, next) {
  const token = req.headers['authorization'];

  if (!token) {
    return res.status(403).json({ mensaje: 'No se proporcionó token' });
  }

  jwt.verify(token, 'tu_clave_secreta', (err, decoded) => {
    if (err) {
      return res.status(500).json({ mensaje: 'Token inválido' });
    }

    req.user = decoded;  // Poner los datos del usuario en el request
    next();
  });
}

// Usar el middleware en rutas protegidas
app.put('/actualizar-contraseña', verifyToken, (req, res) => {
  const { nuevaContraseña } = req.body;
  const usuarioId = req.user.id;

  if (!nuevaContraseña) {
    return res.status(400).json({ mensaje: 'La nueva contraseña es requerida' });
  }

  db.run('UPDATE usuarios SET contraseña = ? WHERE id = ?', [nuevaContraseña, usuarioId], function(err) {
    if (err) {
      return res.status(500).json({ mensaje: 'Error al actualizar la contraseña', error: err.message });
    }
    res.status(200).json({ mensaje: 'Contraseña actualizada correctamente' });
  });
});

// Iniciar servidor
app.listen(PORT, () => {
  console.log(`🚀 Servidor corriendo en http://localhost:${PORT}`);
});
