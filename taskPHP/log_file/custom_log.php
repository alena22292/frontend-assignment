<?php
  include 'includes.php';

  if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $number = $_POST['number'];
    if($number == 5){
      echo "<p>Number is correct</p>";
    }else{
      $log = "User entered incorrect number($number)";
      logger($log);
      echo "<p>$number is not correct</p>";
    }
  }
 ?>

 <form action="" method="POST">
   <input type="text" name="number">
   <input type="submit" value="submit">
 </form>
