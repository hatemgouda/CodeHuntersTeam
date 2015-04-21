<!DOCTYPE html>

<html>

<head>
  <title>Users</title>

  <style>
      body{
          background-color:#002f2f
      }
.container {
    width:90%;
    margin: auto ;
    
    
}
h1{font-style:italic;
    color: #e6e2af;
    font-size:40px;
    font-family:verdana;
    text-align: center;
    padding-top:5%;
    text-shadow: 5px 5px 5px #000;
}

  a{
      text-decoration:none;
      font-style:italic;
      font-family:verdana;
      margin-right:20px;
      background-color: #e6e2af;
      color:#002f2f;
      padding:8px;
      border-radius:5px;
        box-shadow: 5px 5px 5px #000;
      
  }
    a:hover{ background-color:#f5f3e0
    }

   h1{
	  text-align:center;
  }
  
  *{
      padding: 0;
      border-spacing: 0;

  }

  table{
      padding-top:20px;
     width:90%;
      font-family:verdana;
      margin:auto;
      font-weight:bolder;
      font-size:16px
  }
  td,th{
      text-align:center;
      border:2px solid #e6e2af;
      padding: 15px
  }
      th{text-shadow: 5px 5px 5px #000;font-family:verdana;font-size:30px;font-weight:bolder;color:#e6e2af;background-color:#a7a37e;padding-top:20px;
      padding-bottom:20px}
      td{font-size:20px}

  </style>
</head>

<body>

<h1>Admin Panel</h1>
 <?php
 if($success){  ?>
  <div  class="container"style="color:green"><?php echo $success ?></div>

<?php  } ?>


 <a href="?action=add">Add new user</a>
 <a href="?action=logout" style="float:right;">Logout</a>
<table>
<tr>
<th>#</th>
<th>UserName</th>
<th>E-mail</th>
<th>Control</th>
</tr>
<?php  if($total_users==0){ ?>
  <tr>
    <td colspan="4"> there is no user until now</td>
  </tr>

<?php }else{
  foreach($users as $user){  ?>
   <tr>
   <td style="color:#e6e2af;text-shadow: 5px 5px 5px #000;"><?php echo $user['user_id']; ?></td>
   <td>
    <a href="?action=view&user_id= <?php echo $user['user_id']; ?>">  <?php echo $user['username']; ?>  </a>
   </td>
   <td style="color:#e6e2af;text-shadow: 5px 5px 5px #000;"><?php echo $user['email']; ?></td>


   <?php if($user['permission_level']==0){  ?>
   <td>

   <a href="?action=edit&user_id=<?php echo $user['user_id'];  ?>">Edit Me</a>
   <a href="?action=delete&user_id=<?php echo $user['user_id'];  ?>">Delete</a>

     </td>
    <?php }elseif($user['permission_level']==1){ ?>
    <td>
   <a href="?action=promotiondown&user_id=<?php echo $user['user_id'];  ?>">Promotion Down</a><br><br>
   <a href="?action=edit&user_id=<?php echo $user['user_id'];  ?>">Edit Me</a>
   <a href="?action=delete&user_id=<?php echo $user['user_id'];  ?>">Delete</a>
     </td>
     <?php }elseif($user['permission_level']==2){ ?>
     <td>
    <a href="?action=promotionup&user_id=<?php echo $user['user_id'];  ?>">Promotion Up</a><br><br>
   <a href="?action=edit&user_id=<?php echo $user['user_id'];  ?>">Edit Me</a>
   <a href="?action=delete&user_id=<?php echo $user['user_id'];  ?>">Delete</a>

     <?php } ?>

   </td>
   </tr>

<?php } ?> <!-- end of foreach loop  -->

<?php } ?> <!-- end of else  -->

</table>

</body>
</html>