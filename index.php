<?php
/**
 * URL: http://rcox.greenriverdev.com/IT328/pets/index.php
 * Authors: Robert Cox, Scarlett Kim
 * Version: 1.0
 * Date: 1/817/20
 *
 **/
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once ("vendor/autoload.php");
$fff = Base::instance();
$fff->route("GET /", function (){
    $view = new Template();
    echo $view->render("views/home.html");
});
$fff->run();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controller</title>
</head>
<body>

</body>
</html>
