<?php
// 교과서
// 연습문제 Q4-1
//   function triangleArea($w, $h) {
//     $area = $w * $h * 1/2;
//     echo "삼각형의 너비: $w cm"."<br>";
//     echo "삼각형의 높이: $h cm"."<br>";
//     echo "삼각형의 넓이는 $area cm2입니다.";
//   }

// $w = 12;
// $h = 10;
// triangleArea($w, $h);

// 연습문제 Q4-2
//   function wholeSum($start, $end) {
//     $sum =0;
//     for($i=$start; $i<=$end; $i++){
//         $sum += $i;
//     }
//     return $sum;
//   }
//   echo "10에서 50까지의 정수 합계: ".wholeSum(10,50);

//연습문제 Q4-3
//   function drainageSum($d) {
//     $sum = 0;
//     for($i=1; $i<=100; $i++){
//         if($i%$d==0){
//             $sum += $i;
//         }
//     }
//     return $sum;
//   }

//   echo "1~100 정수 중 5의 배수 합계: ".drainageSum(5);

// 연습문제 Q4-4
//   function ticket($day, $age){
//     if($day=="조조"){
//         if($age<=18 || $age>=65){
//             $pay = 7000;
//         }
//         else{
//             $pay = 9000;
//         }
//     }
//     if($day=="일반"){
//         if($age>=65){
//             $pay = 7000;
//         }
//         elseif($age<=18){
//             $pay = 10000;
//         }
//         else{
//             $pay = 13000;
//         }
//     }
//     return $pay;
//   }

//   $day = "조조";
//   $age = 40;

//   echo "구분: $day"."<br>";
//   echo "나이: $age"."<br>";
//   echo "입장료는 ".ticket($day, $age)."원 입니다";

// 연습문제 Q4-5
  function ticket1($count, $age){ //일반인경우
    if($count=="개인"){
        if($age<=7){
            $pay = 6000;
        }
        elseif($age<=18){
            $pay = 7000;
        }
        else{
            $pay = 9500;
        }
    }
    if($count=="단체"){
        if($age<=7){
            $pay = 5000;
        }
        elseif($age<=18){
            $pay = 6000;
        }
        else{
            $pay = 8500;
        }
    }
    return $pay;
  }

  function ticket2($count, $age){ //할인대상자인경우
    if($count=="개인"){
        if($age<=7){
            $pay = 5000;
        }
        elseif($age<=18){
            $pay = 6000;
        }
        else{
            $pay = 8500;
        }
    }
    if($count=="단체"){
        if($age<=7){
            $pay = 4000;
        }
        elseif($age<=18){
            $pay = 5000;
        }
        else{
            $pay = 7500;
        }
    }
    return $pay;
  }

  $people = "일반";
  $count = "개인";
  $age = 15;

  if($people=="일반"){
    echo "구분: $people"."<br>";
    echo "개인/단체: $count"."<br>";
    echo "나이: $age"."<br>";
    echo "입장료는 ".ticket1($count, $age)."입니다";
  }
  elseif($people=="할인대상자"){
    echo "구분: $people"."<br>";
    echo "개인/단체: $count"."<br>";
    echo "나이: $age"."<br>";
    echo "입장료는 ".ticket2($count, $age)."입니다";
  }
?>