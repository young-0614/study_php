<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method="POST" action="ex3.php">
            년도를 입력하세요 : <input type="number" name="year"/>
            <input type="submit" name="submit"/>
        </form>
</body>
</html>
<?php
  error_reporting(E_ALL^ E_WARNING);
  $year = $_POST["year"];
  if(($year%4==0 && $year%100!=0)  || $year%400==0){
    echo "윤년(leap year)";
  }
  else{
    echo "평년(common year)";
  }
  ?>