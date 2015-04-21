<!DOCTYPE html>


<html>

<head>
  <title>login</title>
  
<style>
    body{
   
    
     background-color:#002f2f;
}

.container {
    width:80%;
    margin: auto ;
    
    
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
    margin-top: 20%
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
           <h1>Welcome To CODE HUNTERS Panel</h1>
            <div class="conts">
                <form id="login" action="" method="post">
                     <input type="text" name="username" placeholder="Tell me your lovely name" /> <br>
                     <input type="password" name="password" placeholder="Don't let anyone see you "/> <br>
                     <input type="submit" name="login" value="Get Me in !" />
                </form>
            </div>

        </div>
    </body>
</html>