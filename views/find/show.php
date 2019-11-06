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
        <h1 class="center">Detalle de <?= $this->student->codeId;?></h1>

        <div class="center"><?= $this->message;?></div>

        <form action="<?= constant('URL')?>find/editStudent" method="post">
            <p>
                <label for="matricula">Matricula:</label>
                <br>
                <input type="text" name="codeid" value="<?= $this->student->codeId;?>" disabled required>
            </p>

             <p>
                <label for="name">Name:</label>
                <br>
                <input type="text" name="firstname" value="<?= $this->student->firstName;?>" required>
            </p>

            <p>
                <label for="lastname">Last Name:</label>
                <br>
                <input type="text" name="lastname" value="<?= $this->student->lastName;?>" required>
            </p>

            <p>
                <br>
                <input type="submit" value="Save">
            </p>
        </form>
    </div>

    <?php require 'views/footer.php' ?>
</body>
</html>