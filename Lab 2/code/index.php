<?php
echo "Task 1<br>";
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name;
$order .= " and 5 nuggets, please";


// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

echo "<br><br> Task 2 <br>";

$var1 = 17;
echo $var1;
echo "<br>";
$var2 = 5;
echo $var2;
echo "<br>";
$var3 = 10.3;
echo $var3;
echo "<br>";
echo $var1 - $var2;
echo "<br>";
$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month;
echo "<br>";

echo "<br> Task 11 <br>";

$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language;
echo "<br>";

echo "<br> Task 12 <br>";

echo 8**2;
echo "<br>";

echo "<br> Task 13 <br>";

$my_num = 77;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;
echo "<br>";

echo "<br> Task 14 <br>";

$a = 10;
$b = 3;
echo $a % $b;
echo "<br>";
if ($a % $b == 0) {
    echo 'Делится' . $a / $b;
}
else {
    echo 'Делится с остатком ' . $a % $b;
}
echo "<br>";
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
$arrrand = [];
for ($i = 0; $i < 10; $i++){
    $arrand[] = rand(1, 100);
}
foreach ($arrand as $val){
    echo $val . " ";
}
echo "<br>";
$a = 3;
$b = 5;
echo abs($a - $b) . "<br>";
$arrabs = [1, 2, -1, -2, 3, -3];
$j = 0;
foreach ($arrabs as $val) {
    $arrabs[$j] = abs($val);
    $j++;
}
foreach ($arrabs as $val) {
    echo $val . " ";
}
echo "<br>";
$number = 30;
$divs = [];
$k = 1;
while ($k <= ceil($number / 2)) {
    if ($number % $k == 0) {
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
while ($sum <= 10) {
    $sum += $arr10[$ind];
    $ind++;
}
echo $ind . "<br>";

