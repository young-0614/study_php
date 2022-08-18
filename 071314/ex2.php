<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method="POST" action="ex2.php">
            <!-- 단을 입력하세요 : <input type="number" name="n"/> -->
            첫번째 숫자를 입력하세요 : <input type="text" name="num1"/><br>
            두번째 숫자를 입력하세요 : <input type="text" name="num2"/>
            <!--10개의 숫자를 입력하세요(,를 표시하세요) : <input type="text" name="input_num"/>-->
            <input type="submit" name="submit"/>
        </form>
</body>
</html>
<?php
    // $input_num = $_POST["input_num"];
    // $num = explode(" ", $input_num); //,를 기준으로 분리
    //연습문제 11
    // $sum = 0;
    // for($i=0; $i<=10; $i++){
    //     $sum += @$num[$i]; //이유는 잘 모르겠지만 정의 안 된 배열 앞에 @를 붙이면 에러 표시가 안 뜸
    // }
    // echo $sum;

    //연습문제 12
    // $count = 0;
    // for($i=1; $i<=9; $i++){
    //     if(@$num[$i]%2==0){
    //         $count++;
    //     }
    // }
    // echo $count;

    $a = $_POST["num1"];
    $b = $_POST["num2"];

    //연습문제 13
    // for($i=$a; $i<=$b; $i++){
    //     echo $i." ";
    // }

    //연습문제 14
    // $i = $b;
    // while($i>=$a){
    //     echo $i." ";
    //     $i --;
    // }

    // 연습문제 15
    // for($i=$a; $i<=$b; $i++){
    //     if($i%2==0){
    //         echo $i." ";
    //     }
    // }

    
    $sum = 0; //16,17,19번에 공통적으로 사용
    //연습문제 16
    // for($i=$a; $i<=$b; $i++){
    //     $sum += $i;
    // }
    // echo $sum;

    //연습문제 17
    // for($i=$a; $i<=$b; $i++){
    //     if($i%2==0){
    //         $sum += $i;
    //     }
    // }
    // echo $sum;

    // 연습문제 18
    $count = 0; //18번, 19번에 공통적으로 사용
    // for($i=$a; $i<=$b; $i++){
    //     $count++;
    // }
    // echo $count;

    //연습문제 19
    for($i=$a; $i<=$b; $i++){
        $sum += $i;
        $count++;
    }

    $avg = $sum / $count;
    echo $sum." ".number_format($avg, 1);

    //연습문제 20
//     $n = $_POST["n"];
//     for($i=1; $i<=9; $i++){
//         echo $n."*".$i."=".($n*$i)."<br>";
//   }
?>
   