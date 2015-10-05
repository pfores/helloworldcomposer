
<?php
require "helloworld_bootstrap.php";
require "factoria.php";

require "persona.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<h1>
    <?php
    $factoria = factoria("fores","pau");
    echo "xivato1";
    $hello->greetings_random();
    echo "Xivato2";
    $factoria = new Factoria("pau","fores");
    echo "Xivato3";
    echo $factoria->name;?>
</h1>

</body>
</html>