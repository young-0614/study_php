<?php
//교과서
//Q4-6
//   $num = array(3, 34, -3, -47, 9, 10, 12, 7, 8, -4, -13, 74);
//   $i=0;
//   echo "데이터: ";
//   while($i<=11){
//     echo $num[$i]." ";
//     $i++;
//   }

//Q4-7
//   $num = array(array(3,34,-3,-47,9,10,12,7,8,-4,-13,74), array(32,3,-34,42,19,1,-12,57,-8,-42,13,-21), array(2,9,-1,-12,89,0,15,7,-8,-33,3,7));
//   for($i=0; $i<=2; $i++){
//     echo $i+1;
//     echo " : ";
//     for($j=0; $j<=11; $j++){
//         echo $num[$i][$j]." ";
//     }
//     echo "<br>";
//   }


//Q4-8
//   $score = array(100, 100, 100, 100, 100, 100, 100, 100, 80, 80, 80, 80, 80, 80, 70, 70, 70, 70, 70, 70, 70, 60, 60, 60, 60, 30, 30, 30, 30, 30);
//   $count = array(0, 0, 0, 0, 0);
//   $grade = array("수", "우", "미", "양", "가");
//   $length = count($score);

//   for($i=0; $i<=$length; $i++){
//     if($score[$i]>=90){
//         $count[0] += 1;
//     }
//     elseif($score[$i]>=80){
//         $count[1] += 1;
//     }
//     elseif($score[$i]>=70){
//         $count[2] += 1;
//     }
//     elseif($score[$i]>=60){
//         $count[3] += 1;
//     }
//     elseif($score[$i]>=0){
//         $count[4] += 1;
//   }
//   }
//   for($j=0; $j<=4; $j++){
//     echo $grade[$j]." : ".$count[$j]."명";
//     echo "<br>";
//   }


 $seat = array(array(0,0,1,0,0,0,0,1,0,0), array(0,0,0,0,1,0,1,1,0,0), array(0,0,1,1,0,0,0,0,1,0), array(0,1,0,0,0,0,1,0,0,0), array(0,0,0,0,1,0,0,0,1,0));
 for($i=0; $i<=4; $i++){
    for($j=0; $j<=9; $j++){
        if($seat[$i][$j]==0){
            echo "□ ";
        }
        else{
            echo "■ ";
        }
    }
    echo "<br>";
 }
 echo "<br>";
 echo "□ : 예약 가능, ■ : 예약 불가능";
  ?>