<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method="POST" action="ex1.php">
            숫자를 입력하세요 : <input type="number" name="input_num"/>
            <input type="submit" name="submit"/>
        </form>
</body>
</html>


<?php
  // 연습문제 1
   error_reporting(E_ALL^ E_WARNING);
   $input_num = $_POST["input_num"];
  // for($num=1; $num<=$input_num; $num++){
  //   echo $num." ";
  // }

//연습문제 2,3,4
  // for($num=1; $num<=$input_num; $num++){
  //   if($num%5==0 || $num%3==0){
  //       echo $num." ";
  //   }
  // }

  //연습문제 5
// for($num=1; $num<=$input_num; $num++){
  //   if($num%3!=0){
  //       echo $num." ";
  //   }
  // }

  //연습문제 6
  //  for($num=1; $num<=$input_num; $num++){
  //   if($num%3==0){
  //     echo "X ";
  //   }
  //   else{
  //     echo $num." ";
  //   }
  //  }

  //연습문제 7
  //  for($num=1; $num<=$input_num; $num++){
  //   $sum += $num;
  //  }
  //  echo $sum;

  //연습문제 8
  //  for($num=1; $num<=$input_num; $num++){
  //   if($num%5==0){
  //     $sum += $num;
  //   }
  //  }
  //  echo $sum;

  //연습문제 9
  //  for($num=1; $num<=$input_num; $num++){
  //   if($num%5==0 || $num%3==0){
  //     $sum += $num;
  //   }
  //  }
  //  echo $sum;

  //연습문제 10  
    $count = 0; //3 혹은 5의 배수의 숫자들이 몇 개 있는지 확인하는 변수
    for($num=1; $num<=$input_num; $num++){
      if($num%5==0 || $num%3==0){
        $sum += $num;
        $count++;
      }
     }
     $avg = $sum / $count;
     $avg = round($avg, 5);
     echo $sum." ".$avg;
  ?>