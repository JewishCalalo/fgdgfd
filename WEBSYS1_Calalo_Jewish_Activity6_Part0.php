JavaScript
Essential skills you need for CRUD (Create Read Update Delete):
❖SQL
What is PHP?
❖PHP is an acronym for "PHP: Hypertext Preprocessor"
❖PHP is a widely-used, open source scripting language
❖PHP scripts are executed on the server
❖PHP is free to download and use
What is a PHP File?
❖PHP files can contain text, HTML, CSS, JavaScript, and PHP
code
❖PHP code is executed on the server, and the result is
returned to the browser as plain HTML
❖PHP files have extension ".php"
What Can PHP Do?
❖PHP can generate dynamic page content
❖PHP can create, open, read, write, delete, and close files
on the server
❖PHP can collect form data
❖PHP can send and receive cookies
❖PHP can add, delete, modify data in your database
❖PHP can be used to control user-access
❖PHP can encrypt data
With PHP you are not limited to output HTML. You can output
images, PDF files, and even Flash movies. You can also output
any text, such as XHTML and XML.
Why PHP?
❖PHP runs on various platforms (Windows, Linux, Unix, Mac OS
X, etc.)
❖PHP is compatible with almost all servers used today
(Apache, IIS, etc.)
❖PHP supports a wide range of databases
❖PHP is free. Download it from the official PHP resource:
www.php.net
❖PHP is easy to learn and runs efficiently on the server side
What's new in PHP 7
❖PHP 7 is much faster than the previous popular stable
release (PHP 5.6)
❖PHP 7 has improved Error Handling
❖PHP 7 supports stricter Type Declarations for function
arguments
❖PHP 7 supports new operators (like the spaceship operator:
<=>)
PHP Installation
To start using PHP (choose one of the ff ways):
1. You can “Use a web host with PHP and MySQL support”
2. “Set Up PHP on Your Own PC” - install a web server on your
own PC, and then install PHP and MySQL
3. Install open-source cross-platform web server solution
stack package containing PHP and MySQL. Xampp or Wamp(for
our class, computer lab setup/work station, we will opt for
this)
1. Use a Web Host With PHP Support
If your server has activated support for PHP you do not need to
do anything.
Just create some .php files, place them in your web directory,
and the server will automatically parse them for you.
You do not need to compile anything or install any extra tools.
Because PHP is free, most web hosts offer PHP support.
2. Set Up PHP on Your Own PC
install a web server
install PHP
install a database, such as MySQL
The official PHP website (PHP.net) has installation
instructions for PHP: http://php.net/manual/en/install.php
3. Cross-platform web server solution stack package
1) Install xampp or wamp
2) In the control panel make sure that Apache and MySQL are
working properly without errors.
3) Locate where you installed xampp or wamp (usually in C
drive)
4) Open the folder and locate a folder named “htdocs” in it.
Figure 1. XAMPP Directory
5) Inside that “htdocs” folder, this is where we create
folders for our projects.
Where to save programs and how to Run PHP CODE Using
XAMPP/WAMP?
1.) Firstly, you have to save your program in the XAMPP or
WAMP htdocs directory as shown in Figure 1.
2.) Save your Project Folder and Files inside htdocs.
3.) Open the XAMPP Control Panel.
4.) Start Apache (it should run smoothly and the Apache label
should turn green as seen in Figure 2).
Figure 2. XAMPP Control Panel
i.) If Apache displays a red X mark try clicking on the X
mark. Wait and Start it Again.
5.) Assuming that you have a PHP code already. Access and run
using any browser by typing
localhost/nameOfTheFolder/nameOfTheFile.php as seen in
Figure 3.
Figure 3. localhost
PHP Syntax
A PHP script is executed on the server, and the plain HTML
result is sent back to the browser.
Basic PHP Syntax
A PHP script can be placed anywhere in the document.
A PHP script starts with <?php and ends with ?>:
The default file extension for PHP files is ".php".
A PHP file normally contains HTML tags, and some PHP scripting
code.
PHP Code Example:
<!DOCTYPE html>
<html>
<body>
<h1>My first PHP page</h1>
<?php
echo "Hello World!";
?>
</body>
</html>
PHP Case Sensitivity
In PHP, keywords (e.g. if, else, while, echo, etc.), classes,
functions, and user-defined functions are not case-sensitive.
<!DOCTYPE html>
<html>
<body>
<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>
</body>
</html>
All variable names are case-sensitive
<!DOCTYPE html>
<html>
<body>
<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>
</body>
</html>
Comments in PHP
A comment in PHP code is a line that is not executed as a part
of the program. Its only purpose is to be read by someone who
is looking at the code.
Instructor Note: It is essential to include comments to document
what a particular code snippet does.
<!DOCTYPE html>
<html>
<body>
<?php
// This is a single-line comment
# This is also a single-line comment
/*
This is a multiple-lines comment block
that spans over multiple
lines
*/
?>
<!--
Comment in html in case you forgot! ;)
-->
</body>
</html>
PHP Variables
Variables are "containers" for storing information.
Creating (Declaring) PHP Variables:
In PHP, a variable starts with the $ sign, followed by the name
of the variable:
<?php
$msg = "Hello world!";
$num1 = 6;
$num2 = 25.5;
?>
Side Note[3]:
Statically v. dynamically v. strongly v. weakly typed languages
Statically-typed programming languages do type checking (i.e.,
the process of verifying and enforcing the constraints of types
on values) at compile-time, whereas dynamically-typed languages
do type checks at runtime.
Examples
Statically-typed: C, C++, Java.
Dynamically-typed: Perl, Ruby, Python, PHP, JavaScript.
Weakly-typed languages make conversions between unrelated types
implicitly; whereas Strongly-typed languages don’t allow
implicit conversions between unrelated types.
Python is a strongly-typed language
var = 21; #type assigned as int at runtime.
var = var + "dot"; #type-error, string and int cannot be concatenated.
print(var);
JavaScript is a weakly-typed language
value = 21;
value = value + "dot";
console.log(value);
/*
This code will run without any error. As Javascript
is a weakly-typed language, it allows implicit conversion
between unrelated types.
*/
PHP Variables
A variable can have a short name (like x and y) or a more
descriptive name (age, num1, total_volume).
Rules for PHP variables:
❖A variable starts with the $ sign, followed by the name of
the variable
❖A variable name must start with a letter or the underscore
character
❖A variable name cannot start with a number
❖A variable name can only contain alpha-numeric characters
and underscores (A-z, 0-9, and _ )
❖Variable names are case-sensitive ($age and $AGE are two
different variables)
Output
The PHP echo statement is often used to output data to the
screen.
<?php
$name = "Divine ";
echo "Hello $name!";
$name = "Divine ";
echo "Hello " . $name . "!";
$x = 5;
$y = 4;
echo $x + $y;
?>
PHP is a Loosely Typed Language
In the examples given, notice that we did not have to tell PHP
which data type the variable is.
PHP automatically associates a data type to the variable,
depending on its value. Since the data types are not set in a
strict sense, you can do things like adding a string to an
integer without causing an error.
In PHP 7, type declarations were added. This gives an option to
specify the data type expected when declaring a function, and
by enabling the strict requirement, it will throw a "Fatal
Error" on a type mismatch.
PHP Variables Scope
In PHP, variables can be declared anywhere in the script.
The scope of a variable is the part of the script where the
variable can be referenced/used.
PHP has three different variable scopes:
❖local
❖global
❖static
Variable with global scope:
<?php
$x = 5; // global scope
function myTest() {
// using x inside this function will generate an error
echo "<p>Variable x inside function is: $x</p>";
}
myTest();
echo "<p>Variable x outside function is: $x</p>";
?>
The global keyword is used to access a global variable from within a function.
<?php
$x = 5;
$y = 10;
function myTest() {
global $x, $y;
$y = $x + $y;
}
myTest();
echo $y; // outputs 15
?>
Variable with local scope:
<?php
function myTest() {
$x = 5; // local scope
echo "<p>Variable x inside function is: $x</p>";
}
myTest();
// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>
PHP The global Keyword
PHP also stores all global variables in an array called
$GLOBALS[index]. The index holds the name of the variable. This
array is also accessible from within functions and can be used
to update global variables directly.
<?php
$x = 5;
$y = 10;
function myTest() {
$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest();
echo $y; // outputs 15
?>
The static Keyword
Normally, when a function is completed/executed, all of its
variables are deleted. However, sometimes we want a local
variable NOT to be deleted. We need it for a further job.
To do this, use the static keyword when you first declare the
variable:
<?php
function myTest() {
static $x = 0;
echo $x;
$x++;
}
myTest();
myTest();
myTest();
?>
echo and print Statements
❖two basic ways to get output: echo and print.
❖echo and print are more or less the same. They are both used
to output data to the screen.
The differences are small: echo has no return value while print
has a return value of 1 so it can be used in expressions. echo
is marginally faster than print.
<?php
$txt1 = "Hello World!";
echo "<h2>" . $txt1 . "</h2>";
print "<h3>" . $txt1 . "</h3>";
// outputs Hello World in h2 then in h3 format
?>
Data Types in PHP
❖Integers
■ are whole numbers, without a decimal point, like 26.
$x = 26;
❖Float (also called double)
■ are floating-point numbers, like 3.14159 or 93.12.
$pi = 3.14159;
$x = 93.12;
❖Booleans
■ have only two possible values either true or false.
$x = true;
$y = false;
❖NULL
■ is a special type that only has one value: NULL.
■ A variable of this data type is a variable that has no
value assigned to it.
$x = null;
❖Strings
■ are sequences of characters, like 'Hello World'
■ can be any text inside quotes. You can use single or
double quotes.
$txt = "Hello World";
❖Arrays
■ are named and indexed collections of other values.
$cars = array("Volvo","BMW","Toyota");
❖Objects
■ are instances of programmer-defined classes, which can
package up both other kinds of values and functions that
are specific to the class.
■ a class is a template for objects, and an object is an
instance of a class.
■ when the individual objects are created, they inherit
all the properties and behaviors from the class, but
each object will have different values for the
properties.
■ If you create a __construct() function, PHP will
automatically call this function when you create an
object from a class.
<?php
class Car {
public $color;
public $model;
public function __construct($color, $model) {
$this->color = $color;
$this->model = $model;
}
public function message() {
return "My car is a " . $this->color . " " . $this->model . "!";
}
}
$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>
❖Resources
■ are special variables that hold references to resources
external to PHP (such as database connections). It is
not an actual data type.
PHP Strings
A string is a sequence of characters, like "Hello world!".
PHP String Functions
In this chapter we will look at some commonly used functions to
manipulate strings.
❖strlen()
■ Return the Length of a String.
<?php
echo strlen("Hello world"); // outputs 11
?>
❖str_word_count()
■ Count Words in a String.
<?php
echo str_word_count("Hello world!"); // outputs 2
?>
❖strrev()
■ Reverse a String.
<?php
echo strrev("Hello world!"); // outputs !dlrow olleH
?>
❖str_replace()
■ Replace Text Within a String.
<?php
echo str_replace("world", "Johnny", "Hello world!"); // outputs Hello
Johnny!
?>
Complete list of String Functions in PHP:
https://www.php.net/manual/en/ref.strings.php
Conditional Statements
In PHP we have the following conditional statements:
if statement - executes some code if one condition is true
if...else statement - executes some code if a condition is true
and another code if that condition is false
if...elseif...else statement - executes different codes for
more than two conditions
switch statement - selects one of many blocks of code to be
executed
<?php
$t = date("H");
echo "<p>The hour (of the server) is " . $t;
echo ", and will give the following message:</p>";
if ($t < "10") {
echo "Have a good morning!";
} elseif ($t < "20") {
echo "Have a good day!";
} else {
echo "Have a good night!";
}
?>
The switch Statement
Use the switch statement to select one of many blocks of code
to be executed.
<?php
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
?>
Loops
In PHP, we have the following loop types:
❖while - loops through a block of code as long as the
specified condition is true
<?php
$x = 1;
while($x <= 5) {
echo "The number is: $x <br>";
$x++;
}
?>
❖do...while - loops through a block of code once, and then
repeats the loop as long as the specified condition is true
<?php
$x = 1;
do {
echo "The number is: $x <br>";
$x++;
} while ($x <= 5);
?>
❖for - loops through a block of code a specified number of
times
<?php
for ($x = 0; $x <= 10; $x++) {
echo "The number is: $x <br>";
}
?>
❖foreach - loops through a block of code for each element in
an array
<?php
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
echo "$value <br>";
}
?>
Functions
User Defined Functions:
Besides the built-in PHP functions, it is possible to create
your own functions.
❖A function is a block of statements that can be used
repeatedly in a program.
❖A function will not execute automatically when a page loads.
❖A function will be executed by a call to the function.
<?php
function writeMsg() {
echo "Hello world!";
}
writeMsg(); // call the function
?>
Built-in functions:
Complete list of all PHP built in Function and Method listing:
https://www.php.net/manual/en/indexes.functions.php
Arrays
An array can hold many values under a single name, and you can
access the values by referring to an index number.
The array() function is used to create an array in PHP:
array();
Three types of arrays in PHP:
Indexed arrays - Arrays with a numeric index.
Associative arrays - Arrays with named keys.
Multidimensional arrays - Arrays containing one or more arrays.
Indexed Arrays
There are two ways to create indexed arrays:
The index can be assigned automatically (index always starts at
0), like this:
$cars = array("Volvo", "BMW", "Toyota");
or the index can be assigned manually:
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
Example:
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
Loop Through an Indexed Array:
<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
for($x = 0; $x < $arrlength; $x++) {
echo $cars[$x];
echo "<br>";
}
?>
Associative Arrays
Associative arrays are arrays that use named keys that you
assign to them.
There are two ways to create an associative array:
$age = array("Peter"=>"35", "Ben"=>"37",
"Joe"=>"43");
or:
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";
Example:
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>
Loop Through an Associative Array:
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $x_value) {
echo "Key=" . $x . ", Value=" . $x_value;
echo "<br>";
}
?>
Multidimensional Arrays
PHP supports multidimensional arrays that are two, three, four,
five, or more levels deep.
A two-dimensional array is an array of arrays (a
three-dimensional array is an array of arrays of arrays).
Figure 4. Product Table
Consider the screenshot of a table in Figure 4, these data can
be stored in an array:
$products = array (
array("Apple Macbook Pro",70000,5),
array("Apple Macbook Air",59000,6),
array("MSI GV",45000,3)
);
To access the elements of the $products array, point out two
indices first (one for row and one for column).
The code below displays the first 2 rows:
<?php
echo $products[0][0].": price: ".$products[0][1].", stock:
".$products[0][2].".<br>";
echo $products[1][0].": price: ".$products[1][1].", stock:
".$products[1][2].".<br>";
?>
Loop:
<?php
for ($row = 0; $row < 3; $row++) {
echo "<p><b>Row number $row</b></p>";
echo "<ul>";
for ($col = 0; $col < 3; $col++) {
echo "<li>".$products[$row][$col]."</li>";
}
echo "</ul>";
}
?>
Global Variables - Superglobals
Some predefined variables in PHP are "superglobals", which
means that they are always accessible, regardless of scope -
and can be accessed from any function, class or file without
having to do anything special.
The PHP superglobal variables are:
❖$GLOBALS
❖$_SERVER
❖$_REQUEST
❖$_POST
❖$_GET
❖$_FILES
❖$_ENV
❖$_COOKIE
❖$_SESSION
$GLOBALS
$GLOBALS is a PHP super global variable which is used to access
global variables from anywhere in the PHP script (also from
within functions or methods).
PHP stores all global variables in an array called
$GLOBALS[index]. The index holds the name of the variable.
<?php
$a = 20;
$b = 22;
function addition() {
$GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}
addition();
echo $c;
?>
$_SERVER
$_SERVER is a PHP super global variable which holds information
about headers, paths, and script locations.
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
Check the complete list here:
https://www.php.net/manual/en/reserved.variables.server.php
$_REQUEST
PHP $_REQUEST is a PHP super global variable which is used to
collect data after submitting an HTML form.
The example below shows a form with an input field and a submit
button. When a user submits the data by clicking on "Submit",
the form data is sent to the file specified in the action
attribute of the <form> tag. In this example, we point to this
file itself for processing form data. If you wish to use
another PHP file to process form data, replace that with the
filename of your choice. Then, we can use the super global
variable $_REQUEST to collect the value of the input field:
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit" name="send">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// collect value of input field
$name = $_REQUEST['fname'];
if (empty($name)) {
echo "Name is empty";
} else {
echo $name;
}
}
?>
$_POST
PHP $_POST is a PHP super global variable which is used to
collect form data after submitting an HTML form with
method="post". $_POST is also widely used to pass variables.
The example below shows a form with an input field and a submit
button. When a user submits the data by clicking on "Submit",
the form data is sent to the file specified in the action
attribute of the <form> tag. In this example, we point to the
file itself for processing form data. If you wish to use
another PHP file to process form data, replace that with the
filename of your choice. Then, we can use the super global
variable $_POST to collect the value of the input field:
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// collect value of input field
$name = $_POST['fname'];
if (empty($name)) {
echo "Name is empty";
} else {
echo $name;
}
}
?>
$_GET
PHP $_GET is a PHP super global variable which is used to
collect form data after submitting an HTML form with
method="get".
$_GET can also collect data sent in the URL.
Assume we have an HTML page that contains a hyperlink with
parameters:
<html>
<body>
<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
</body>
</html>
When a user clicks on the link "Test $GET", the parameters
"subject" and "web" are sent to "test_get.php", and you can
then access their values in "test_get.php" with $_GET.
The example below shows the code in "test_get.php":
<html>
<body>
<?php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>
</body>
</html>
Difference between GET and POST
In the GET method we can not send
large amounts of data, rather limited
data is sent because the request
parameter is appended into the URL.
In the POST method a large amount of
data can be sent because the request
parameter is appended into the body.
GET request is comparatively better
than Post so it is used more than the
Post request.
POST request is comparatively less
better than Get so it is used less than
the Get request.
GET request is comparatively less
secure because the data is exposed in
the URL bar.
POST request is comparatively more
secure because the data is not
exposed in the URL bar.
Requests made through the GET
method are stored in Browser history.
Requests made through the POST
method are not stored in Browser
history.
GET method requests can be saved as
bookmarks in the browser.
POST method requests can not be
saved as bookmarks in the browser.
Requests made through the GET
method are stored in cache memory of
Browser.
Requests made through the POST
method are not stored in cache
memory of Browser.
Data passed through the GET method
can be easily stolen by attackers.
Data passed through the POST
method can not be easily stolen by
attackers.
In the GET method only ASCII
characters are allowed.
In the POST method all types of data
are allowed.
Variable handling Functions
isset()
Determine if a variable is declared and is different from null.
isset() will return false when checking a variable that has
been assigned to null. Also note that a null character ("\0")
is not equivalent to the PHP null constant.
If multiple parameters are supplied then isset() will return
true only if all of the parameters are considered set.
Evaluation goes from left to right and stops as soon as an
unset variable is encountered.
unset()
If a variable has been unset with the unset() function, it is
no longer considered to be set.
<?php
$a = array ('test' => 1, 'hello' => NULL, 'pie' => array('a' => 'apple'));
var_dump(isset($a['test'])); // TRUE
var_dump(isset($a['foo'])); // FALSE
var_dump(isset($a['hello'])); // FALSE
// The key 'hello' equals NULL so is considered unset
// If you want to check for NULL key values then try:
var_dump(array_key_exists('hello', $a)); // TRUE
// Checking deeper array values
var_dump(isset($a['pie']['a'])); // TRUE
var_dump(isset($a['pie']['b'])); // FALSE
var_dump(isset($a['cake']['a']['b'])); // FALSE
?>
is_null()
Finds whether a variable is null
empty()
Determine whether a variable is empty
A variable is considered empty if it does not exist or if its
value equals false. empty() does not generate a warning if the
variable does not exist.
Regular Expressions
What is a Regular Expression?
A regular expression is a sequence of characters that forms a search
pattern. When you search for data in a text, you can use this search
pattern to describe what you are searching for.
A regular expression can be a single character, or a more complicated
pattern.
Regular expressions can be used to perform all types of text search and
text replace operations.
Syntax
In PHP, regular expressions are strings composed of delimiters, a
pattern and optional modifiers.
Syntax:“ + delimiter + pattern + delimiter + modifier + ”
$exp = "/09/i";
In the example above,
❖ / is the delimiter - sets the boundary of the regular expression.
❖ 09 is the pattern that is being searched for - change the pattern
according to the needs of the program.
❖ i is a modifier that makes the search case-insensitive.
The delimiter can be any character that is not a letter, number,
backslash or space. The most common delimiter is the forward slash (/),
but when your pattern contains forward slashes it is convenient to
choose other delimiters such as %, #, + or ~ (example: "#09#i").
Regular Expression Functions
PHP provides a variety of functions that allow you to use regular
expressions. The preg_match() preg_match_all() and preg_replace()
functions are some of the most commonly used ones:
Function Description
preg_match() Returns 1 if the pattern was found in the string and
0 if not
preg_match_all() Returns the number of times the pattern was found
in the string, which may also be 0
preg_replace() Returns a new string where matched patterns have
been replaced with another string
Using preg_match()
The preg_match() function will tell you whether a string contains
matches of a pattern.
<?php
$str = "09502500000";
$pattern = "/09/i";
echo preg_match($pattern, $str)."<br>" ; // Outputs 1
$str1 = "123456789";
echo preg_match($pattern, $str1); // Outputs 0
?>
Using preg_match_all()
The preg_match_all() function will tell you how many matches were found
for a pattern in a string.
<?php
$str = "A database is an organized collection of structured information,
or data, typically stored electronically in a computer system. A
database is usually controlled by a database management system (DBMS).";
$pattern = "/data/i";
echo preg_match_all($pattern, $str); // Outputs 4
?>
Regular Expression Modifiers
Modifiers can change how a search is performed (optional).
Modifier Description
i Performs a case-insensitive search
m Performs a multiline search (patterns that search
for the beginning or end of a string will match the
beginning or end of each line)
u Enables correct matching of UTF-8 encoded
patterns. Also used to match emojis.
Regular Expression Patterns
Brackets are used to find a range of characters:
Expression Description
[abc] Find one character from the options between the
brackets
[^abc] Find any character NOT between the brackets
[0-9] Find one character from the range 0 to 9
Metacharacters
Metacharacters are characters with a special meaning:
Metacharacter Description
| Find a match for any one of the patterns
separated by | as in: cat|dog|fish. It functions like
an OR.
. Find just one instance of any character.
^ Finds a match as the beginning of a string as in:
^Hello //starts with Hello
$ Finds a match at the end of the string as in:
World$ //ends with World
\d Find a digit
\s Find a whitespace character
\b Find a match at the beginning of a word like this:
\bWORD, or at the end of a word like this:
WORD\b
\uxxxx Find the Unicode character specified by the
hexadecimal number xxxx
Quantifiers
Quantifiers define quantities:
Quantifier Description
n+ Matches any string that contains at least one n
n* Matches any string that contains zero or more
occurrences of n
n? Matches any string that contains zero or one
occurrences of n
n{x} Matches any string that contains a sequence of X
n's.
Example:
a{3}//exactly 3 a’s
n{x,y} Matches any string that contains a sequence of X
to Y n's.
Example:
a{3,6} //between 3 to 6 a’s
n{x,} Matches any string that contains a sequence of at
least X n's
Example:
a{3,} //3 or more a’s
Note: If your expression needs to search for one of the special
characters you can use a backslash ( \ ) to escape them. For example,
to search for one or more question marks you can use the following
expression: $pattern = '/\?+/';
Grouping
You can use parentheses ( ) to apply quantifiers to entire patterns.
They also can be used to select parts of the pattern to be used as a
match.
<?php
$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str); // Outputs 1
?>
Practice:
Check if the user entered a philippine mobile number +63
Forms
Form Handling
The PHP superglobals $_GET and $_POST are used to collect form-data.
demo_forms.php
—---------------------------------------
<html>
<body>
// displays a simple HTML form with two input fields and a submit
button:
<form action="greetings.php" method="post">
Name: <input type="text" name="txtname"><br>
E-mail: <input type="text" name="txtemail"><br>
<input type="submit">
</form>
</body>
</html>
greetings.php
—---------------------------------------
<html>
<body>
Welcome <?php echo $_POST["txtname"]; ?><br>
Your email address is: <?php echo $_POST["txtemail"]; ?>
</body>
</html>
**The code above is simple but the most important thing is missing. All
form data should be validated to protect the script from malicious
injections (code).
Form Validation
Think about security when processing forms.
These pages will show how to process PHP forms with security in
mind. Proper validation of form data is important to protect
forms from hackers and spammers.
Name: <input type="text" name="name">
E-mail: <input type="text" name="email">
Website: <input type="text" name="website">
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
—---------------------------------------------------------
<form method="post" action="<?php echo
htmlspecialchars($_SERVER["PHP_SELF"]);?>">
What is the htmlspecialchars() function?
The htmlspecialchars() function converts special characters to
HTML entities. This means that it will replace HTML characters
like < and > with &lt; and &gt;. This prevents attackers from
exploiting the code by injecting HTML or Javascript code
(Cross-site Scripting attacks) in forms.
Validate Form Data With PHP
<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = cleandata($_POST["name"]);
$email = cleandata($_POST["email"]);
$website = cleandata($_POST["website"]);
$comment = cleandata($_POST["comment"]);
$gender = cleandata($_POST["gender"]);
}
function cleandata($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
// Strip unnecessary characters,Remove backslashes, pass variables
through PHPs htmlspecialchars() function
?>
Forms - Required Fields
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
$nameErr = "Name is required";
} else {
$name = cleandata($_POST["name"]);
}
}
Forms - Validate Email and URL
Regular expressions for validating email or URL
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format";
}
$website = test_input($_POST["website"]);
if
(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]
*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
$websiteErr = "Invalid URL";
}
Keep The Values in The Form
To show the values in the input fields after the user hits the submit
button, we add a little PHP script inside the value attribute of the
following input fields: name, email, and website. In the comment
textarea field, we put the script between the <textarea> and
</textarea> tags. The little script outputs the value of the $name,
$email, $website, and $comment variables.
Then, we also need to show which radio button was checked. For this, we
must manipulate the checked attribute (not the value attribute for
radio buttons):
Name: <input type="text" name="name" value="<?= $name;?>">
E-mail: <input type="text" name="email" value="<?= $email;?>">
Website: <input type="text" name="website" value="<?= $website;?>">
Comment: <textarea name="comment" rows="5" cols="40"><?=
$comment;?></textarea>
Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other
Demonstration of Code Form Validation and Required
Fields
Name the file as form_validation.php
**follow your instructor and include notes (as
comments in your code)
PHP Include and Require
❖ The include or require statements take all the text/code/markup
that exists in the specified file and copies it into the file that
uses the include/require statement.
❖ Including files is very useful when you want to include the same
PHP, HTML, or text on multiple pages of a website.
❖ It is possible to insert the content of one PHP file into another
PHP file (before the server executes it), with the include or
require statement.
The include and require statements are identical,
except upon failure:
❖ require will produce a fatal error (E_COMPILE_ERROR) and stop the
script.
❖ include will only produce a warning (E_WARNING) and the script will
continue.
So, if you want the execution to go on and show users the output, even
if the include file is missing, use the include statement.
Otherwise, in case of FrameWork, CMS, or a complex PHP application
coding, always use the require statement to include a key file to the
flow of execution. This will help avoid compromising your application's
security and integrity, just in-case one key file is accidentally
missing.
Including/requiring files saves a lot of work. This means that you can
create a standard header, footer, or menu file for all your web pages.
Then, when the header needs to be updated, you can only update the
header include file.
Syntax:
include 'filename';
or
require 'filename';
Cookies
Cookies may be appetizing but we do not actually mean actual
cookies here, we mean computer cookies.
What are computer cookies?
● These are small files, often including unique identifiers
that web servers send to browsers.
● These cookies then can be sent back to the server each time
your browser requests a new page.
● Its a way for a website to remember you, your preferences,
and your habits online.
Create Cookies With PHP
A cookie is created with the setcookie() function.
Syntax:
setcookie(name, value, expire, path, domain,
secure, httponly);
//Only the name parameter is required. All other
parameters are optional.
PHP Create/Retrieve a Cookie
<?php
$cookie_name = "user";
$cookie_value = "disamaa25";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //
86400 = 1 day
?>
<html>
<body>
<?php
if(!isset( $_COOKIE[$cookie_name])) {
echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
Other cookie functions: modify through setcookie(), delete
using setcookie() with expiration date,check if cookies are
enabled by counting the cookies if(count($_COOKIE) > 0).
Note: We dont need Cookies for our project.
Sessions
A session is a way to store information (in variables) to be
used across multiple pages.
Unlike a cookie, the information is not stored on the users
computer.
What is a PHP Session?
● Scenario with desktop apps: when you work with an
application, you open it, do some changes, and then you
close it. This is much like a Session. The computer knows
who you are. It knows when you start the application and
when you end.
○ But on the internet there is one problem: the web server
does not know who you are or what you do, because the
HTTP address doesnt maintain state.
● Session variables solve this problem by storing user
information to be used across multiple pages (e.g. username,
favorite color, etc). By default, session variables last
until the user closes the browser.
● Session variables hold information, and are available to all
pages in one application.
Note: If you need permanent storage, store the data in a
database because Sessions are only kept if the browser is not
yet closed.
Session Example:
Create two files:
mid_demo_session1.php
<?php
// Start the session
session_start();//session_start() function must be the very first thing
in your document. Before any HTML tags.
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Set session variables
$_SESSION["username"] = "disama25";
$_SESSION["queue"] = "25";
?>
</body>
</html>
mid_demo_session2.php
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["username"] . ".<br>";
echo "Favorite animal is " . $_SESSION["queue"] . ".";
?>
</body>
</html>