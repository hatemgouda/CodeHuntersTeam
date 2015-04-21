<?php

 if (isset($_GET['user_id']))

  $delete=$db->Delete($user_id);
  if($delete== TRUE)
 {
   $_SESSION['success'] = 'User has been deleted successfully';
   header('location:index.php');

 }