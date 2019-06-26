<!DOCTYPE html>
<body>

<?php
echo "String functions -<br>";
echo "Length : ";
echo strlen("Hello world!"); // outputs 12
echo "<br>Count The Number of Words : ";
echo str_word_count("Hello world!"); // outputs 2
echo "<br>Reverse : ";
echo strrev("Hello world!"); // outputs !dlrow olleH
echo "<br>Search For a Specific Text ";
echo strpos("Hello world!", "world"); // outputs 6
echo "<br>Replace Text : ";
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
echo "<br><br>Constants -<br>";
define("GREETING", "Welcome to Uttarakhand<br>");
echo GREETING; //case-sensitive 
define("GREETING", "Welcome to Uttarakahnd", true);
echo greeting; //case-insensitive 
echo "<br><br>If else :<br> ";
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>Switch : <br>";
$favcolor = "red";
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br>While loop :<br> ";
$x = 1; 
while($x <= 5) {
    echo "$x ";
    $x++;
}
$y = 1; 
echo "<br>Do-While loop :<br> ";
do {
    echo "$y ";
    $y++;
} while ($y <= 5);
echo "<br>For loop :<br> ";
for ($a = 0; $a <= 10; $a++) {
    echo "$a ";
} 
echo "<br>Foreach loop : <br>";
$colors = array("red", "green", "blue", "yellow"); 
foreach ($colors as $value) {
    echo "$value ";
}
echo "<br><br>Functions : ";
function writeMsg() {
    echo "<br>Hello world!<br>";
}
writeMsg();

function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");

echo "<br>Arrays : <br>";
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>";
$cars = array("Volvo", "BMW", "Toyota");
echo "Count : " . count($cars);
echo "<br>Associative Arrays :<br> ";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br>Sort : ";
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo " ";
}
echo "<br>Rsort : ";
rsort($numbers);
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo " ";
}
echo "<br>According to Key(ascending) : ";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo " ";
}

echo "<br>According to Key(descending) : ";
$aged = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($aged);
foreach($aged as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo " ";
}
?>


</body>
</html> 