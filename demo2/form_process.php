<?php

if(isset($_POST['submit'])){

  $name = array("Edwin", "Isai", "Peter", "Samid", "Mohad", "Maria", "Jane", "Tom");
  $minimum = 5;
  $maximum = 10;

$username = $_POST['username'];
$password = $_POST['password'];

  if(strlen($username) < $minimum) {

    echo "Username has to be longer than five";

  }

  if(strlen($username) > $maximum) {

    echo "Username cannot be longer than 10";

  }

  if(!in_array($username, $name)) {

    echo "Sorry you cannot login";

  } else {
    echo "Welcome";
  }

}

?>
