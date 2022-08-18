<?php
//예제 배열, 날짜/시간, 파일 관련 함수
//   $animal = array("사자", "호랑이", "사슴", "여우");
//   $length = count($animal); //배열 요소 개수

//   echo "요소의 개수: $length"; 

//   array_push($animal, "펭귄");
//   array_push($animal, "코뿔소");
//   print_r($animal); //배열의 인덱스와 요소 값을 출력, 배열과 같은 데이터 형의 구조와 내용을 쉽게 볼 수 있다

//   array_pop($animal);
//   print_r($animal);

//   sort($animal); //sort는 오름차순, rsort는 내림차순
//   print_r($animal);

//   $score = array(93, 95, 93, 77, 100);
//   $sum = array_sum($score); //배열의 합계
//   $avg = $sum/count($score);

//   echo "합계: $sum"."<br>";
//   echo "평균: $avg";

//   $today = date("Y년 m월 d일");
//   echo "오늘은".$today."입니다.<br>";

//   echo date("Y-m-d")."<br>";
//   echo date("Y.m.d")."<br>";
//   echo date("Y-m-d H:i:s");

//   $timestamp = time();
//   echo "현재 시간 타임스탬프 : $timestamp <br>";

//   echo "현재 시간: ".date("Y-m-d H:i:s", $timestamp);

//   $current_time = time();

//   $time_diff = 2*24*60*60;
//   $before_1day = $current_time - $time_diff;
//   $after_1day = $current_time + $time_diff;

//   echo "현재 타임스탬프: $current_time <br>";
//   echo "현재 시간: ".date("Y-m-d H:i:s", $current_time)."<br>";
//   echo "-----------------------------------------------<br>";

//   echo "2일 전 타임스탬프: $before_1day <br>";
//   echo "현재 시간: ".date("Y-m-d H:i:s", $before_1day)."<br>";
//   echo "-----------------------------------------------<br>";

//   echo "2일 후 타임스탬프: $after_1day <br>";
//   echo "현재 시간: ".date("Y-m-d H:i:s", $after_1day)."<br>";

//   $file = fopen("hello.txt", "r"); 

//   while(!feof($file)) { //파일의 끝에 도달했는지 체크
//     echo fgets($file)."<br>";  //파일에서 한 줄의 데이터를 반환
//   }
//   fclose($file);

//   $file = fopen("data.csv", "r");
//   $header = fgetcsv($file);
//   $num = count($header);
//   echo "<h3>명 학생의 $num 과목 합계/평균 구하기</h3>";

//   while(!feof($file)) {
//     $sum = 0;
//     $line = fgetcsv($file);
//     foreach($line as $v) {
//         $sum += $v;
//     }
//     $avg = round($sum/3, 2);
//     echo "합계: $sum , 평균: $avg <br>";
//   }

//   fclose($file);

   $file = fopen("hello.txt", "w"); 

   $str= "문구 추가";
   fwrite($file, $str);

   echo "파일쓰기 완료!";
   fclose($file);
  ?>