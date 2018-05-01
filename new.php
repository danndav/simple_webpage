<?php
include('form.php')
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
      echo "please input a valid email account";
    }
    if (empty($first_name)) {
      # code...
      echo "please input your first name";
    }
    if (empty($last_name)) {
      # code...
      echo "please input your last name";
    }
    if (empty($password)) {
        # code...
      echo "this field require your password please";
    }
    if (empty($phone_number)) {
          # code...
      echo "please input a valid phone number";
    }
    $sql= @mysql_query("INSERT INTO 'netprog_form' VALUES('$email_account','$first_name','$last_name','$phone_number','$gender','$password')");
    $count= @mysql_num_rows("$sql");
    if (count>0) {
      # code...
      echo "registration successful";
    }else {
      # code...
      echo "registration not successful";
    }

  }
  ?>
