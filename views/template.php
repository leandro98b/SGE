<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://localhost/SGE/views/css/style.css"></link>
    <title>Plantilla</title>
</head>
<body>
    <?php 
        include "modules/navegacion.php";
    ?>    
    <section>
        <?php
        $mvc = new MvcController();
        $mvc ->enlacePaginasController();        
        ?>
    </section>
</body>
</html>