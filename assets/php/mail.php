<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

if (isset($_POST['submit'])){
    // mail template
    echo("Mail template (what the email might look like in the end): <br/><br/>");
    $to = "info@barbarreltable.com"; echo($to."<br/>");

    $subject = "DrumGrill contact bericht"; echo($subject."<br/>");
    
    $message = "
        Bericht van het DrumGrill website contact formulier: <br/><br/>
        <b>Naam</b>: ".$_POST['name']."<br/>
        <b>Email</b>: <a href='mailto:".$_POST['email']."'>".$_POST['email']."</a> <br/>
        <b>Bericht</b>: <br/>
        ".$_POST['message']; 
        echo($message."<br/>");
    
    // $headers = "From: info@markvonk.com"; echo($headers);
    // $headers .= "Reply-to: markjhvonk@gmail.com\r\n";
    // $headers .= "Content-type: text/html\r\n";
    $headers =  'From: info@barbarreltable.com' . "\r\n";
    $headers .= 'Reply-To: '. $_POST['email'] . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
                
                
    echo($headers);

    // die();

    // Mail script
    mail($to, $subject, $message, $headers); //fix 
    
    header('Location: ../../index.html');
    die();

}