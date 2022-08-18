<?php
//예제3-19   for($i=1; $i<=5; $i++){
//     echo $i."행: ";
//     for($j=1; $j<=10; $j++) {
//         echo $j."";
//     }
//     echo "<br>";
//   }

// 예제3-21  $string = "";
//   $string .= "<table border='1'>";
//   for ($i=2; $i<=9; $i++){
//     $string .= "<tr>";
//     for ($j=1; $j<=9; $j++){
//         $x = $i * $j;
//         $string .= "<td>".$i."x".$j."=".$x."</td>";
//     }
//     $string .= "</tr>";
//   }
//   $string .= "</table>";

//   echo $string;

// 예제3-22   for($i=1; $i<=9; $i++){
//     for($j=1;$j<=$i; $j++){
//         echo $i;
//     }
//     echo "<br>";
//    }

    //예제 3-23 for($i=9; $i>=1; $i--) {
    //     for($j=1; $j<=$i; $j++){
    //         echo $i;
    //     }
    //     echo "<br>";
    // }

    for($i=1; $i<=9; $i++){
        for($j=1; $j<=9-$i; $j++) {
            echo "&nbsp;";
        }
        for ($j=1; $j<=$i; $j++){
            echo "*";
        }
        echo "<br>";
    }
?>