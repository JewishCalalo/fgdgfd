<!DOCTYPE html>
<html>
    <body>

    </body>
</html>

<?php
//printing and initial tests for php
echo "Hello World! <br>";
echo "Hello World! <br>";

//variable references
$color = "Red";
$coLor = "Blue";
$num = 1;
echo "My Value is: ". $color. "<br>";
echo "My Value is: ". $coLor. "<br>";
echo "My Value is: ". $num. "<br>";

$x = 2;
$y = 3;
echo "Arithmetic Operations on variable 
x and y <br>";
echo $x * $y. "<br>";

//introduction to classes in php
class Fruit{
    private $color;
    private $taste;
    private $goodness;
    private $concatenatedValues;

    public function message(){
        return "I am a class with no Constructor!";
    }

    public function setColor($color){
        $this->color = $color;
    }
    public function setTaste($taste){
        $this->taste = $taste;
    }
    public function setGoodness($goodness){
        $this->goodness = $goodness;
    }
    public function getColor(){
        return $this->color;
    }
    public function getGoodness(){
        return $this->goodness;
    }
    public function getTaste(){
        return $this->taste;
    }
}

class StringTransformer{
    private $string;
    public function __construct($string){
        $this->string = $string;
    }

    public function getStringLength(){
        echo strlen($this->string);
    }
    public function getStringWords(){
        echo str_word_count($this->string);
    }
    public function getStringReverse(){
        echo strrev($this->string);
    }
}
//classes and instances of class i.e objects
$Orange = new Fruit();
$Orange -> setColor("Orange");
$Orange -> setTaste("Sweet");
$Orange -> setGoodness("Very Good!");

echo "Orange is ". $Orange -> getTaste(). "<br>";
echo "Orange is ". $Orange -> getColor(). "<br>";
echo "Orange is ". $Orange -> getGoodness(). "<br>";
echo "<br>";

//using methods
$ST = new StringTransformer("This is my String!");
$ST -> getStringLength();
echo "<br>";
$ST -> getStringWords();
echo "<br>";
$ST -> getStringReverse();
echo "<br>";

//while loops
echo "While Loops";
echo "<br>";
$x = 1;
while($x <= 5) {
 echo "The number is: $x <br>";
 $x++;
}
echo "<br>";
echo "do while loops";
echo "<br>";
//do while loops
$x = 1;
do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
echo "<br>";
echo "For Loops";
echo "<br>";
//for loops
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
   }
echo "<br>";
echo "for each loop";
echo "<br>";
//foreach loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}
echo "<br>";
echo "<br>";

//Examples of Arrays
//Regular Arrays
$myArray = array("Volvo", "BMW", "Toyota");
//We can also create 
$myArray[3] = "Mustang";
$myArray[4] = "Ferrari";

//printing arrays
echo "Regular Arrays";
echo "<br>";
foreach($myArray as $value){
    echo "$value <br>";
}
echo "<br>";
echo "<br>";

//looping through arrays using for loops
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
for($x = 0; $x < $arrlength; $x++) {
 echo $cars[$x];
 echo "<br>";
}
echo "<br>";
echo "<br>";

//printing Associative Arrays
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br>";
echo "<br>";
//Associative Array
//x as keys and x_value as values of the keys
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $x_value) {
 echo "Key=" . $x . ", Value=" . $x_value;
 echo "<br>";
}
echo "<br>";

//Multi Dimensional Arrays
$MultiArray = array(
    array("First", "Second", "Third"),
    array("Fourth", "Fifth", "Sixth"),
    array("Seventh", "Eight", "Ninth")
);

for ($row = 0; $row < 3; $row++){
    for($col = 0; $col <3; $col++){
        echo $MultiArray[$row][$col]. " ";    
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
//Another Multi Dimensional Array
$MyTable = array(
    array("Name", "Age", "EyeColor"),
    array("John", "24", "Hazel"),
    array("Jane", "23", "Blue")
);

for($row = 0; $row < 3; $row++){
    for($col = 0; $col <3; $col++){
        echo $MyTable[$row][$col]. " ";
    }
    echo "<br>";
}



?>