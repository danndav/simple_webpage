<?php

    #create variable for each text fields
    if (isset($_POST['submit'])) {
      # code...
      $email_account=$_POST['email'];
      $first_name=$_POST['fname'];
      $last_name=$_POST['lname'];
      $phone_number=$_POST['phone'];
      $gender=$_POST['gender'];
      $password=$_POST['password'];



    if (empty($email_account)) {
      # code...
      $email_error= "please input a valid email account";
    }
    if (empty($first_name)) {
      # code...
      $fname_error= "please input your first name";
    }
    if (empty($last_name)) {
      # code...
      $lname_error ="please input your last name";
    }

    if (empty($phone_number)) {
          # code...
      $phoneno_error= "please input a valid phone number";
    }
    if (empty($password)) {
        # code...
      $password_error= "this field require your password please";
    }


    @mysqli_connect("localhost","root",""); 
    @mysqli_select_db("reg_form") ;


    $sql= @mysqli_query("INSERT INTO 'netprog_form'('content_id','email','first_name','last_name','phone_no','gender','password') VALUES(NULL,'$email_account','$first_name','$last_name','$phone_number','$gender','$password')");
    $count= @mysqli_num_rows($sql);
    if ($count>0) {
      # code...
      echo "registration successful";
    }else {
      # code...
      echo "registration not successful";
    }

  }



?>
