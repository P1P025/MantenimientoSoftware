<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="assets/css/estiloshomeall.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="../assets/imagenes/logo.png" alt="UniMarket Logo">
                <h1>UniMarket</h1>
            </div>
            <ul class="nav-links">
                <li><a href="#about" class="nav-link">Acerca de</a></li>
                <li><a href="#services" class="nav-link">Servicios</a></li>
                <li><a href="#contact" class="nav-link">Contacto</a></li>
            </ul>
            <p><a href="inicio.php">Iniciar sesion</a></p>
        </nav>
    </header>

    <main>
        <section id="about" class="about hidden">
            <h2>Acerca de UniMarket</h2>
            <p>UniMarket es una plataforma diseñada para estudiantes emprendedores que desean promocionar y vender sus productos o servicios dentro de la comunidad universitaria.</p>
        </section>

        <section id="services" class="services hidden">
            <h2>Nuestros Servicios</h2>
            <div class="service-cards">
                <div class="card">
                    <h3>Promoción de Productos</h3>
                    <p>Llega a más clientes dentro de tu universidad con nuestras herramientas de promoción.</p>
                </div>
                <div class="card">
                    <h3>Ventas Seguras</h3>
                    <p>Realiza transacciones seguras y confiables con otros estudiantes.</p>
                </div>
                <div class="card">
                    <h3>Gestión de Inventario</h3>
                    <p>Administra tus productos de manera eficiente con nuestra plataforma.</p>
                </div>
            </div>
        </section>

        <section id="contact" class="contact hidden">
            <h2>Contacto</h2>
            <p>¿Tienes alguna pregunta? ¡Contáctanos!</p>
            <form id="contactForm">
                <input type="text" id="name" placeholder="Nombre" required>
                <input type="email" id="email" placeholder="Correo electrónico" required>
                <textarea id="message" placeholder="Mensaje" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 UniMarket. Todos los derechos reservados.</p>
    </footer>

   
</body>
</html>