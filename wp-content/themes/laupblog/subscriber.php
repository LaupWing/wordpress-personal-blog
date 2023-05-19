<?php 

$email = isset($_POST["email"]) ? $_POST["email"] : "";

$email = sanitize_email($email);

if(!is_email($email)){
   die("Invalid email address");
}