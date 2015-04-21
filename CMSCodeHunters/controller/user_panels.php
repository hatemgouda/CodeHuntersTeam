<?php



if(isset($_SESSION['success']))
   {
      $success=$_SESSION['success'];
       unset($_SESSION['success']) ;
   }
   else
   {
       $success=NULL;
   }

  $permissionlevel = $_SESSION['permission_level'];

 if ($permissionlevel == 0)  {
   $view1=$db->ViewAll();
   $users = $view1[0];
   $total_users = $view1[1];
   echo $users['username'];

  require_once 'template/adminpanel.php';

  } elseif ($permissionlevel == 1){
        //show moderator panel

     $db->query('select * from users where permission_level >= 2') ;
     $db->execute();
     $users=$db->fetchall();
     $total_users=$db->rowCount();
     require_once 'template/moderatorpanel.php';

  } elseif ($permissionlevel == 2){
        //show user panel

     $db->query('select * from users where permission_level >= 2') ;
     $db->execute();
     $users=$db->fetchall();
     $total_users=$db->rowCount();
     require_once 'template/userpanel.php';

  }