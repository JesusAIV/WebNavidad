<?php
require_once "./core/constantes.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navidad en Programación en español</title>
    <link rel="stylesheet" href="<?php echo SERVERURL ?>assets/css/styles.css" />
</head>

<body>
    <?php
        $Ajax = false;
        require_once "./controller/viewcontroller.php";
        $view = new viewcontroller();
        $vistas = $view->obtenervistacontrolador();

        if ($vistas == "inicio") {
            $vistas = "./view/inicio.php";
        }
    ?>
    <div class="nieve"></div>
    <div class="container">
        <h1 class="title">Feliz Navidad</h1>
        <div class="casanavidad">
            <div class="casaform">
                <div class="noel">
                    <img src="<?php echo SERVERURL ?>assets/img/noel.gif" alt="">
                </div>
                <div class="form">
                    <div class="form-input">
                        <div class="input-label">
                            <label for="nombre">Nombre: </label>
                        </div>
                        <div class="input-form">
                            <input type="text">
                        </div>
                        <div class="input-form">
                            <button class="form-boton">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cont-arbol">
            <img class="arbol-img" src="<?php echo SERVERURL ?>assets/img/arbol.png" alt="arbol de navidad">
            <img class="arbol-img" src="<?php echo SERVERURL ?>assets/img/arbol.png" alt="arbol de navidad">
            <img class="arbol-img" src="<?php echo SERVERURL ?>assets/img/arbol.png" alt="arbol de navidad">
        </div>
    </div>
    <div class="snow-floor"></div>
    <script src="<?php echo SERVERURL ?>assets/js/index.js"></script>
</body>

</html>