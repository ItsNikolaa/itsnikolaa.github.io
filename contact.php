<?php

if (isset($_POST['fname']) && isset($_POST['country']) && isset($_POST['email']) && isset($_POST['message'])){
    if (!empty($_POST['fname']) && !empty($_POST['country']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $fname = $_POST['fname'];
        $country = $_POST['country'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'kindly Provide Valid Email';
          } else {
            $body = $fname."\n".$country."\n".$email."\n".$message;
            if(mail('nikolanedeljkovic.official@gmail.com','Website Response', $body , 'From: response@itsnikola.com')){
                echo 'Hvala sto ste nas kontaktirali.';
            }   else {
                echo 'There is a problem in sending mail.';
            }
        }
 }
?>
