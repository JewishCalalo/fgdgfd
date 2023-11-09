<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($form_errors = validate_form()){
        show_form($form_errors);
    }else{
        show_form();
        echo process_form();
    }
}else{
    show_form();
}

function show_form($errors = array()){
    echo <<<_HTML_
    <pre>
    <h5>Enter either a fahrenheit or celsius and then click on convert: </h5>
    <form method = "POST" action = "$_SERVER[PHP_SELF]">
    fahrenheit <input type = "text" name = "fahrenheit" size = "7">
    Celsius <input type = "text" name = "Celsius" size = "7">
    <input type = "submit" value = "Convert">
    </form> 
    </pre>
    _HTML_;
    if ($errors){
        print "Please correct these errors: <ul><li>";
        print implode ("</li><li>", $errors);
        print "</li></ul>";
    }
}

function validate_form(){
    $errors = array();
    if($_POST['fahrenheit'] == '' && $_POST['Celsius'] == ''){
        $errors [] = 'Please enter a value for one of the textboxes.';
    } elseif($_POST['fahrenheit'] != '' && $_POST["Celsius"] != ''){
        $errors [] = 'Please enter only one value for one of the textboxes.';
    }
    return $errors;
}

function process_form(){
    $input = array();
    $convertedValue = '';
    $output = '';
    if(isset($_POST['fahrenheit'])  && $_POST["fahrenheit"] != ''){
        $input['fahrenheit'] = sanitizeString($_POST['fahrenheit']);
        $convertedValue = intval((5/9) * ($input['fahrenheit'] - 32));
        $f = $input['fahrenheit'];
        $output = "<b> $f Fahrenheit equals $convertedValue Celsius. </b>";
    }elseif(isset($_POST['Celsius']) && $_POST['Celsius'] != ''){
        $input['Celsius'] = sanitizeString($_POST['Celsius']);
        $convertedValue = intval((9/5) * $input['Celsius'] + 32);
        $c = $input['Celsius'];
        $output = "<b> $c Celsius equals $convertedValue Fahrenheit. </b>";
    }
    return $output;
}

function sanitizeString($var){
    $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = trim($var);
    return $var;
}