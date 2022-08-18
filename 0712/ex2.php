<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method="POST" action="ex2.php">
            정수를 입력하세요 : <input type="number" name="num"/>
            <input type="submit" name="submit"/>
        </form>
</body>
</html>
<?php
  error_reporting(E_ALL^ E_WARNING);
  $num = $_POST["num"];
  if($num==0){
    echo "zero";
  }
  elseif($num>0){
    echo "plus";
  }
  else{
    echo "minus";
  }
  ?>