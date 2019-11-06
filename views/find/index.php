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

    <div class="">
        <div class="mdl-layout__header">
            <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">Title</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">
                <a class="mdl-navigation__link" href="<?= constant('URL');?>main">Home</a>
                <a class="mdl-navigation__link" href="<?= constant('URL');?>add">New</a>
                <a class="mdl-navigation__link" href="<?= constant('URL');?>find">Find</a>
                <a class="mdl-navigation__link" href="<?= constant('URL');?>help">Help</a>
            </nav>
            </div>
        </div>
        
        <main class="mdl-layout__content">
            <div class="page-content">
                <div id="main">
                <h1 class="center">Sección de Busqueda</h1>
                <div id="response" class="center"></div>
                <br>
                </div>
                
                <div class="container">
                    <div id="example-table"></div>
                </div>
                <br>
                <div class="grid-sample" style="height: 500px; border: solid 1px #ddd;"></div>
            

                <?php require 'views/footer.php' ?>
            
            </div>
        </main>
    </div>


    <script src="<?= constant('URL');?>public/js/main.js"></script>

</body>
</html>