<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method="POST" action="ex5.php">
            정수를 입력하세요(1~12 사이) : <input type="number" name="number"/>
            <input type="submit" name="submit"/>
        </form>
</body>
</html>
<?php
  error_reporting(E_ALL^ E_WARNING);
  $number = $_POST["number"];
  switch($number){
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo "$number"."월은 31일까지 있습니다";
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        echo "$number"."월은 30일까지 있습니다";
        break;
    default:
        echo "$number"."월은 28일까지 있습니다";
  }
  ?>