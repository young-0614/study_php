<?php
//교과서
// <!--Q3-1-->
//    <!-- <!DOCTYPE html>
//     <html>
//     <head>
//     </head>
//     <body>
//         <form method="POST" action="ex1.php">
//             시험점수 : <input type="number" name="score"/>
//             <input type="submit" name="submit"/>
//         </form>
// </body>
// </html>
// <php>
 /* error_reporting(E_ALL^ E_WARNING);
  $score = $_POST["score"];

  if($score>=90){
    if($score>100){
        echo "입력 점수 오류!";
    }
    else{
        echo "시험점수: $score"."<br>";
        echo "등급: 수";
    }
  }
  elseif($score>=80){
    echo "시험점수: $score"."<br>";
    echo "우";
  }
  elseif($score>=70){
    echo "시험점수: $score"."<br>";
    echo "미";
  }
  elseif($score>=60){
    echo "시험점수: $score"."<br>";
    echo "양";
  }
  elseif($score>=0){
    echo "시험점수: $score"."<br>";
    echo "가";
  }
  else{
    echo "입력 점수 오류!";
  }*/


    //Q3-2  $num = 100;
    //  while($num<=200){
    //     if($num%2!=0)
    //         echo $num."<br>";
    //     $num++;
    //  }

    //Q3-3 for($num=100; $num<=200; $num++){
    //     if($num%2!=0){
    //         echo $num."<br>";
    //     }
    // }

    // Q3-4 $num = 1;
    // while($num<=100) {
    //     if($num%3 == 0){
    //         if($num%10==0) echo $num."<br/>";
    //         else echo $num." ";
    //     }
    //     $num++;

    // }

    //Q3-5 $count = 0;
    // for($num=300; $num<=350; $num++){
    //     if($num%5!=0){
    //         echo $num." ";
    //         $count++;
    //         if($count%10==0){
    //             echo "<br>";
    //         }
    //     }

    // }

    // echo "----------------<br>";
    // echo "인치 센티미터<br>";
    // echo "----------------<br>";

    // //Q3-6 $inch = 10;
    // // while($inch<=20){
    // //     $cm = $inch * 2.54;
    // //     echo $inch." ".$cm."<br>";
    // //     $inch++;
    // // }

    //Q3-7 for($inch=10; $inch<=20; $inch++){
    //     $cm = $inch * 2.54;
    //     echo $inch." ".$cm."<br>";
    // }

    // echo "----------------";

    //Q3-8,9 $string = "";
    // $string .= "<table border='1'>";
    // $string .= "<tr><th width='100'>달러</th><th width='100'>원화</th><th width='100'>유로</th>";

    // for($daller=10; $daller<=20; $daller+=2){
    //     $won = $daller * 1180.60;
    //     $euro = $daller * 1350.30;
    //     $string .= "<tr><th>$daller</th><th>$won</th><th>$euro</th>";
    // }

    // $string .= "</table>";

    // echo $string;

    //Q3-10 for($i=1; $i<=5; $i++){
    //     for($j=1; $j<=10; $j++){
    //         echo "* ";
    //     }
    //     echo "<br>";
    // }

    for($i=1; $i<=10; $i++){
        for($j=1; $j<=$i; $j++){
            echo "* ";
        }
        for($k=9; $k=0; $k--){
            echo "&nbsp;";
        }
        echo "<br>";
    }
?>