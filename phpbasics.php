
<!DOCTYPE html>
<html>
<body>

<?php
//#1
define(foo,'The value of $date: ');
echo constant('foo');
echo  date("Y-m-d") . "<br>";

define(faa, 'The value of $tar: ');
echo constant('faa');
$tar = '2017/05/24';
echo " $tar " . "<br>";

define(fee, 'The value of $year: ');
echo constant('fee');
$year = '2012,396,300,2000,1100,1089';
$y2 = explode(',',$year);
print_r($y2);
echo  "<br>". "<br>";

//#2
define(boo,'2) $date with - replaced with ');
echo constant('boo');
echo  date("/Y/m/d") . "<br>";

//#3
define(baa,'3) $date compared to $tar: ');
echo constant('baa');
if (date && $tar > 0) {
    echo "The Future". "<br>";
} elseif (date && $tar < 0) {
    echo "The Past". "<br>";
} else {
    echo "Oops". "<br>";
}

//#4
define(bee,'4) Positions of "/" in $date: ');
echo constant('bee');
echo stripos(date("Y/m/d"),"/" );
echo " ";
echo strrpos(date("Y/m/d"),"/" ). "<br>";

//#5
define(Coo,'5) Number of Words in $date: ');
echo constant('Coo');
$str = "d,a,t,e";
$str2 = explode(',',$str);
//print_r ($str2);
end($str2);
echo key($str2). "<br>";

//#6
define(Caa,'6) Length of $date String: ');
echo constant('Caa');
echo strlen(date("Y/m/d")). "<br>";

//#7
define(Cee,'7) ASCII value of first char in $date string: ');
echo constant('Cee');
echo ord("2"). "<br>";

//#8
define(Daa,'8) Last two Chars in $date: ');
echo constant('Daa');
echo substr(date("Y/m/d"), -2). "<br>";

//#9
define(Doo,'9) Date Array: ');
echo constant('Doo');
$d = date("Y/m/d");
$d2 = explode('/',$d);
print_r($d2);
echo "<br>";


//#10
define(Dee,'10) Leap Years  '). "<br>";
echo constant('Dee');
echo "<br>";

function check_leap_year($year)
{
    return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) == 0)));
}


$years = '2012,396,300,2000,1100,1089';
$y2 = explode(',',$years);
foreach($y2 as $year){
    $test_leap_year = check_leap_year($year);
    if ($test_leap_year) {
        echo $year,':'." True".' | ';
    } else{
        echo $year,':'." False".' | ';
    }
}



?>
</body>
</html>
