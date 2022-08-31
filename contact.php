<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailheader = "From: ".$name."<".$email.">\r\n";

    $recipient = "muhammadyusufakramov95@gmail.com";

    mail($recipient, $name, $email, $subject, $message, $mailheader)
    or die("Error!");

    echo'
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Contact Form</title>
            <link rel="stylesheet" href="contact.css">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        </head>
        <body>
            <div class="container">
                <h1>Thanks you for contacting me. I will get back to you as soon as possible !</h1>
                <p class="back">Go back to the page <a href="contact.html">homepage</a>.</p>
            </div>
        
        </body>
        </html>
    ';

?>