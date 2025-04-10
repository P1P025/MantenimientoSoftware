console.log("carrito.js cargado ✅");

const carrito = [];
const listaCarrito = document.getElementById("lista-carrito");
const totalElemento = document.getElementById("total");
const contadorCarrito = document.getElementById("contadorCarrito");

function agregarAlCarrito(nombre, precio) {
  carrito.push({ nombre, precio });
  actualizarCarrito();
}

function actualizarCarrito() {
  listaCarrito.innerHTML = "";
  let total = 0;

  carrito.forEach((item, index) => {
    const li = document.createElement("li");
    li.textContent = `${item.nombre} - $${item.precio.toLocaleString()}`;

    const btnEliminar = document.createElement("button");
    btnEliminar.textContent = "Quitar";
    btnEliminar.onclick = () => {
      carrito.splice(index, 1);
      actualizarCarrito();
    };

    li.appendChild(btnEliminar);
    listaCarrito.appendChild(li);
    total += item.precio;
  });

  totalElemento.textContent = total.toLocaleString();
  contadorCarrito.textContent = carrito.length; // ACTUALIZA EL CONTADOR
}
