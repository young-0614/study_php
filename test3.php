<?php 
//    $input_data = 0;
//    while($input_data<=10)
//    {
//     echo "10보다 작거나 같아요!!".$input_data."<br><br>";
//     $input_data++;
//    }
//    echo "10보다 커요!!".$input_data."<br>";

// for($first_num=2; $first_num<=9; $first_num++)
// {
//     for($second_num=1; $second_num<=9; $second_num++)
//     {
//         echo $first_num."X".$second_num."=".$first_num * $second_num."<br>";
//     }
//     echo "<br>";}

// 예제3-12  echo "----------<br>";
//   echo "마일 킬로미터<br>";
//   echo "----------<br>";

//   $mile = 10;
//   while($mile<=50){
//     $km = $mile * 1.609344;
//     $km = round($km,2);
//     echo $mile."&nbsp;".$km."<br>";
//     $mile += 10;
//   }
//   echo "----------";

// 예제 3-13   for($i=1; $i<=10; $i++){
//     echo $i."<br>";
//   }

//  예제 3-14 $sum=0;
//   for($i=1; $i<=10; $i++) {
//     $sum += $i;
//   }

//   echo "1에서 10까지의 합계: ".$sum;
  
//d예제 3-15    $sum=0;
//    for($i=1; $i<=100; $i++) {
//     if($i%3==0){
//         $sum += $i;
//     }
//    }

//    echo "1에서 100까지의 3의 배수의 합계: $sum";

    $string = "";
    echo "<table border='1'>";
    echo "<tr><th width='100'>섭씨</th><th width='100'>화씨</th>";

    for ($c=-10; $c<=30; $c+=10){
        $f = ($c * 9/5) + 32;
        $string .= "<tr><th>$c</th><th>$f</th>";
    }

    $string .= "</table>";

    echo $string;


?>