<?php

$name = "SomeName";
$value = 100;
$expiration = time() + (60 * 60 * 24 * 7); # seconds, minutes, hours, days
setcookie($name, $value, $expiration);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

if(isset($_COOKIE["SomeName"])) {

  $someOne = $_COOKIE["SomeName"];

  echo $someOne; # echo the value of the cookie

} else {

$someOne = "";

}


?>

</body>
</html>
