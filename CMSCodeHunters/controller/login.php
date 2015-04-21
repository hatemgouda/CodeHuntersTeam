<?php

   if(isset($_SESSION['login']))
{
  header('location:index.php');
  exit();

}

if(isset($_POST['login']))
{

  $user=$db->login();
  if($user==1)
  {
     $user_info=$db->fetch();

     $_SESSION['permission_level'] =$user_info['permission_level'];


     $_SESSION['login'] = $user_info['user_id'] .str_shuffle('qhkqkklwerwrewj3122').$db->salt($user_info['username'] .$user_info['email']);


  // echo 'welcome '.$user_info['username'];
   echo '<h1 style="color:#001; text-align:center">Hello There lovely  '.$user_info['username'].'</h1>';
   echo '<meta http-equiv="refresh" content="3; url=index.php">' ;
   exit();

  }
  else
  {
    echo 'invalid data';
  }

}

require_once'template/login.php';



