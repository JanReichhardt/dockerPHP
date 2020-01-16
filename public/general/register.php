<?php
$username = $_POST['username'];
$pass = $_POST['password'];

password_hash(hash('sha512', $pass, true), PASSWORD_DEFAULT);
//$test2 = password_verify(hash('sha512', $pass, true), $test);