<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method="POST" action="ex4.php">
            번호를 입력하세요 : <input type="number" name="number"/>
            <input type="submit" name="submit"/>
        </form>
</body>
</html>
<?php
  error_reporting(E_ALL^ E_WARNING);
  $number = $_POST["number"];
  switch($number){
    case 1:
        echo "dog";
        break;
    case 2:
        echo "cat";
        break;
    case 3:
        echo "chick";
        break;
    default:
        echo "I don't know.";
  }
  ?>