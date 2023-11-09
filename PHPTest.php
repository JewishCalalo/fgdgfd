<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($form_errors = validate_form()){
        show_form($form_errors);
    }else{
        process_form();
    }
}else{
    show_form();
}

function show_form($errors = array()){
    if ($errors){
        print "Please correct these errors: <ul><li>";
        print implode ("</li><li>", $errors);
        print "</li></ul>";
    }
    print <<<_HTML_
    <form method = "POST" action = "$_SERVER[PHP_SELF]">
    Your name: <input type = "text" name = "my_name">
    <br />
    Age: <input type = "text" name = "age">
    <br />
    Email Address: <input type = "text" name = "email">
    <br />
    <input type = "submit" value = "Say Hello">
    </form> 
    _HTML_;
}
function process_form(){
    print"Hello, " . $_POST['my_name'];
    print"<br />";
    print"I see you are: " . $_POST['age']. " years of age.";
    print"<br />";
    print"with an email: " . $_POST[' email'];
    print"<br />";
}

function validate_form(){
    $errors = array();
    if(strlen(trim($_POST['my_name']))<3){
        $errors[] = 'Your name must be at least 3 characters long.';
    }
    if (strlen($_POST['email']) == 0 ){
        $errors [] = 'You must enter an email address';
    }

    $ok = filter_input(INPUT_POST,'age', FILTER_VALIDATE_INT);
    if(is_null($ok) || ($ok == false)){
        $errors [] = 'Please enter a valid age';
    }
    return $errors;
}
?>