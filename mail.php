<?php

   if(isset($_POST['submit']))
   {
   
       $name=$_POST['name'];
       $email=$_POST['email'];
       $mssg=$_POST['message'];
       $sub=$_POST['subject'];
   
       
       $to='b170087@nitsikkim.ac.in';
   
       $subject='Contacting from my portfolio';
   
       $message="Name".$name."\n"."Email:".$email."\n".$sub."\n"."Message:".$mssg.

       $header="From:".$email;
      
       mail($to, $subject, $message, $header);
   }
?>
