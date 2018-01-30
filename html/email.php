<?php
if($_POST){
    $to = 'snorrsken@gmail.com';

    $subject = 'This is an email from:' . strip_tags($_POST['email']);

    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message = '<html><body>';
    $message .= '<h2>New message from sarahnorrsken.fr !</h2>';

    $message .= '<h3>Hello handsome, what’s your name ?</h3>';
    $message .= '<p>'. strip_tags($_POST['name']) .'</p>';

    $message .= '<h3>Nice to meet you '. strip_tags($_POST['name']) .', what do you want to chat about ?</h3>';

    foreach($_POST['subject'] as $key => $value) {
        $message .= '<p>'. strip_tags($value) .'</p>';
    }

    $message .= '<h3>Tell me about it !</h3>';
    $message .= '<p>'. strip_tags($_POST['object']) .'</p>';

    $message .= '<h3>Let’s stay in touch, can I have your email ?</h3>';
    $message .= '<p>'. strip_tags($_POST['email']) .'</p>';

    $message .= '</body></html>';

//send email
    mail($to, $subject, $message, $headers);
}
?>