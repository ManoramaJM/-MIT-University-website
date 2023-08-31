<?php 
   $name=$_POST['name'];
   $visitor_email=$_POST['email'];
   $subject=$_POST['subject'];
   $message=$_POST['message'];
   $email_from='mitaoe.ac.in';
   $email_subject='New Submisssion';
   $email_body="User Name : $name.\n".
                "User Email:$visitor_email.\n".
                "Subject:$subject.\n".
                "User message: $message.\n";

   $to='mudagalmanorama19@gmail.com';
   $headers="From : $email_from \r\n"; 
   $headers .="Reply-To : $visitr_email \r\n"; 
   mail($to,$email_subject,$email_body,$headers);
  header("Location:Contact Page.html")
 ?>