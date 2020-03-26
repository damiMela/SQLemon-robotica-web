<?php
$to_email_address = "SQLemonrobotics@gmail.com";
// Check if the form is submitted
if ( isset( $_POST['submitbtn'] ) ) {
//echo '<h2>form data retrieved by using the $_REQUEST variable<h2/>';

$Name = $_REQUEST['name'];
$Email = $_REQUEST['email'];
$Subject = $_REQUEST['subject'];
$Body = $_REQUEST['message'];

$finalMessage = "mensaje de:"  . $Email . "\n\n" . $Body;
// display the results
echo 'Your name is ' . $Name .',' . $Email .','. $Subject .','. $Body .','. $finalMessage;
mail($to_email_address,$Subject,$finalMessage);
/*
// check if the post method is used to submit the form

if ( filter_has_var( INPUT_POST, 'submit' ) ) {

echo '<h2>form data retrieved by using $_POST variable<h2/>'

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

// display the results
echo 'Your name is ' . $lastname .' ' . $firstname;
}

// check if the get method is used to submit the form

if ( filter_has_var( INPUT_GET, 'submit' ) ) {

echo '<h2>form data retrieved by using $_GET variable<h2/>'

$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
}

// display the results
echo 'Your name is ' . $lastname .' ' . $firstname;
exit;*/
}
?>
