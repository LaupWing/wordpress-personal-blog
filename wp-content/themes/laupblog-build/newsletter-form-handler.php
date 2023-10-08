<?php 

$email = isset($_POST["email"]) ? $_POST["email"] : "";
$email = sanitize_email($email);

if(isset($_POST["email"])){
   if(!is_email($email)){
      die("Invalid email address");
   }
   
   $user_data = array(
      "user_login" => "Test",
      "user_email" => $email,
      "user_pass" => "",
      "role" => "subscriber"
   );

   $user_id = wp_insert_user($user_data);
   if (!is_wp_error($user_id)){

   } else {
      $error_message = $user_id->get_error_message();
      echo $error_message;
   }
   // print_r($user_data);
}