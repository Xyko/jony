<?php
// Contact subject
$subject ="Teste do email";
// Details
$message="Corpo da messagem";

// Mail of sender
$mail_from="teste@teste.com";
// From
$header="from: Francisco <test@test.com>";

// Enter your email address
$to ='francisco@corp.globo.com';

$send_contact=mail($to,$subject,$message,$header);

// Check, if message sent to your email
// display message "We've recived your information"
if($send_contact){
echo "We've recived your contact information";
}
else {
echo "ERROR";
}
?>