<!DOCTYPE html>

<html>

<head>
  <title><?php echo $user['username']; ?>'s Profile !</title>
 <style>
      body{
          background-color:#002f2f
      }
.container {
    width:90%;
    margin: auto ;  
    
}
     .conts{border: 1px solid white;
             width:400px;
         height:150px;
         margin:auto;
        box-shadow: 10px 10px 10px #000;
     }
h1{font-style:italic;
    color: #e6e2af;
    font-size:40px;
    font-family:verdana;
    text-align: center;
    padding-top:5%
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
     div {text-align:center;
	 color:#e6e2af;
	 
	 }
  
  *{
      padding: 0;
      border-spacing: 0;
      font-size:20px;
      font-weight:bold;
      font-family:verdana

 

  </style>
</head>

<body>
<div class="container">

<h1> View <?php echo $user['username']; ?>'s Profile !</h1>
<div class="conts">
<div>
ID: <?php echo $user['user_id']; ?>
</div>

<div>
Name: <?php echo $user['username']; ?>
</div>

<div>
E-Mail: <?php echo $user['email']; ?>
</div>

<div>
<br>
<a href="?action=edit&user_id=<?php echo $user['user_id']; ?>">Edit</a>
<a href="?action=delete&user_id=<?php echo $user['user_id']; ?>">Delete</a> 
</div>
</div>
</div>
</body>
</html>