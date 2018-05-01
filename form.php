<?php

  if (isset($_POST['submit'])) {

  	$email=$_POST['email'];
  	if (empty($email)) {
  		# code...
  		echo "valid email required";
  	}else{
  		$email_error= "welcome user";
  	}
  }
?>
