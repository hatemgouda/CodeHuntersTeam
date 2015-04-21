<!DOCTYPE html>

<html>

<head>
  <title>Edit User!</title>
  <style>
    body{
   
    
     background-color:#002f2f;
        
}

.container {
    width:80%;
    margin: auto ;
    padding-top:20px
    
    
}
h1{font-style:italic;
    color: #e6e2af;
    font-size:40px;
    font-family:verdana;
    text-align: center;
    padding-top:5%
}
.conts{
     margin: auto  ;
    margin-top: 80px;
    background-color:#a7a37e;
    width:40%;
    height: 50%;
    padding:20px;
    box-shadow: 10px 10px 10px #000;
        
}

form {
    
    text-align: center;
    margin-top:30px
}
form input{padding:15px;
			border:none;
			margin-bottom: 15px;
			font-size:18px;
			color:#808080;
    box-shadow: 5px 5px 5px #000;
			}
form input[type='submit']{
    font-size:20px;
    border-radius: 2px;
    font-style:italic;
    font-family:verdana;
    background-color:#002f2f     ;
    color:#e6e2af   ;
    box-shadow: 5px 5px 5px #000;
    width:55%
}


    </style>
</head>

<body>
<div class="container">
    <div class="conts">
 <form action="" method="post">
     <input type="text" name="username" placeholder="username" value="<?php echo $user['username']; ?>" />  <br>
     <input type="password" name="password" placeholder="password" value="<?php echo $user['password']; ?>" /> <br>
     <input type="email" name="email" placeholder="email" value="<?php echo $user['email']; ?>" /> <br>
     <input type="submit" name="edit" value="edit user" />

   </form>
</div>
</div>
</body>
</html>