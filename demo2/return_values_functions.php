!DOCTYPE html>
<html lang"en">
<head>
    <meta charset="utf-8">
    <title>Document</title>
</head>
<body>

  <?php

  function addNumbers($number1, $number2){

    $sum = $number1 + $number2;

    return $sum;

  }

  $result = addNumbers(34, 64);

  echo $result;

  echo "<br>";

  $result = addNumbers(100, $result);

  echo $result;

  echo "<br>";

  $result = addNumbers(300, $result);

  echo $result;

   ?>

</body>
</html>
