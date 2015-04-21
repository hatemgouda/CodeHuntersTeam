<?php

if(isset($_POST['register']))

  {

    $insert=$db->AddUser($username,$password,$email);
    if($insert==true)
    {
       $_SESSION['success'] = 'User has been added successfully';
        header('location:index.php');
    }


}
require_once 'template/add_user.php';