<html>
<body>
<?php $name = $_POST['name'];
$email = $_POST['email'];
$subject=$_POST['subject'];  
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "omfamilyfoundation@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank you for contacting us, you should hear from us soon. Have a Wonderful Day";
  ?>
</body>
</html>
