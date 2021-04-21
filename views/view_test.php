<?php
$password='secret';
$hashed_password= password_hash($password, PASSWORD_DEFAULT);
echo $hashed_password;


// SELECT * FROM users WHERE user_name = 'a'