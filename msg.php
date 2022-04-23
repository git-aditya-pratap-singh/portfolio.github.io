<?php 
  if(isset($_REQUEST['data_submit'])){

  	$name=$_POST['name'];

  	$email=$_POST['email'];

  	$message=$_POST['message'];

  	echo $name;

  	echo $email;

  	echo $message;

  }
?>