<?php
       session_start();
       include('conn.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Final project</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
	
</head>
<body>
	 <style >
		*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins',sans-serif;

        }
         .container{
	width: 100%;
	height: 100vh;
	background-image: url(images/back.png);
	background-size:cover;
	background-position: center;
	display: flex;
	justify-content: center;
	align-items: center;
       }
       .login{
       	width: 90%;
       	max-width: 300px;
       	color: #fff;
       	text-align: center;
       	padding: 50px 35px;
       	border: 1px solid rgba(255,255,255,0.3);
       	background:rgb(255,255,255,0.2);
       	border-radius: 16px;
       	box-shadow: 0 4px 30px rgba(0,0,0,0.1);
       	backdrop-filter:blur(5px);

       }
       .login img{
       	width: 140px;
       	border-radius: 50%;
       }
       .login form {
       	font-size: 20px;
       	font-weight: 600;
       	margin-top: 20px;
       }
       .login .links img{
       	width: 50px;
       	border-radius: 50%;
       	margin: 10px 5px;
       	transition: background 0.5s; 
       }
       .login .links img:hover{
       	background:#ff01cf; 
       }
       #login-btn{
       	text-decoration: none;
       	display: inline-block;
       	font-size: 18px;
       	font-weight: 500;
       	background:#fff;
       	color: #ff01cf;
       	padding: 10px 30px;
       	border-radius: 30px;
       	margin: 30px 0px 10px;
       }
	</style>
	

	           <div class="container"> 
	           	                        <div class="login" data-tilt>
	           	                      	        <img src="images/profile.png">
	           	                      	        <form method="post">
		                                                <label>Username</label>
		                                                <input type="text" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="username">
		                                                <br><br>
		                                                <label>Password</label>
		                                                <input type="password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password">
		                                                <br>
 
		                                               <input type="submit" name="login" value="login" id="login-btn">
	           	                      	                	
	           	                      	        </form>
	           	                      	        <div class="links">
	           	                      	        	<a href="https://www.facebook.com/"><img src="images/facebook.png"></a>
	           	                      	        	<a href="https://www.twitter.com/"><img src="images/twitter.png"></a>
	           	                      	        	<a href="https://www.telegram.com/"><img src="images/telegram.png"></a>
	           	                      	        </div>
	           	                          </div>  
		
	           </div>
                  <span>
       <?php
              if (isset($_SESSION['message'])){
                     echo $_SESSION['message'];
              }
              unset($_SESSION['message']);
       ?>
</span>
<script src="vanilla-tilt.js"></script>
</body>
</html>