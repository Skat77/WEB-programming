<?php
echo "Task 1 <br>";
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name;
$order .= " and 5 nuggets, please";


// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name. <br>";

echo "<br> Task 2 <br>";

$var1 = 17;
echo $var1 . "<br>";
$var2 = 5;
echo $var2 . "<br>";
$var3 = 10.3;
echo $var3 . "<br>";
echo $var1 - $var2 . "<br>";
$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month . "<br>";

echo "<br> Task 11 <br>";

$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language . "<br>";

echo "<br> Task 12 <br>";

echo 8**2 . "<br>";

echo "<br> Task 13 <br>";

$my_num = 77;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer . "<br>";

echo "<br> Task 14 <br>";

$a = 10;
$b = 3;
echo $a % $b . "<br>";
if (0 === $a % $b) {
    echo 'Делится' . $a / $b . "<br>";
}
else {
    echo 'Делится с остатком ' . $a % $b . "<br>";
}
$st = pow(2,10);
echo $st . "<br>";
echo sqrt(245) . "<br>";
$arr = [4, 2, 5, 19, 13, 0, 10];
$ans = 0;
foreach ($arr as $val) {
    $ans += pow($val, 2);
}
echo $ans . "<br>";
echo round(sqrt(379), 0) . "<br>";
echo round(sqrt(379), 1) . "<br>";
echo round(sqrt(379), 2) . "<br>";
$arr587 = ["floor" => floor(sqrt(587)), "ceil" => ceil(sqrt(587))];
echo $arr587["floor"] . " " . $arr587["ceil"] . "<br>";
echo min(4, -2, 5, 19, -130, 0, 10) . " " . max(4, -2, 5, 19, -130, 0, 10) . "<br>";
echo rand(1, 100) . "<br>";
$arrRand = [];
for ($i = 0; $i < 10; $i++){
    $arrRand[] = rand(1, 100);
}
foreach ($arrRand as $val){
    echo $val . " ";
}
echo "<br>";
$a = 3;
$b = 5;
echo abs($a - $b) . "<br>";
$arrAbs = [1, 2, -1, -2, 3, -3];
$j = 0;
foreach ($arrAbs as $val) {
    $arrAbs[$j] = abs($val);
    $j++;
}
foreach ($arrAbs as $val) {
    echo $val . " ";
}
echo "<br>";
$number = 30;
$divs = [];
$k = 1;
while (ceil($number / 2) >= $k) {
    if (0 === $number % $k) {
        $divs[] = $k;
    }
    $k++;
}
foreach ($divs as $val) {
    echo $val . " ";
}
echo "<br>";
$arr10 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$ind = 0;
while (10 >= $sum) {
    $sum += $arr10[$ind];
    $ind++;
}
echo $ind . "<br>";

echo "<br> Task 15 <br>";

function printStringReturnNumber($str): int {
    echo $str . " -> ";
    return(int)$str;
}
$my_num = printStringReturnNumber("12345");
echo $my_num . "<br>";

echo "<br> Task 16 <br>";

function increaseEnthusiasm($str): string {
    return $str . "!<br>";
}
echo increaseEnthusiasm("Good morning");
function repeatThreeTimes($str): string {
    return $str . " " . $str . " " . $str;
}
echo repeatThreeTimes("Go") . "<br>";
echo increaseEnthusiasm(repeatThreeTimes("Go"));
function cut($str, $letters = 10): string {
    $res = "";
    for($i = 0; $i < $letters; $i++) {
        $res .= $str[$i];
    }
    return $res . "<br>";
}
echo cut("Hello, World", 5);
$arrRec = [1, 4, 6, 14, 45, 77, 100];
function output($arr, $index = 0): void {
    if (count($arr) === $index) {
        return;
    }
    echo $arr[$index] . " ";
    output($arr, $index + 1);
}
output($arrRec);
echo "<br>";
function sumOfDigits($num): int {
    $res = 0;
    while (0 < $num) {
        $res += $num % 10;
        $num = floor($num / 10);
    }
    if (9 < $res) {
        $res = sumOfDigits($res);
    }
    return $res;
}
echo sumOfDigits(1984) . "<br>";

