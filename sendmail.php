<?php
$to_email_address = "sqlemonrobotics@gmail.com";

if (isset($_POST['submitbtn'])) {
    $Name = $_REQUEST['name'];
    $Email = $_REQUEST['email'];
    $Subject = $_REQUEST['subject'];
    $Body = $_REQUEST['message'];

    $finalMessage = "Mensaje de: " . $Email . "\n\n" . $Body;
    mail($to_email_address, $Subject, $finalMessage);

    header('Location: index.html#success');
    exit;

}
