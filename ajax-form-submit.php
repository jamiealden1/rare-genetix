<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$fullname = $_POST['name'];
$email = $_POST['email'];



$email_from = 'info@raregenetix.com';//<== update the email address
$email_subject = "Request for information";
$email_body = "You have received a request for information from $fullname.\n".
"Their email address is $email.\n".
    
$to = "jamiealden1@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);



// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 