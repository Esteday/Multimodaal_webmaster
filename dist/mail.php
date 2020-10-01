<?php

//Receive user input
$name = $_POST['Name'];
$email = $_POST['email'];
$message = $_POST['message'];

//Filter user input
function filter_email_header($form_field) {
return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
}

$email_address  = filter_email_header($email_address);


// Message
$emailMessage  = 'Naam: '.$name.' '. "\r\n";
$emailMessage .= 'Email: '.$email.' '. "\r\n";
$emailMessage .= 'Bericht: '.$message;



//Send email
$sent = mail('donders.s@lcb.nu', 'Medicijnretouren', $emailMessage);

//Thank user or notify them of a problem
/*if ($sent) {
echo "send";
}else {
echo "error";
}*/

header('Location: https://inleveren.lcb.nu/');
exit;

?>
