<?php include '../classes/User.php';

    $user = new User;
    
    $user->edit_user($_GET,$_POST);
    $user->updatePhoto($_GET['id'],$_POST['photo']);
 
    