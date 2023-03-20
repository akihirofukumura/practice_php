<!-- オンライン留学 for-add-act.php 復習 -->

<?php

  $total = 0;

  for ($i = 1; $i < 30; $i++) { 
    if ($i % 2 == 0) {
      if ($i != 28) {
        echo "$i + ";
      }else{
        echo "$i = ";
      }
      $total += $i;
    }
  }
  echo $total;
?>

