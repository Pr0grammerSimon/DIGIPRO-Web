<?php


if (isset($_POST["submit"])){

    $to = "szymon@krzywda.eu";

    $headers = 'Content-Type: text/plain; charset=utf-8' . "\r\n";
    $headers .= 'Content-Transfer-Encoding: base64' . "\r\n";

    $headers.= 'From: =?UTF-8?B?'. base64_encode("Kontakt Strona DIGIPRO"). '?=';


    $subject = '=?UTF-8?B?' . base64_encode($_POST["temat"]) . '?=';

    $message = base64_encode("Od: ".$_POST["mail-in"]."\nWiadomość: \n".$_POST["wiadomosc"]);



    mail($to,$subject,$message,$headers);
}

header("Location: glowna.html");
?>

