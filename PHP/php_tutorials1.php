
<!DOCTYPE html>
<html>
<body>
 
<?php

//Case Sensitive .All variable names are case-sensitive.
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";


// This is a single-line comment

# This is also a single-line comment

/*
This is a multiple-lines comment block
that spans over multiple
lines
*/


//Creating Variables
$txt = "Hello world!";
$x = 5; // global scope
echo "Say $txt<br>";
echo "Say " .$txt. " to all.<br>";


//Global Scope
echo "<br>Global Scope";
function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest();
echo "<p>Variable x outside function is: $x</p>";


//Local Scope
echo "<br>Local Scope";
function myTest1() {
    $y = 5; // local scope
    echo "<p>Variable y inside function is: $y</p>";
} 
myTest1();

// using y outside the function will generate an error
echo "<p>Variable y outside function is: $y</p>";

//Global Keyword
echo "Global Keyword : ";
$a = 5;
$b = 10;
function myTest2() {
    global $a, $b;
    $b = $a + $b;
}
myTest2();
echo $b;

//Data Types
print "<br><br>Data Types - <br>"; //print is also used for output
echo "String : ";
$x = "Hello world!";
echo "$x<br>";
echo "Integer : ";
$c = 5985;
var_dump($c); //var_dump() function returns the data type and value
echo "<br>Float : ";
$d = 10.365;
var_dump($d);
echo "<br>Boolean : ";
$t = true;
$f = false;
echo "$t";
echo "<br>Array : ";
$abc = array("Volvo" , "BMW" , "Audi");
var_dump($abc);
echo "<br>Object : ";
class Car {
    function Car() {
        $this->model = "VW";
    }
}
$herbie = new Car();
echo $herbie->model;
echo "<br>Null : ";
$n = null;
var_dump($n);

?>
 
</body>
</html>