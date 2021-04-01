<?php


  if(isset($_POST['submit']))
  {
	 $Customername = $_POST['name'];
	 $Email = $_POST['email'];
	 $Message = $_POST['message'];
	 
	if(empty($Customername) || empty($Email) || empty($Message))
		{
			header('location:contactus.php?error');
		}
	else
	{
		$to="cyrustutors@gmail.com";
		$body ="";
		
		$body .= "Name: ".$Customername. "\n";
		$body .= "Email: ".$Email. "\n";
		$body .= "Message: ".$Message. "\n";


		
		if(mail($to,$Customername,$body))
		{
			header('location:contactus.php?done');
		}
	}
	
 
  }

?>



   