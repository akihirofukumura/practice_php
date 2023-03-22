<?php 

  $num1 = 10;
  $num2 = 25;

  $total01 = addNumbers($num1,$num2);
  $total02 = addNumbers(50,50);

  echo "$num1 is $num2 = $total01";
  echo "<br>";
  echo "50 is 50 = $total02";

  function addNumbers($num1,$num2){
    $total = $num1 + $num2;
    return $total;
  }
?>