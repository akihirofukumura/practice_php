<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If-plactice</title>
</head>
<body>
  <h1>if文を使って年齢によって表示方法を変える</h1>
  <form action="" method="post">
    <input type="text" name="age">
    <input type="submit" value="submit" name="btn">
  </form>
</body>
</html>

<?php
  if (isset($_POST['btn'])) {
    $age = $_POST['age'];
    if ($age > 0 && $age <=10) {
      echo "boy";
    }elseif ($age > 10 && $age <= 20)  {
      echo "young";
    }elseif ($age > 20 && $age <= 25){
      echo "young-adult";
    }elseif ($age > 25 && $age <= 40) {
      echo "adult";
    }else {
      echo "senior";
    }
  }
?>