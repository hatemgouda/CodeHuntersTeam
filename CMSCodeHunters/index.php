<?php
 
session_start();
// Include  classes and config
require_once 'classes/databaseclass.php';
require_once 'classes/usersclass.php';
require_once 'includes/config.php';



   //make user class instance
 $db=new users();

  //login area
 if(!isset($_SESSION['login']))

{


  require_once'controller/login.php';

 exit();
}

$action=(isset($_GET['action'])?$_GET['action']:NULL) ;

if($action=='add')
 {
//insert
 require_once 'controller/add_user.php';


}elseif($action=='delete')
{
//delete user
 require_once 'controller/delete.php';


}elseif($action=='edit'){

//edit user

 require_once 'controller/edit_user.php';


}elseif($action=='view'){
    //view user profile

    require_once 'controller/profile.php';


}elseif($action=='logout'){
   //logout

   require_once 'controller/logout.php';



}elseif($action=='promotionup'){

     //user  promotion up
     require_once 'controller/promotionup.php';

}elseif($action=='promotiondown')   {

     //user  promotion down

     require_once 'controller/promotiondown.php';

}else
{
  //user panels

 require_once 'controller/user_panels.php';






}