<?php
//5장 연습문제
//Q5-1.
//   echo ceil(11.2)."<br>";
//   echo floor(7.8)."<br>";
//   echo sqrt(81)."<br>";
//   echo pow(2,4);

//Q5-7
//   $point = "1300/3600/9000/200";

//   $arr = explode("/", $point);
//   for($i=0; $i<count($arr); $i++){
//     echo $arr[$i]."점<br>";
//   }

//Q5-8
//   $email = array("test", "naver.com");
//   $str = join("@", $email);

//   echo $str;

//Q5-9 
//   $arr = [];
//   array_push($arr, "사과");
//   array_push($arr, "오렌지");
//   array_push($arr, "딸기");

//   $str = join("/", $arr);
//   echo $str;

  $file1 = fopen("text1.txt", "r");
  $file2 = fopen("text2.txt", "w");

  $str = "";
  $number = 1;
  while(!feof($file1)) {
    $str .= $number." :".fgets($file1);
    $number++;
  }
  fwrite($file2, $str);
  echo "파일 쓰기 완료!";

  fclose($file1);
  fclose($file2);

