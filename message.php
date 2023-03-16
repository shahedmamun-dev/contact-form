<?php 
// Get all form values
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];

if (!empty($email) && !empty($message)) { //if email and message field is not empty
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $reciver = "mamun768086@gmail.com"; //email receiver email address
        $subject = "From: $name <$email>"; //subject of the email. It'll look like from name <email@domain.com>
        //merging contacting all user values inside body variable. \n is used for new line
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\nMessage: $message\n\nRegards, \n$name";
        $sender = "From: $email"; //sender email
        if(mail($reciver, $subject, $body, $sender)){ //mail() is a inbuilt php functiojn to send mail            
            echo "Your message has been sent!";
        } else {
            echo "Sorry, failed to send your message!";
        }
    } else {
        echo "Enter a valid email address!";
    }
} else {
    echo "Email and Message field is required!";
}
?>