echo "<br> Task 17 <br>";

$arrX = [];
for ($i = 0; $i < 5; $i++) {
    $arrX[] = "x";
    for ($j = $i; $j > 0; $j--) {
        $arrX[$i] .= "x";
    }
}
foreach ($arrX as $val) {
    echo $val . " ";
}
echo "<br>";
function arrayFill(string $str, int $length): array
{
    $array = [];
    for ($i = 0; $i < $length; $i++) {
        $array[] = $str;
    }
    return  $array;
}
$arrToFill = arrayFill("Hehe", 5);
foreach ($arrToFill as $val) {
    echo $val . " ";
}
echo "<br>";
$arr2Dim = [[1, 2, 3], [4, 5], [6]];
$sum  = 0;
foreach ($arr2Dim as $dim) {
    foreach ($dim as $val) {
        $sum += $val;
    }
}
echo $sum . "<br>";
$arrToCreate = [[]];
$value = 1;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $arrToCreate[$i][$j] = $value;
        $value++;
    }
}
foreach ($arrToCreate as $dim) {
    foreach ($dim as $val) {
        echo $val . " ";
    }
}
echo "<br>";
$arr2539 = [2, 5, 3, 9];
$result = ($arr2539[0] * $arr2539[1]) + ($arr2539[2] * $arr2539[3]);
echo $result . "<br>";
$user = ["name" => "Arseniy", "surname" => "Davydovskiy", "patronymic" => "Igorevich"];
echo $user["surname"] . " " . $user["name"] . " " . $user["patronymic"] . "<br>";
$date = ["year" => "2003", "month" => "09", "day" => "03"];
echo $date["year"] . "-" . $date["month"] . "-" . $date["day"] . "<br>";
$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr) . "<br>";
echo $arr[count($arr) - 1] . " " . $arr[count($arr) - 2] . "<br>";

echo "<br> Task 18 <br>";

function greaterThan10($a, $b): string
{
    if (10 < $a + $b) {
        return "Sum of $a and $b is greater than 10";
    }
    return "Sum of $a and $b is not greater than 10";
}
echo greaterThan10(6, 3) . "<br>";
function equalNumbers($a, $b): bool
{
    if ($a === $b) {
        return true;
    }
    return false;
}
$a = 17;
$b = 18;
echo "Equality of numbers $a and $b: " . (equalNumbers($a, $b) ? "true" : "false") . "<br>";
$test = 0;
echo ($test == 0) ? "Верно" : "";
echo "<br>";
$age = 77;
if (10 > $age || 99 < $age) {
    echo "Age is out of range <br>";
}
else {
    $sum = 0;
    while (1 < $age) {
        $sum += $age % 10;
        $age = floor($age / 10);
    }
    if (10 <= $sum) {
        echo "Sum is double-digit number <br>";
    }
    else {
        echo "Sum is single-digit number <br>";
    }
}
$arr = [1, 2, 3];
if (3 === count($arr)) {
    echo array_sum($arr) . "<br>";
}

echo "<br> Task 19 <br>";

for ($i = 0; $i <= 20; $i++) {
    for ($j = $i; $j > 0; $j--) {
        echo "x";
    }
    echo "<br>";
}

echo "<br> Task 20 <br>";

$array = [4, 8, 3, 2, 11, 17, 9];
echo array_sum($array) / count($array) . "<br>";
$sumOf1To100 = ((1 + 100) / 2) * 100;
echo $sumOf1To100 . "<br>";
$array = [1, 4, 9, 16, 25, 36, 49, 64, 81, 100];
$arraySqrt = array_map("sqrt", $array);
foreach ($arraySqrt as $val) {
    echo $val . " ";
}
echo "<br>";
$numbers = range(1, 26);
$letters = range ("a", "z");
$arrayAlphabet = array_combine($letters, $numbers);
print_r($arrayAlphabet);
echo "<br>";
$str = "1234567890";
$strSplit = str_split($str, 2);
echo array_sum($strSplit) . "<br>";
