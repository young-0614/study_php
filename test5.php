<?php
//내장함수1
//    $str = "   Hello    ";

//    echo "trim() 함수를 사용하지 않고 출력<br/>";
//    echo "|".$str."|";

//    echo "<br /><br />";
//    echo "trim() 함수를 사용하고 출력<br/>";
//    echo "|".trim($str)."|";

//   $str = "Hello World";
//   echo "원문<br />";
//   echo $str;
//   echo "<br /><br />";

//   echo "대문자로 출력<br />";
//   echo strtoupper($str);
//   echo "<br /> <br />";

//   echo "소문자로 출력<br />";
//   echo strtolower($str);
//   echo "<br /><br />";

//   $food = array('fruits' => array('orange', 'banana', 'apple'), 'vaggie' => array('carrot', 'collard', 'pea'));

//   echo count($food, COUNT_RECURSIVE); //안에 있는 배열까지 전부 가져와 출력
//   echo "<br /><br />";
//   echo count($food);

//   echo "<br /><br />";
//   $str = "Hellow World";
//   $change_word = str_replace("World", "PHP World", $str);
//   echo $change_word;

//   echo "<br /><br />";
//   $fileName = "backgraund.jpg";
//   $execute = substr($fileName,-4,4);
//   if($execute == '.jpg' || $execute == '.phh' || $execute == '.bmp' || $execute == '.git'){
//     echo "업로드한 파일은 이미지 파일입니다.<br />";
//   }
//   else{
//     echo "업로드한 파일은 이미지 파일이 아닙니다.<br />";
//   }

//   $email = "choyh0614@naver.com";
//   $email_Array = explode("@", $email);
//   echo "<pre>";
//   var_dump($email_Array);

//   echo "이메일 호스트 출력<br />";
//   echo $email_Array[1];

//   $start_Time = mktime(16, 20, 00, 07, 15, 2022);
//   $end_Time = mktime(18, 10, 00, 07, 15, 2022);

//   if($start_Time <= time() && $end_Time > time()){
//     echo $start_Time."<br>";
//     echo "할로윈의 신부가 곧 상영됩니다!";
//   }
//   else{
//     echo $end_Time."<br>";
//     echo"할로윈의 신부 상영이 종료되었습니다!";
//   }
//   echo "<br />";

//교과서 내장함수 예제 <수학 관련>
  echo abs(8)."<br>";
  echo abs(-8)."<br>";
  echo abs(5.3)."<br>";
  echo abs(-5.3)."<br>"; //절대값 구하는 함수

  echo ceil(3.2)."<br>";
  echo ceil(3.7)."<br>"; //올림

  echo floor(3.2)."<br>";
  echo floor(3.7)."<br>"; //내림

  echo round(3.2)."<br>";
  echo round(3.7)."<br>"; //반올림

  echo sqrt(25)."<br>"; //제곱근
  echo sqrt(2)."<br>";

  echo pow(2,3)."<br>"; //거듭제곱
  echo pow(3, 4)."<br>";

//   echo rand(1,6)."<br>";
//   echo rand(1,6)."<br>";
//   echo rand(1,6)."<br>"; //랜덤

  echo dechex(255)."<br>";
  echo dechex(128)."<br>"; //10진수를 16진수로

  echo hexdec("ff")."<br>";
  echo hexdec("80")."<br>"; //16진수를 10진수로
?>