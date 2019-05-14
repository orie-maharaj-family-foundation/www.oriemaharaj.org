<? php 
  if(insset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$subject=$_POST['subject'];  
$comment = $_POST['comment'];
$formcontent="From: $name \n Comment: $comment";
$mailTo = "omfamilyfoundation@gmail.com";
$subject = "Contact Form";
$headers = "From: $mailFrom";
$txt="You have received an e-mail from ".$name.".\n\n".$message;
mail($mailTo, $subject, $formcontent, $headers,$txt;
header("Location: index.php?mailsend");
}     
     

