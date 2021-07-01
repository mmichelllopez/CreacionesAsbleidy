let carrito = [];
const nombre = "zapato",
  cantidad = 2,
  precio = "6000",
  talla = 22,
  color = "negro";
console.log("prueba connect");
function myFunction() {
    const button = document.getElementById('prueba');
    console.log(button.parentElement);
    console.log(button.parentElement.children[0].innerHTML);
    console.log(button.parentElement.children[1].src);
    console.log(button.parentElement.children[2].innerHTML);
    button.click((e)=>{console.log(e.target);})
//   e.addEventListener("click", (e) => {
//     const id = e.target
//     console.log(e);
//   });
  console.log("hola");
//   const theTarget = someEvent.target;
  var zapato = {
    ["nombre"]: nombre,
    ["talla"]: talla,
    ["cantidad"]: cantidad,
    ["precio"]: precio,
    ["color"]: color,
  };
  carrito.push(zapato);
}
