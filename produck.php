
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
    session_start();
    

	if(trim($_POST["ProductName"]) == "")
	{
        echo "Please input ProductName!";
        echo "<br>";
        echo "<br><a href='registerproduck.php'>Back to registerproduck</a>";
		exit();	
	}
	
	if(trim($_POST["ProductID"]) == "")
	{
        echo "Please input Password!";
        echo "<br>";
        echo "<br><a href='registerproduck.php'>Back to registerproduck</a>";
		exit();	
	}	
    
    
    $sql="SELECT * FROM account WHERE ID='".$_SESSION['ID']."'";
    $obj = mysqli_query($connect,$sql);
    $OR = mysqli_fetch_array($obj,MYSQLI_ASSOC);
    
    $uid = $OR['ID'];
    $FN = $OR['FName'];
    $LN = $OR['LName'];

    $IDuse = $_POST['ProductID'];
    $SQL = "SELECT * FROM manage WHERE ProductID = '$IDuse'";
    $objQuery = mysqli_query($connect,$SQL);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
    if($objResult){
        echo "ProductID already exists!";
        echo "<br>";
        echo "<br><a href='registerproduck.php'>Back to CLAIM PRODUCT</a>";
		exit();
    } else {
        
        $FN = $OR['FName'];

		$SQL = "INSERT INTO `manage` (`ID`, `FName`, `LName`, `Problem`, `ProductID`, `Status`) VALUES ('".$uid."', '".$FN."', '".$LN."', '".$_POST["ProductName"]."', '".$_POST["ProductID"]."', 'W')";
		$objQuery = mysqli_query($connect,$SQL);
		
		echo "Register Completed!<br>";		
	
		

    
    }

    mysqli_close();
?>
    </div>
    <div  class="login" style="margin-left : -6rem" >
        <input type="button" value="BACK TO MENU " onclick='location.replace("link.php")'>
        <input type="button" value="BACK TO CLAIM " onclick='location.replace("registerproduck.php")'>  
    </div>
</body>
</html>

