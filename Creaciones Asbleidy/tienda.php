<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creaciones Asbleidy</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/18dd3f8795.js" crossorigin="anonymous"></script>
</head> 
<body>
    <header class="encabezado">
       <img src="img/marca.png" alt="Logo" height="70px">
    </header>
    <main>
        <div class="page-nav">
            <form action="sesion.php" method="POST">
                <input type="submit" value="Salir" class="button" name="btncerrar">
            </form>
            <button id="checkout" class="button-checkout" onclick="location.href='carrito.php'"><i class="fas fa-shopping-cart" id="carrito"></i></button>
        </div>
        <div class="page-content">
            <div class="product-container">
                <h3>Deportivo suela tractor</h3>
                <img src="img/product-1.jpg" />
                <h1>$60000</h1>
                <input type="checkbox" id="btn-modal">
	            <label for="btn-modal" class="button-add">Agregar</label>
                <div class="modal">
                    <div class="contenedor">
                        <header>Seleccione el color, la talla y la cantidad</header>
                        <label for="btn-modal">X</label>
                        <div class="contenido">
                            <?php
                                include("database.php");
                                $resultado = mysqli_query($conn,"SELECT * FROM colores");
                                $resultado2 = mysqli_query($conn,"SELECT * FROM tallas");
                            ?>
                            <h2 style="font-size: 20px; position: absolute; left: 10px;">Color</h2>
                            <select name="colores" style="font-size: 16px;
                                                        height: 30px;
                                                        padding: 5px;
                                                        width: 250px;
                                                        right: 10px;
                                                        position: absolute;">
                                <option disabled selected="">Seleccione un color</option>
                                <?php
                                    while($fila=$resultado->fetch_assoc()):
                                        $id = $fila['id'];
                                        $color = $fila['color'];
                                        echo "<option value=$id>$color</option>";
                                    endwhile;
                                ?>
                            </select>
                            <h2 style="font-size: 20px; position: absolute; left: 10px; top: 110px;">Talla</h2>
                            <select name="tallas" style="font-size: 16px;
                                                        height: 30px;
                                                        padding: 5px;
                                                        width: 250px;
                                                        right: 10px;
                                                        top: 110px;
                                                        position: absolute;">
                                <option disabled selected="">Seleccione una talla</option>
                                <?php
                                    while($fila2=$resultado2->fetch_assoc()):
                                        $id = $fila2['id'];
                                        $numero = $fila2['numero'];
                                        echo "<option value=$id>$numero</option>";
                                    endwhile;
                                ?>
                            </select>
                            <h2 style="font-size: 20px; position: absolute; left: 10px; top: 160px;">Cantidad</h2>
                            <input type="number" placeholder="1" min="1" pattern="^[0-9]+" style="font-size: 16px;
                                                                                                height: 30px;
                                                                                                padding: 5px;
                                                                                                width: 250px;
                                                                                                right: 10px;
                                                                                                top: 160px;
                                                                                                position: absolute;">
                            <button class="button-add" onclick="myFunction(event)">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <h3>Deportivo suela rayas</h3>
                <img src="img/product-2.jpg" />
                <h1>$50000</h1>
                <button id="prueba" onclick="myFunction()">Agregar</button>
                <input type="checkbox" id="btn-modal">
	            <label for="btn-modal" onclick="eventmodal(event)" class="button-add">Agregar</label>
                <div class="modal">
                    <div class="contenedor">
                        <header>Seleccione la talla y el color</header>
                        <label for="btn-modal">X</label>
                        <div class="contenido">
                            <button class="button-add" onclick="add('product-2', 50000)">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <h3>Deportivo niña con cierre mágico</h3>
                <img src="img/product-3.jpg" />
                <h1>$45000</h1>
                <input type="checkbox" id="btn-modal">
	            <label for="btn-modal" class="button-add">Agregar</label>
                <div class="modal">
                    <div class="contenedor">
                        <header>Seleccione la talla y el color</header>
                        <label for="btn-modal">X</label>
                        <div class="contenido">
                            <button class="button-add" onclick="add('product-3', 45000)">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <h3>Deportivo colorines</h3>
                <img src="img/product-4.jpg" />
                <h1>$45000</h1>
                <input type="checkbox" id="btn-modal">
	            <label for="btn-modal" class="button-add">Agregar</label>
                <div class="modal">
                    <div class="contenedor">
                        <header>Seleccione la talla y el color</header>
                        <label for="btn-modal">X</label>
                        <div class="contenido">
                            <button class="button-add" onclick="add('product-4', 45000)">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <h3>Zapatilla tacón 4/2</h3>
                <img src="img/product-5.jpg" />
                <h1>$85000</h1>
                <input type="checkbox" id="btn-modal">
	            <label for="btn-modal" class="button-add">Agregar</label>
                <div class="modal">
                    <div class="contenedor">
                        <header>Seleccione la talla y el color</header>
                        <label for="btn-modal">X</label>
                        <div class="contenido">
                            <button class="button-add" onclick="add('product-5', 85000)">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <h3>Plataforma 9/2</h3>
                <img src="img/product-6.jpg" />
                <h1>$90000</h1>
                <input type="checkbox" id="btn-modal">
	            <label for="btn-modal" class="button-add">Agregar</label>
                <div class="modal">
                    <div class="contenedor">
                        <header>Seleccione la talla y el color</header>
                        <label for="btn-modal">X</label>
                        <div class="contenido">
                            <button class="button-add" onclick="add('product-6', 90000)">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <h3>Valeta puntuda de flores</h3>
                <img src="img/product-7.jpg" />
                <h1>$35000</h1>
                <input type="checkbox" id="btn-modal">
	            <label for="btn-modal" class="button-add">Agregar</label>
                <div class="modal">
                    <div class="contenedor">
                        <header>Seleccione la talla y el color</header>
                        <label for="btn-modal">X</label>
                        <div class="contenido">
                            <button class="button-add" onclick="add('product-7', 35000)">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <h3>Valeta tacón 3/2 con corbata</h3>
                <img src="img/product-8.jpg" />
                <h1>$35000</h1>
                <input type="checkbox" id="btn-modal">
	            <label for="btn-modal" class="button-add">Agregar</label>
                <div class="modal">
                    <div class="contenedor">
                        <header>Seleccione la talla y el color</header>
                        <label for="btn-modal">X</label>
                        <div class="contenido">
                            <button class="button-add" onclick="add('product-8', 35000)">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <h3>Sandalia plana capellada de talón corbata</h3>
                <img src="img/product-9.jpg" />
                <h1>$45000</h1>
                <input type="checkbox" id="btn-modal">
	            <label for="btn-modal" class="button-add">Agregar</label>
                <div class="modal">
                    <div class="contenedor">
                        <header>Seleccione la talla y el color</header>
                        <label for="btn-modal">X</label>
                        <div class="contenido">
                            <button class="button-add" onclick="add('product-9', 45000)">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <h3>Sandalia plana con tiras</h3>
                <img src="img/product-10.jpg" />
                <h1>$35000</h1>
                <input type="checkbox" id="btn-modal">
	            <label for="btn-modal" class="button-add">Agregar</label>
                <div class="modal">
                    <div class="contenedor">
                        <header>Seleccione la talla y el color</header>
                        <label for="btn-modal">X</label>
                        <div class="contenido">
                            <button class="button-add" onclick="add('product-10', 35000)">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <h3>Sandalia niña tacón 3/2 con capellada de flores</h3>
                <img src="img/product-11.jpg" />
                <h1>$42000</h1>
                <input type="checkbox" id="btn-modal">
	            <label for="btn-modal" class="button-add">Agregar</label>
                <div class="modal">
                    <div class="contenedor">
                        <header>Seleccione la talla y el color</header>
                        <label for="btn-modal">X</label>
                        <div class="contenido">
                            <button class="button-add" onclick="add('product-11', 42000)">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <h3>Sandalia de niña plana con tiras</h3>
                <img src="img/product-12.jpg" />
                <h1>$40000</h1>
                <input type="checkbox" id="btn-modal">
	            <label for="btn-modal" class="button-add">Agregar</label>
                <div class="modal">
                    <div class="contenedor">
                        <header>Seleccione la talla y el color</header>
                        <label for="btn-modal">X</label>
                        <div class="contenido">
                            <button class="button-add" onclick="add('product-12', 40000)">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <h3>Valeta puntuda plana cerrada</h3>
                <img src="img/product-13.jpg" />
                <h1>$38000</h1>
                <input type="checkbox" id="btn-modal">
	            <label for="btn-modal" class="button-add">Agregar</label>
                <div class="modal">
                    <div class="contenedor">
                        <header>Seleccione la talla y el color</header>
                        <label for="btn-modal">X</label>
                        <div class="contenido">
                            <button class="button-add" onclick="add('product-13', 38000)">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <h3>Valeta puntuda capellada talón</h3>
                <img src="img/product-14.jpg" />
                <h1>$38000</h1>
                <input type="checkbox" id="btn-modal">
	            <label for="btn-modal" class="button-add">Agregar</label>
                <div class="modal">
                    <div class="contenedor">
                        <header>Seleccione la talla y el color</header>
                        <label for="btn-modal">X</label>
                        <div class="contenido">
                            <button class="button-add" onclick="add('product-14', 38000)">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <h3>Valeta de niña cerrada con corbata</h3>
                <img src="img/product-15.jpg" />
                <h1>$43000</h1>
                <input type="checkbox" id="btn-modal">
	            <label for="btn-modal" class="button-add">Agregar</label>
                <div class="modal">
                    <div class="contenedor">
                        <header>Seleccione la talla y el color</header>
                        <label for="btn-modal">X</label>
                        <div class="contenido">
                            <button class="button-add" onclick="add('product-15', 43000)">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <h3>Valeta de niña cerrada con suela tapita</h3>
                <img src="img/product-16.jpg" />
                <h1>$43000</h1>
                <input type="checkbox" id="btn-modal">
	            <label for="btn-modal" class="button-add">Agregar</label>
                <div class="modal">
                    <div class="contenedor">
                        <header>Seleccione la talla y el color</header>
                        <label for="btn-modal">X</label>
                        <div class="contenido">
                            <button class="button-add" onclick="add('product-16', 43000)">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="contenedor-footer" id="contact">
            <div class="content-foo">
                <h4><i class="fab fa-whatsapp-square"></i> WhatsApp</h4>
                <p>3124567890</p>
            </div>
            <div class="content-foo">
                <h4><i class="fas fa-envelope"></i> Email</h4>
                <p>casbleidy@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4><i class="fab fa-facebook-square"></i> Facebook</h4>
                <p>Creaciones Asbleidy</p>
            </div>
            <div class="content-foo">
                <h4><i class="fab fa-instagram-square"></i> Instagram</h4>
                <p>creaciones_asbleidy</p>
            </div> 
        </div>
        <h2 class="titulo-final">&copy; Creaciones Asbleidy</h2>
    </footer>
</body>
<script src="./carrito.js"></script>
</html>