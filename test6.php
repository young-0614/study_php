<?php
//예제 문자열 관련 함수
//   $str = "<h3>MySQL은 PHP와 같이 많이 사용된다.</h3>";
//   echo $str;

//   $str2 = htmlspecialchars($str);  //특정 문자를 html 특수 문자로 변환
//   echo $str2;

//   $str = "&lt;h3&gt;MySQL은 PHP와 같이 많이 사용된다.&lt;/h3&gt;";
//   echo $str."<br>";

//   $str2 = htmlspecialchars_decode($str); //위에꺼 반대
//   echo $str2;

//   $tel = "010-1234-5678";
//   $arr = explode("-",$tel);

//   $tle2 = $arr[0].$arr[1].$arr[2];
//   echo $tle2;

//   $arr = array("010", "1234", "5678");
//   $tel = join("-",$arr); //배열 요소 합치기

//   echo $tel;

//   $name = "홍길동";
//   $age = 20;

//   printf("%s님의 나이는 %d살 입니다.", $name, $age);

//   $tel = "2022-10-30";
//   $tel2 = str_replace("-", "/", $tel);
//   echo $tel2."<br>";

//   $str = "안녕하세요. \n반갑습니다.";
//   $str2 = str_replace("\n", "<br>", $str);
//   echo $str2;

//   $str = "PHP is fun!";

//   echo strtoupper($str)."<br>";
//   echo strtolower($str);

//   $str = "2022-03-25 21:30:50";

//   $year = substr($str, 0, 4); //특정 문자열 분리, 인덱스 0부터 4개의 문자열을 반환한다는 의미
//   $month = substr($str, 5, 2);
//   $day = substr($str, 8, 2);
//   $time = substr($str, 11);

//   echo $year."년<br>";
//   echo $month."월<br>";
//   echo $day."일<br>";
//   echo $time;

  $str = "PHP is fun!";
  echo strlen($str)."<br>"; //문자열 길이 구하기

  $str2 = "거북이";
  echo strlen($str2); //한글 한 글자 = 3바이트로 구성.. 그래서 반환되는 값이 9
  ?>