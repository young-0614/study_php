<?php 
//예제3-1    $age = 70;
//    $pay = 2500;

//    if($age>=65) {
//     $pay=0;
//    }

//    echo "나이 : ".$age."세<br>";
//    echo "요금: ".$pay."원<br>";

//예제3-2    $pilgi = 75;
//    $silgi = 90;
//    $result = "불합격";
//    if($pilgi >= 70 and $silgi >= 70) {
//     $result = "합격";
//    }

//예제3-3    echo "필기 점수: ".$pilgi.", 실기점수: ".$silgi."<br>";
//    echo "결과: ".$result;

//   $num = 12;

//   if($num%2==0){
//     echo $num."은(는) 짝수이다";
//   }
//   else{
//     echo $num."은(는) 홀수이다";
//   } 
//예제3-4    $height = 170;
//    $weight = 40;
//    $s = ($height-100)*0.9;

//    echo("키: $height <br>");
//    echo("몸무게: $weight <br>");

//    if($weight>$s)
//     echo("다이어트 필요.");
//    else
//     echo("다이어트 불필요. ");

//예제3-5    $score=100;

//    if($score>=95){
//     $grade = "A+";
//    }
//    elseif($score>=90){
//     $grade = "A";
//    }
//    elseif($score>=85){
//     $grade = "B+";
//    }
//    elseif($score>=80){
//     $grade = "B";
//    }
//    elseif($score>=75){
//     $grade = "C+";
//    }
//    elseif($score>=70){
//     $grade = "C";
//    }
//    elseif($score>=60){
//     $grade = "D";
//    }
//    else {
//     $grade = "F";
//    }

//    echo "입력된 점수: ".$score."점<br>";
//    echo "등급: ".$grade;

//예제3-6   $now_year = 2022;
//   $now_month = 4;
//   $now_day = 15;

//   $birth_year = 2000;
//   $birth_month = 7;
//   $birth_day = 10;

//   if($birth_month < $now_month){
//     $age = $now_year - $birth_year;
//   }
//   elseif($birth_month == $now_month){
//     if($birth_day <= $now_day){
//         $age = $now_year - $birth_year;
//     }
//     else{
//         $age = $now_year - $birth_year - 1;
//     }
//   }
//   else{
//     $age = $now_year - $birth_year-1;
//   }

//   echo "오늘 날짜: ".$now_year."/".$now_month."/".$now_day."<br>";
//   echo "출생년월일: ".$birth_year."/".$birth_month."/".$birth_day."<br>";
//   echo "만 나이: ".$age."세";

//예제3-7   $my_color = "노랑";
  
//   switch($my_color){
//     case "빨강":
//         echo "나는".$my_color."를 좋아합니다.";
//         break;
//     case "노랑":
//         echo "나는".$my_color."를 좋아합니다.";
//         break;
//     case "파랑":
//         echo "나는".$my_color."를 좋아합니다.";
//         break;
//     default:
//     echo "나는".$my_color."은 내가 좋아하는 색상이 아닙니다.";
//   }
   //예제 3-8 $x=1;

   // while($x<=5){
   //    echo "안녕하세요<br>";
   //    $x++;
   // }

   // $x=1;
   // $sum=0;
   // while($x<=100){
   //    if($x%5==0){
   //       $sum += $x;
   //    $x++;
   //    }
   // }

   // echo "5의 배수 합계: $sum"; 예제 3-10,3-11
   // ?>