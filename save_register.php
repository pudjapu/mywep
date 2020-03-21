<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
    <style>
    body{
        background : url(BG1.jpg);
        background-size: cover;
    }
    </style>
    
</head>
<body>
    <div class = "login" style="margin-top:-7rem;font-size:40px ;width:500px ;left:37%;">
    <?php
    require('connect.php');
	
	if(trim($_POST["txtUsername"]) == "")
	{
        echo "Please input Username!";
        echo "<br>";
        echo "<br><a href='register.php'>Back to Register</a>";
		exit();	
	}
	
	if(trim($_POST["txtPassword"]) == "")
	{
        echo "Please input Password!";
        echo "<br>";
        echo "<br><a href='register.php'>Back to Register</a>";
		exit();	
	}	
		
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
        echo "Password not Match!";
        echo "<br>";
        echo "<br><a href='register.php'>Back to Register</a>";
		exit();
	}
	
	if(trim($_POST["txtName"]) == "")
	{
        echo "Please input Name!";
        echo "<br>";
        echo "<br><a href='register.php'>Back to Register</a>";
		exit();	
    }
    
    if(trim($_POST["txtFamily"]) == "")
	{
        echo "Please input Family!";
        echo "<br>";
        echo "<br ><a href='register.php'>Back to Register</a>";
		exit();	
	}
    $IDuse = $_POST['txtUsername'];
    $SQL = "SELECT * FROM account WHERE ID = '$IDuse'";
    $objQuery = mysqli_query($connect,$SQL);
    $objResult = mysqli_fetch_array($objQuery);
    if($objResult){
        echo "Username already exists!";
        echo "<br>";
        echo "<br><a href='register.php'>Back to Register</a>";
		exit();
    } else {
		$SQL = "INSERT INTO account (`ID`, `Password`, `FName`, `LName`) VALUES ('".$_POST["txtUsername"]."', 
		'".$_POST["txtPassword"]."','".$_POST["txtName"]."','".$_POST["txtFamily"]."')";
		$objQuery = mysqli_query($connect,$SQL);
		
		echo "Register Completed!<br>";		
	
		echo "<br> Go to <a href='index.php'>Login page</a>";

    mysqli_close();
    }
?>
    
</body>
</html>


