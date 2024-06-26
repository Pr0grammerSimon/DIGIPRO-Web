<?php


if (isset($_POST["submit"])){

    $to = "somone@gmail.com";

    $headers = 'Content-Type: text/plain; charset=utf-8' . "\r\n";
    $headers .= 'Content-Transfer-Encoding: base64' . "\r\n";

    $headers.= 'From: =?UTF-8?B?'. base64_encode($_POST["mail-in"]). '?=';

    $subject = '=?UTF-8?B?' . base64_encode($_POST["temat"]) . '?=';

    $message = base64_encode($_POST["wiadomosc"]);



    mail($to,$subject,$message,$headers);

}

header("url=glowna.html");
?>