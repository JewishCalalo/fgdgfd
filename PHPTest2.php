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
    <h5>Enter either a Meter or Centimeter and then click on convert: </h5>
    <form method = "POST" action = "$_SERVER[PHP_SELF]">
    Meter <input type = "text" name = "Meter" size = "7">
    Centimeter <input type = "text" name = "Centimeter" size = "7">
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
    if($_POST['Meter'] == '' && $_POST['Centimeter'] == ''){
        $errors [] = 'Please enter a value for one of the textboxes.';
    } elseif($_POST['Meter'] != '' && $_POST['Centimeter'] != ''){
        $errors [] = 'Please enter only one value for one of the textboxes.';
    }
    return $errors;
}

function process_form(){
    $input = array();
    $convertedValue = '';
    $output = '';
    if(isset($_POST['Meter']) && $_POST['Meter'] != ''){
        $input['Meter'] = sanitizeString($_POST['Meter']);
        $convertedValue = ($input['Meter'] / 100);
        $f = $input['Meter'];
        $output = "<b> $f Meter equals $convertedValue Centimeter. </b>";
    }elseif(isset($_POST['Centimeter']) && $_POST['Centimeter'] != ''){
        $input['Centimeter'] = sanitizeString($_POST['Centimeter']);
        $convertedValue = ($input['Centimeter'] * 100);
        $c = $input['Centimeter'];
        $output = "<b> $c Centimeter equals $convertedValue Meter. </b>";
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