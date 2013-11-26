<?php
$to      = $_GET['r'] ?: 'sefier.tang@gmail.com';
$subject = 'I want to tell you something';
$message = "'The last point means that YOU CANNOT USE SHARED HOSTING. Almost all shared hosting providers allow the sending of mails which don't conform to any of the above. Shared hosting providers' relays are almost always on lots of blacklists.It only takes one vulnerable web app on your shared hosting for it to turn into a spam gateway - something which you can't afford.:wEDIT: Oh yes - if you're not setting the envelope-sender, your hosting provider may have it set to something stupid - ensure that you do set it to the same as From: - this makes sure that your messages aren't seen as spoofed'";
$headers = 'From: admin@test3g.com' . "\r\n" .
    'Reply-To: admin@test3g.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

var_dump(mail($to, $subject, $message, $headers));
