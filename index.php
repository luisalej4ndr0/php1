
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index.php">
        <h1>Registrar Cliente</h1>
        <div>
            <label for="cc">Documento</label>
            <input type="text" name= "cc" placeholder="Numero de  documento">
            
        </div>
        <div>
            <label for="nombres">nombre cliente</label>
            <input type="text"  name="Nombres" placeholder="Nombre del cliente">
        </div>
        <div>
            <label for="email">email</label>
            <input type="email"  name="email" placeholder="Email del cliente">
        </div>
        <input type="submit" name="registrar">
    </form>

    <?php
    $documento = $_POST["cc"];
    echo "$documento <br>";

    $nombres = $_POST["Nombres"];
    echo "$nombres <br>";

    $email = $_POST["email"];
    echo "$email <br>";

    ?>

</body>
</html>