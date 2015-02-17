<?php session_start(); ?>
<html>
<body>
<?php 
$errors = '';
$myemail = 'rachita.gemm30@gmail.com';
//echo"$myemail";


if(empty($_POST['fname'])  ||
   empty($_POST['lname']) ||
   empty($_POST['email']) ||
   empty($_POST['Program']) ||
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
	echo"$errors";
}
else{	$first   	   = $_POST['fname'];
		$last          = $_POST['lname'];
		$email_address = $_POST['email'];
		$program       = $_POST['Program'];
		$queries	   = $_POST['message'] ;
		$_SESSION["firstname"] = $first;
		$message       = "
		<table>
		<tr>
		<th>Name</th>
		<th>Program</th>
		<th>Message</th>
		</tr>
		<tr>
		<td>
			$first $last
		</td>
		<td>
			$program
		</td>
		<td>
			$queries
		</td>
		</tr>
		</table>";
		
}
if( empty($errors))
{	
    $to = "$myemail";
    $email_subject = "Contact form submission: $first";
    $email_body = "$message";
    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email_address";
    mail($to,$email_subject,$email_body,$headers);
    //redirect to the 'thank you' page
    header('Location: thankyouMail.php');
}






?>
<body>
</html>

