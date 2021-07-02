console.log("prueba connect");
let carrito = [];
let zapato = {
  ["nombre"]: "",
  ["talla"]: 0,
  ["cantidad"]: 0,
  ["precio"]: 00000,
  ["color"]: "",
  ["imagen"]: "",
};


function cargartienda() {
  console.log("hola");
  const carrito = JSON.parse(localStorage.getItem("carrito"));
  console.log(carrito);
  if (carrito) {
    console.log(carrito);
    document.getElementById("carrito").innerHTML = carrito.map(
      (e) => `
      <tr>
        <td>${e.nombre}</td>
        <td><img src="${e.imagen}" class="img_carro" width="90px" object-fit="cover" /></td>
        <td>
            <?php
            include("database.php");
            $resultado = mysqli_query($conn, "SELECT * FROM colores");
            ?>
            <select name="colores" style="font-size: 16px;
                                        height: 30px;
                                        padding: 5px;
                                        width: 200px;">
                <option disabled selected="">Seleccione un color</option>
                <?php
                while ($fila = $resultado->fetch_assoc()) :
                    $id = $fila['id'];
                    $color = $fila['color'];
                    echo "<option value=$id>$color</option>";
                endwhile;
                ?>
            </select>
        </td>
        <th>
            <?php
            include("database.php");
            $resultado2 = mysqli_query($conn, "SELECT * FROM tallas");
            ?>
            <select name="tallas" style="font-size: 16px;
                                        height: 30px;
                                        padding: 5px;
                                        width: 200px;">
                <option disabled selected="">Seleccione una talla</option>
                <?php
                while ($fila2 = $resultado2->fetch_assoc()) :
                    $id = $fila2['id'];
                    $numero = $fila2['numero'];
                    echo "<option value=$id>$numero</option>";
                endwhile;
                ?>
            </select>
        </th>
        <td>$${e.precio}</td>
        <td> <input type="number" placeholder="2" min="1" pattern="^[0-9]+" value="${e.cantidad}"></td>
        <td><label>$${e.precio*e.cantidad}</label></td>
        <td><button><i class="fas fa-redo-alt"></i></button>
            <button><i class="fas fa-trash-alt"></i></button>
        </td>
      </tr>
      `
    );
  }
}
function eventmodal(event) {
  console.log(event.target);
  console.log(event.target.parentElement);
  console.log(event.target.parentElement.children[0].innerHTML);
  console.log(event.target.parentElement.children[1].src);
  console.log(event.target.parentElement.children[2].innerHTML);
  zapato.nombre = event.target.parentElement.children[0].innerHTML;
  zapato.imagen = event.target.parentElement.children[1].src;
  zapato.precio = event.target.parentElement.children[2].innerHTML.substring(1);
  console.log(zapato);
}

function myFunction(event) {
  // console.log(event.target.parentElement);
  console.log(event.target.parentElement.children[1].value);
  console.log(event.target.parentElement.children[3].value);
  console.log(event.target.parentElement.children[5].value);
  zapato.color = event.target.parentElement.children[1].value;
  zapato.talla = event.target.parentElement.children[3].value;
  zapato.cantidad = (event.target.parentElement.children[5].value = "")
    ? event.target.parentElement.children[5].value
    : 1;
  console.log(zapato);
  console.log("hola");
  carrito = JSON.parse(localStorage.getItem("carrito"));
  carrito.push(zapato);
  console.log(carrito);
  localStorage.setItem("carrito", JSON.stringify(carrito));
}
