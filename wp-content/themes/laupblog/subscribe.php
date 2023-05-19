<?php 

$email = isset($_POST["email"]) ? $_POST["email"] : "";
echo "heh";
$email = sanitize_email($email);

if(!is_email($email)){
   die("Invalid email address");
}

$user_data = array(
   "user_login" => "",
   "user_email" => $email,
   "role" => "subscriber"
);