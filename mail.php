<?php

   if(isset($_POST['submit']))
   {
   
       $name=$_POST['name'];
       $email=$_POST['email'];
       $mssg=$_POST['message'];
       $subject=$_POST['subject'];
   
       
       $to='b170087@nitsikkim.ac.in';
   
       $subject=$subject;
   
       $message="Name".$name."\n"."Email:".$email."\n"."Message:".$mssg.

       $header="From:".$email;
      
       mail($to, $subject, $email, $message, $header);
   }
?>
