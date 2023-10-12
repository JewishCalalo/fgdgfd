<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activity 6 Part 1</title>
</head>
<body>
<?php
#examples of Arrays:
#key => value pairs
$vegetables = array('corn' => 'yellow', 'beet' => 'red',
'carrot'=> 'orange');
$dinner = array(0 => 'Sweet Corn and Asparagus',
1 => 'Lemon Chicken',
2 => 'Braised Bamboo Fungus');
$computers = array('trs-80' => 'Radio Shack',
2600 => 'Atari',
'Adam' => 'Coleco');
#printing array values
print("<b>The array values for our array
vegetables array: </b>");
print "<table border = 1>\n";
foreach($vegetables as $key => $value){
print "<tr><td> $key </td><td> $value </td></tr>\n";
}
print "</table>\n";
print "<br />";
print("<b>The array values for our
array dinner array: </b>");
print "<table border = 1>\n";
foreach($dinner as $key => $value){
print "<tr><td> $key </td><td> $value </td></tr>\n";
}
print "</table>\n";
print "<br />";
print("<b>The array values for our
array computers array: </b>");
print "<table border = 1>\n";
foreach($computers as $key => $value){
print "<tr><td> $key </td><td> $value </td></tr>\n";
}
print "</table>\n";
print "<br />";
print "<br />";
print "<hr />";
print("<h3>These are the values for meals array: \n</h3>");
print "<br />";
#Modifying an Array with foreach()
$meals = array(
    'Walnut Bun' => 1,
    'Cashew Nuts and White Mushrooms' => 4.95,
    'Dried Mulberries' => 3.00,
    'Eggplant with Chili Sauce' => 6.50
    );
    foreach($meals as $key => $value){
    print("<strong>$key</strong> and price: <strong>$value</strong> \n");
    print "<br />";
    }
    print("<br />");
    print("<hr />");
    print("<h3>These are the values for meals array: \n </h3>");
    foreach ($meals as $key => $value){
    $meals[$key] = $meals[$key] * 2;
    }
    //Iterate over the array again to print the changed values:
    foreach ($meals as $key => $value){
    printf ("The new price of <strong> %s </strong> is <em> \$%.2f.</em> \n",
    $key, $value);
    print "<br />";
    }
    print "<br />";
    print "<hr />";
    //using the foreach for array values
    print "<h3> Using foreach loops for Indexed Arrays:</h3>";
    print "<br />";
    $dinner = array('Sweet Corn and Asparagus',
    'Lemon Chicken', 'Braised Bamboo Fungus');
    foreach ($dinner as $dish){
    print "You can eat $dish\n";
    print "<br />";
    }
    print "<hr />";
    //Iterating over the numeric value array with for loop
    print "<h3> Using for loops for Indexed Arrays:</h3>";
    print "<br />";
    for($i = 0, $num_dishes = count($dinner); $i < $num_dishes; $i++){
    print "Dish number $i is $dinner[$i]\n";
    print "<br />";
    }
    print "<hr />";
    //Interpolating array element values in double-quoted strings
    print("<h3>Interpolating array element values: </h3>");
    print "<br />";
    $meals['breakfast'] = 'Walnut Bun';
    $meals['lunch'] = 'Eggplant with Chili Sauce';
    $amounts = array(3, 6);
    print "For breakfast, I'd like <strong>$meals[breakfast]</strong> and for
    lunch,\n";
    print "<br />";
    print "I'd like <strong>$meals[lunch]</strong>. I want
    <strong>$amounts[0]</strong> at breakfast and\n";
    print "<br />";
    print "<strong>$amounts[1]</strong> at lunch.";
    print "<hr />";
    #Imploding in PHP concatenates all of the values of an array
    print "<h3>Imploding array values: </h3>";
    print "<br />";
    $letters = array('A', 'B', 'C', 'D');
    $words = array("Pencil", "Pen", "Apple", "Pineapple");
    print implode(" ",$letters);
    print "<br />";
    print implode(" ", $words);
    print "<hr />";
    #sort1 sort()
    #sort2 sort()
    #sort3 sort()
    function sort1(array $array){#sorting using the sort() function
    print "<strong>Before Sorting:\n</strong>";
    print "<br />";
    foreach ($array as $key => $value) {
    print "<em> \$array:</em> $key $value\n";
    print "<br />";
    }
    print "<strong>After Sorting:\n</strong>";
    print "<br />";
    sort($array);
    foreach ($array as $key => $value) {
    print "<em> \$array:</em> $key $value\n";
    print "<br />";
    }
}
function sort2(array $array){#sorting usign the asort() function
print "<strong>Before Sorting:\n</strong>";
print "<br />";
foreach ($array as $key => $value) {
print "<em> \$array:</em> $key $value\n";
print "<br />";
}
print "<strong>After Sorting:\n</strong>";
print "<br />";
asort($array);
foreach ($array as $key => $value) {
print "<em> \$array:</em> $key $value\n";
print "<br />";
}
}
function sort3(array $array){#sorting using the asort() function
print "<strong>Before Sorting:\n</strong>";
print "<br />";
foreach ($array as $key => $value) {
print "<em> \$array:</em> $key $value\n";
print "<br />";
}
print "<strong>After Sorting:\n</strong>";
print "<br />";
ksort($array);
foreach ($array as $key => $value) {
print "<em> \$array:</em> $key $value\n";
print "<br />";
}
}
function sort4(array $array){#sorting using the rsort() function
print "<strong>Before Sorting:\n</strong>";
print "<br />";
foreach ($array as $key => $value) {
print "<em> \$array:</em> $key $value\n";
print "<br />";
}
print "<strong>After Sorting:\n</strong>";
print "<br />";
rsort($array);
foreach ($array as $key => $value) {
print "<em> \$array:</em> $key $value\n";
print "<br />";
}
}
function sort5(array $array){#sorting usign the arsort() function
print "<strong>Before Sorting:\n</strong>";
print "<br />";
foreach ($array as $key => $value) {
print "<em> \$array:</em> $key $value\n";
print "<br />";
}
print "<strong>After Sorting:\n</strong>";
print "<br />";
arsort($array);
foreach ($array as $key => $value) {
print "<em> \$array:</em> $key $value\n";
print "<br />";
}
}
function sort6(array $array){#sorting using the krsort() function
print "<strong>Before Sorting:\n</strong>";
print "<br />";
foreach ($array as $key => $value) {
print "<em> \$array:</em> $key $value\n";
print "<br />";
}
print "<strong>After Sorting:\n</strong>";
print "<br />";
krsort($array);
foreach ($array as $key => $value) {
print "<em> \$array:</em> $key $value\n";
print "<br />";
}
}
#Sorting arrays using the sort function
print "<h3>Sorting Arrays with the sort() function:</h3>";
print "<br />";
$dinner = array('Sweet Corn and Asparagus',
'Lemon Chicken',
'Braised Bamboo Fungus');
$meal = array('breakfast' => 'Walnut Bun',
'lunch' => 'Cashew Nuts and White Mushrooms',
'snack' => 'Dried Mulberries',
'dinner' => 'Eggplant with Chili Sauce');
sort1($dinner);#sort()
print "<br />";
sort1($meal);#sort()
print "<br />";
print "<h3>Sorting Arrays with the asort() function:</h3>";
sort2($dinner);#asort()
print "<br />";
sort2($meal);#asort()
print "<br />";
print "<h3>Sorting Arrays with the ksort() function:</h3>";
sort3($dinner);#ksort()
print "<br />";
sort3($meal);#ksort()
print "<h3>Sorting Arrays with the rsort() function:</h3>";
print "<br />";
$dinner = array('Sweet Corn and Asparagus',
'Lemon Chicken',
'Braised Bamboo Fungus');
$meal = array('breakfast' => 'Walnut Bun',
'lunch' => 'Cashew Nuts and White Mushrooms',
'snack' => 'Dried Mulberries',
'dinner' => 'Eggplant with Chili Sauce');
sort4($dinner);#rsort()
print "<br />";
sort4($meal);#rsort()
print "<br />";
print "<h3>Sorting Arrays with the arsort() function:</h3>";
sort5($dinner);#arsort()
print "<br />";
sort5($meal);#arsort()
print "<br />";
print "<h3>Sorting Arrays with the krsort() function:</h3>";
sort6($dinner);#krsort()
print "<br />";
sort6($meal);#krsort()
print "<br />";
print "<hr />";
#Multi dimensional arrays
print "<h3>Printing and accessing Multi Dimensional Arrays: </h3>";
print "<br />";
$flavors = array('Japanese' => array('hot' => 'wasabi',
'salty' => 'soy sauce'),
'Chinese' => array('hot' => 'mustard',
'pepper-salty' => 'prickly ash'));
#Using foreach loops to iterate over values from Multi Dimensional Arrays
// $culture is the key and $culture_flavors is the value (an array)
foreach ($flavors as $culture => $culture_flavors) {
// $flavor is the key and $example is the value
foreach ($culture_flavors as $flavor => $example) {
print "A <strong>$culture $flavor</strong> flavor is <em>$example</em>.\n";
}
}
print "<br />";
print "<br />";
#Using for loops to iterate over Multi Dimensional Array Values
$specials = array( array('Chestnut Bun', 'Walnut Bun', 'Peanut Bun'),
array('Chestnut Salad','Walnut Salad', 'Peanut Salad') );
// $num_specials is 2: the number of elements in the first dimension of $specials
for ($i = 0, $num_specials = count($specials); $i < $num_specials; $i++) {
// $num_sub is 3: the number of elements in each subarray
for ($m = 0, $num_sub = count($specials[$i]); $m < $num_sub; $m++) {
print "Element [$i][$m] is {$specials[$i][$m]}\n";
}
}
?>        
</body>
</html>