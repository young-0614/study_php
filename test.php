<!--<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method="POST" action="../Test/test.php">
            이름 : <input type="text" name="name"/>
            전화번호 : <input type="text" name="number"/>
            생일(YYYY) : <input type="num" name="birthday"/>
            <input type="submit" name="submit"/>
        </form>-->
        <?php
           function test1($num1, $num2) {
            static $num3 = 1; //static는 값이 남아있다.
            $result = $num1 + $num2 + $num3;
            $num3++;
            return $result;
           }
           global $val;
           $val = test1(3,4);
           echo "$val<br>";
           $val = test1(3,4);
           echo "$val<br>";
           $val = test1(3,4);
           echo "$val<br>";
           $val = test1(3,4);
           echo "$val<br>";

            /*function longdate($timestamp)
            {
                return date("n월 j일 Y년", $timestamp);
            }

            echo longdate(time());
            숫자에서 문자열로 자동 변환
            $number = 12345 * 67890;
            echo substr($number, 3, 1);

            문자열에서 숫자로의 자동 변환
            $pi = "3.1215927";
            $radius = 5;
            echo $pi * ($radius * $radius);
        /*
           $author = "YoungHAe Cho";

           echo "Developers, Developers, Developers, Developers, Developers, Developers, Developers, Developers, Developers! 
           -$autohor.";
           echo "<br>";
           echo "<br>";
           $author_2 = "Gildong Hong";
           $text = "Measuring programmin progress by lines of code is like Measuring aircuraft building progress by weight. 
           -$author_2.";
           echo $text;

           echo "<br>";
           echo "<br>";
           $author_3 = "Bill";

           echo <<<_END
           This is a Headline.
           This is the first line.
           This is the second.
           - Written by $author_3.
           _END;

           echo "<br>";
           echo "<br>";
           $author = "AI";

           $out = <<<_END
           This is a Headline

           This is the first lie.
           This is tgesecond.
           - Written by author.
           _END;
           echo $out;

           error_reporting(E_ALL^ E_WARNING);
           $name = $_POST["name"];
           $number .= $_POST["number"];
           $birthday = strval($_POST["birthday"]);
           echo "이름: ".$name."<br>";
           echo "전화번호: ".$number."<br>";
           echo "생일: ".$birthday;
           */
        ?>
    </body>
</html>