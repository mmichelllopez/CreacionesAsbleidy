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
    <div class="registros">
        <button id="checkout" class="button-checkout" onclick="pay()" style="right: 30px;
                                                                            font-size: 16px; 
                                                                            align-items: center;
                                                                            width: 100px;
                                                                            height: 50px;
                                                                            top: 120px;">Pagar</button>
        <table class="listado">
            <tr>
                <th>Nombre</th>
                <th>Foto</th>
                <th>Color</th>
                <th>Talla</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
            <tr>
                <td>Deportivo suela tractor</td>
                <td><img src="img/product-1.jpg" class="img_carro" width="90px" object-fit="cover" /></td>
                <td>                
                    <?php
                        include("database.php");
                        $resultado = mysqli_query($conn,"SELECT * FROM colores");
                    ?>
                    <select name="colores" style="font-size: 16px;
                                                height: 30px;
                                                padding: 5px;
                                                width: 200px;">
                    <option disabled selected="">Seleccione un color</option>
                    <?php
                        while($fila=$resultado->fetch_assoc()):
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
                        $resultado2 = mysqli_query($conn,"SELECT * FROM tallas");
                    ?>
                    <select name="tallas" style="font-size: 16px;
                                                height: 30px;
                                                padding: 5px;
                                                width: 200px;">
                    <option disabled selected="">Seleccione una talla</option>
                    <?php
                        while($fila2=$resultado2->fetch_assoc()):
                            $id = $fila2['id'];
                            $numero = $fila2['numero'];
                            echo "<option value=$id>$numero</option>";
                        endwhile;
                    ?>
                    </select>
                </th>
                <td>60000</td>
                <td> <input type="number" placeholder="2" min="1" pattern="^[0-9]+"></td>
                <td><label>120000</label></td>
                <td><button><i class="fas fa-redo-alt"></i></button>
                    <button><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
            <tr>
                <td>Deportivo suela rayas</td>
                <td><img src="img/product-2.jpg" class="img_carro" width="90px" object-fit="cover" /></td>
                <td>                
                    <?php
                        include("database.php");
                        $resultado = mysqli_query($conn,"SELECT * FROM colores");
                    ?>
                    <select name="colores" style="font-size: 16px;
                                                height: 30px;
                                                padding: 5px;
                                                width: 200px;">
                    <option disabled selected="">Seleccione un color</option>
                    <?php
                        while($fila=$resultado->fetch_assoc()):
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
                        $resultado2 = mysqli_query($conn,"SELECT * FROM tallas");
                    ?>
                    <select name="tallas" style="font-size: 16px;
                                                height: 30px;
                                                padding: 5px;
                                                width: 200px;">
                    <option disabled selected="">Seleccione una talla</option>
                    <?php
                        while($fila2=$resultado2->fetch_assoc()):
                            $id = $fila2['id'];
                            $numero = $fila2['numero'];
                            echo "<option value=$id>$numero</option>";
                        endwhile;
                    ?>
                    </select>
                </th>
                <td>50000</td>
                <td> <input type="number" placeholder="1" min="1" pattern="^[0-9]+"></td>
                <td><label>50000</label></td>
                <td><button><i class="fas fa-redo-alt"></i></button>
                    <button><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
        </table>
    </div>
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

</html>