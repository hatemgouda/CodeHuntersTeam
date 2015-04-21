<?php


if(isset($_POST['edit']))
  {

    $update=$db->editdata();

    if($update == TRUE)
    {
     $_SESSION['success'] = 'User data has been updated successfully';
        header('location:index.php');
    }
  }

    $user=$db->view();
    require_once 'template/edit_user.php';