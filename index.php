
<html>
    <head>
    <title>login</title>
    <link rel="stylesheet" href="allpaint.css">
    <link rel="stylesheet" href="test.css">
    <style>
    body{
        background : url(BG1.jpg);
        background-size: cover;
    }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
    <body>
    <form name="form1" method="post" action="login.php">
      
        
		<div class="grad"></div>
		<div class="header">
			<div style="font-size :40px; font-weight: bold;">Note<span>Book </span></div>
		</div>
		<br>
		<div class="login">
				<input type="text" placeholder="username" name="txtUsername">&nbsp;<br>
				<input type="password" placeholder="password" name="txtPassword"><br>
        <input type="submit" value="Login" >
        <input type="button" value="Register" onclick='location.replace("register.php")'>
		</div>
      
      
        
      
    </form>
    
    </body>
    </html>