<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Livre</title>
</head>
<body>
    <h1>POO Livre</h1>

    <?php

    spl_autoload_register(function ($class_name) {
        require 'classes/'.$class_name.'.php';
    });

    

    ?>
</body>
</html>

<?php

?>