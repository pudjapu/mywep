<?php
require './connect.php';

session_start();



?>

<html>
<head>
<link rel="stylesheet" href="test.css">
<title>Show</title>
<style>
    body{
        background : url(BG1.jpg);
        background-size: cover;
    }
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
    
<div class = "login" style="font-size : 40px ; left:37%; width:500px ; margin-top:-8rem;">
    <?php
    $sql = "SELECT * FROM manage WHERE ID = '".$_SESSION['ID']."'";

    $result = mysqli_query($connect,$sql);
    
    if($result){
        while($record = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            echo "Product Name : ".$record['ProductName']."      ";
            echo "<br>";
    
            $sql_2 = "SELECT * FROM status WHERE Status = '".$record['Status']."'";
            $result_2 = mysqli_query($connect,$sql_2);
            $st = mysqli_fetch_array($result_2,MYSQLI_ASSOC);
    
            echo "Status : ".$st['Name']."      ";
            echo "<br>";
        }
    } else {
        echo "-----";
    }
    
    mysqli_close();
    ?>
</div>
<div class="login" >
<input type="submit" name="back" value="go back" onclick='location.replace("link.php")'>
</div>

</body>
</html>