<?php

require 'user.php';
	

	if(isset($_POST['submit']))
	{
		
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$usr = new user();

		echo $fname;

		$usr->setFname($fname);
		$usr->setLname($lname);
		$usr->setUsername($username);
		$usr->setEmail($email);
		$usr->setPassword($password);

		if($usr->AddUser())
		{
			echo ("user added");
			
 		// $_SESSION['permission']="granted";
   //  $_SESSION['username']= $username;
   //  $_SESSION['type']= "User";
    header("location:index.html");

		
		}
		else
		{
			echo "Registration Failed!!!";
		}	
	}

	if (isset($_POST['login']))
	{

		$username = $_POST['uname'];
		$password = $_POST['psw'];

		$usr = new user();

		$usr->setUsername($username);
		$usr->setPassword($password);
		$usr->Login();


	
	}


	
  if(isset($_POST['contactSubmit']))
  {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $usr = new user();

    $usr->setName($name);
    $usr->setEmail($email);
    $usr->setSubject($subject);
    $usr->setMessage($message);

    if($usr->CustomerMail())
    {
    	header("location:index.php?send=true");
      
    }
  }



?>