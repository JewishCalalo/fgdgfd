<?php
function show_form($errors = array()){
    if($errors){
        print "PLease correct these errors: <ul><li>";
        print implode('<li></li>', $errors);
        print '</li></ul>';
    }
    print <<<_HTML_
    <h3>This is a form which accepts a 
    string and greets you!</h3>
    <form method = "POST" action="Part3.php">
    Your name: <input type ="text" name ="my_name">
    <br />
    <br />
    Email Address: <input type ="text" name="email">
    <br />
    <br />
    Age: <input type ="text" name = "age">
    <br />
    <br />
    Job Title: <input type="text" name = "jobtitle">
    <br />
    <br />
    <input type="submit" value="Say Hello">
    </form>
    _HTML_;
}
function process_form(){
    print "Hello, <strong>". $_POST['my_name'] . "</strong>";
    print "<br />Nice to meet you!" ;
    print "<br />I see that you are <strong>" .$_POST['age']. "</strong> years of age.";
    print "<br />Also you are a <strong>" .$_POST['jobtitle']. "</strong>, good job!";
    print "<br />Greetings from the PHP Function!";
}   
function validate_form(){
    //Start by creating an empty array of error messages
    $errors = array();
    $name = $_POST['my_name'];
    $email = $_POST['email'];
    //validate if the name is at least 3 characters long
    if(strlen(trim(($name))) <= 2){
        $errors[ ] = "Your name must be atleast 3 letters long!";
    }     
    if (strlen($email) == 0){
        $errors[ ] = "You must enter an email address.";
    }
    $ok = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    if(is_null($ok) || ($ok === false)){
        $errors[ ] ='Please enter a valid age!';
    }

    return $errors;
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //if validate_form returns errors, pass them to show_form()
    if($form_errors = validate_form()){
        show_form($form_errors);
    }else{
        process_form();
    }
}else{
    show_form();
}
?>