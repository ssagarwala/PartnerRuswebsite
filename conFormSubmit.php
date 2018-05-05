<?php session_start(); 
$name = check_input($_POST['name']);
$email=check_input($_POST['email']);
$textmessage=check_input($_POST['textmessage']);


$myemail="services@webna.us";
$subject="New Contact from website";

/* Let's prepare the message for the e-mail */

$message .= "Name :     ".$name;
$message .="\n";
$message .="Email : " .$email;
$message .="\n";
$message .=$textmessage;


/* Send the message using mail() function */
mail($myemail,$subject,$message);

/* Redirect visitor to the thank you page */
header('Location:partner_thanks.html');
exit();
function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
