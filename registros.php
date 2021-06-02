<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Inicio</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" sizes="32x32" href="./images/ballena2.png" />
    <script src="https://kit.fontawesome.com/bad1ebf6ce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/registro.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <div>
            <label class="logo"><a href="index.html" class="inicio">Vida</a></label>
            <img src="./images/pulpo.png" class="imagen">
        </div>
        <ul>
            <li><a onclick="notAcount()" href="#"> Home </a></li>
            <li><a href="./screens/contactus.html">Contact us</a></li>
            <li><a href="./login.html">Login</a></li>
            <li><a href="./signup.html">Sign up</a></li>
            <li><a onclick="notAcount()" href="#">Ver registros</a></li>
        </ul>
    </nav>

    <?php
    include("mostrar.php");
    ?>
</body>

</html>