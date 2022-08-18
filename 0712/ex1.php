<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method="POST" action="ex1.php">
            큰 수 : <input type="number" name="num1"/>
            작은 수 : <input type="number" name="num2"/>
            <input type="submit" name="submit"/>
        </form>
</body>
</html>


<?php
  error_reporting(E_ALL^ E_WARNING);
  $big_num = $_POST["num1"];
  $small_num = $_POST["num2"];
  $result = $big_num - $small_num;

  echo "두 수의 뺄셈:$result<br>";
  ?>
   