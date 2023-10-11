<?php

include "../classes/User.php";
$user = new User;

$user->signUp($_POST);

