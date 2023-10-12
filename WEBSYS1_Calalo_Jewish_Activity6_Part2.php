<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activity 6 Part 2</title>
</head>
<body>
<?php
#Functions and Arguments in PHP
print "<h3>This is a function which changes the values of the argument:</h3>";
function countdown($top) {
while ($top > 0) {
print "$top..";
$top--;
}
print "boom!\n";
}
$counter = 5;
countdown($counter);
print "Now, counter is $counter";
print "<hr />";
#Returning Values from functions
function restaurant_check($meal, $tax, $tip){
$tax_amount = $meal * ($tax / 100);
$tip_amount = $meal * ($tip / 100);
$total_amount = $meal + $tax_amount + $tip_amount;
return $total_amount;
}
//Find the total cost of a $15.22 meal with 8.25% tax
//and a 15% tip
print "<h3>Returning Values from a function: </h3>";
$total = restaurant_check(15.22, 8.25, 15);
print 'I only have $20 in cash, so...';
if ($total > 20) {
print "I must pay with my credit card.";
} else {
print "I can pay with cash.";
}
print "<br />";
print "<h3>Returning array values from a function: </h3>";
//Returning Array values from a function
function restaurant_check2($meal, $tax, $tip) {
$tax_amount = $meal * ($tax / 100);
$tip_amount = $meal * ($tip / 100);
$total_notip = $meal + $tax_amount;
$total_tip = $meal + $tax_amount + $tip_amount;
return array($total_notip, $total_tip);
}
$totals = restaurant_check2(15.22, 8.25, 15);
if($totals[0] < 20){
print "The total without tip is less than $20.";
}
if($totals[1] < 20){
print "The total with tip is less than $20.";
}
print "<br />";
#Multiple return statements in a function
function payment_method($cash_on_hand, $amount){
if($amount > $cash_on_hand){
return 'credit card';
}
else {
return 'cash';
}
}
print "<h3>Passing a return value to another function: </h3>";
$total = restaurant_check(15.22, 8.25, 15);
$method = payment_method(20, $total);
print 'I will pay with ' . $method;
#I will pay with cash
print "<br />";
print "<hr />";
print "<h3>Assignment and function call inside a test expression: </h3>";
#Assignment and function call inside a test expression
function complete_bill($meal, $tax, $tip, $cash_on_hand) {
$tax_amount = $meal * ($tax / 100);
$tip_amount = $meal * ($tip / 100);
$total_amount = $meal + $tax_amount + $tip_amount;
if ($total_amount > $cash_on_hand) {
// The bill is more than we have
return false;
} else {
// We can pay this amount
return $total_amount;
}
}
if ($total = complete_bill(15.22, 8.25, 15, 20)) {
print "I'm happy to pay $total.";
} else {
    print "I don't have enough money. Shall I wash some dishes?";
}
#Variable Scope
print "<h3>Testing Variable Scope in the context of Functions </h3>";
$dinner = 'Curry Cuttlefish';
function vegetarian_dinner(){
$dinner = 'Sauteed Pea Shoots';
print "Dinner is $dinner, or ";
print $dinner;
print "\n";
}
function kosher_dinner(){
$dinner = 'Kung Pao Chicken';
print "Dinner is $dinner, or ";
print $dinner;
print "\n";
}
print "<strong>Vegetarian </strong>";
vegetarian_dinner();
print "<br />";
print "<strong>Kosher </strong>";
kosher_dinner();
print "Regular dinner is $dinner";
print "<br />";
#Globals Array
print "<h3>Testing Variable Scope in the context of Functions</h3>";
$dinner = 'Curry Cuttlefish';
function macrobiotic_dinner() {
$dinner = "Some Vegetables";
print "Dinner is $dinner";
// Succumb to the delights of the ocean
print " but I'd rather have ";
print $GLOBALS['dinner'];
print "\n";
}
macrobiotic_dinner();
print "<br />";
print "Regular dinner is: $dinner";
print "<br />";
print "<hr />";
print "<h3>Testing and Modifying a variable with GLOBALS</h3>";
$dinner = 'Curry Cuttlefish';
function hungry_dinner() {
$GLOBALS['dinner'] .= ' and Deep-Fried Taro';
}
print "Regular dinner is $dinner";
print "\n";
hungry_dinner();
print "Hungry dinner is $dinner";
?>
</body>
</html>