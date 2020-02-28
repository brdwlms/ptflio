<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $comments = $_POST['comments'];

    $mailTo = "website@williamsbrad.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an Email from ".$name.".\n\n".$comments;
    
    mail($mailTo, $comments, $txt, $headers);
    header("Location: www.williamsbrad.com");
}