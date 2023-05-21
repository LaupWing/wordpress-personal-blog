<?php 

$email = isset($_POST["email"]) ? $_POST["email"] : "";
$email = sanitize_email($email);

if(!is_email($email)){
   die("Invalid email address");
}

$user_data = array(
   "user_login" => "",
   "user_email" => $email,
   "role" => "subscriber"
);

return "test";