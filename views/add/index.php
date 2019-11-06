<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php' ?>

    <div id="main">
        <h1 class="center">Sección de Nuevo</h1>

        <div class="center"><?= $this->message;?></div>

        <form action="<?= constant('URL')?>add/register" method="post">
            <p>
                <label for="matricula">Matricula:</label>
                <br>
                <input type="text" name="codeid" id="" required>
            </p>

             <p>
                <label for="name">Name:</label>
                <br>
                <input type="text" name="firstname" id="" required>
            </p>

            <p>
                <label for="lastname">Last Name:</label>
                <br>
                <input type="text" name="lastname" id="" required>
            </p>

            <p>
                <br>
                <input type="submit" value="Registrar">
            </p>
        </form>
    </div>

    <?php require 'views/footer.php' ?>
</body>
</html>