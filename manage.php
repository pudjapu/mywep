<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="test.css">
    <title>Table with database</title>
    <style>
    body{
        background : url(BG1.jpg);
        background-size: cover;
    }
        table {
            border-collapse: collapse;
            width: 80%;
            margin-top:2rem;
            margin-left:auto;margin-right:auto;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }

        th {
            background-color: #588c7e;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
</head>

<body>
        
    <table>
        <div style="color : red;text-align:center;font-size:40px;font-family: monospace;font-weight:bold;margin-top:1rem;">รายการเคลมสินค้า</div>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Product Name</th>
            <th>Product ID</th>
            <th>Status</th>
        </tr>

        <?php
                require('connect.php');
                $num_rows = 1;
                $sql = "SELECT ID, FName, LName, ProductName, ProductID, Status FROM manage";
                $result = mysqli_query($connect,$sql);
                if (mysqli_num_rows($result) > 0) {
                // output data of each row
                    while($row = $result->fetch_assoc()) {
                    $product_id["$num_rows"] = $row["ProductID"];    
                    echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["FName"] . "</td><td>"
                    . $row["LName"]. "</td><td>" . $row["ProductName"]. "</td><td>" . $row["ProductID"]. "</td>";
        ?>            
                <td>
                <form action ="" method="POST">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:9rem;">     
        <?php
                if($row["Status"]=="P"){
                    echo "พร้อมรับสินค้า";
                }
                else if($row["Status"]=="S"){
                    echo "รับสินค้าแล้ว";
                }
                else if($row["Status"]=="T"){
                    echo "กำลังจัดส่ง";
                }
                else if($row["Status"]=="W"){
                    echo "กำลังซ่อม";
                }
        ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <?php
                        echo "<input type='submit'class='dropdown-item' name='P_$num_rows' value='พร้อมรับสินค้า'>";
                        echo "<input type='submit'class='dropdown-item' name='S_$num_rows' value='รับสินค้าแล้ว'>";
                        echo "<input type='submit'class='dropdown-item' name='T_$num_rows' value='กำลังจัดส่ง'>";
                        echo "<input type='submit'class='dropdown-item' name='W_$num_rows' value='กำลังซ่อม'>";
        ?>
                    </div>
        <?php
                    echo "<input class='btn btn-danger' type='submit' name='D_$num_rows' value='X' onclick='return Confirm_del()'> ";  
        ?>
                </div>
                </form>
                </td></tr>

        <?php       
                $num_rows++; 
                    }   
                } 
                //$conn->close();
        ?>
    </table>

    <script>
        function Confirm_del() {
            return confirm("ยืนยันการลบรายการ");
        }
    </script>
        <?php
            if(mysqli_num_rows($result) > 0){
                echo "<div style=' color : red;font-size:25px;margin-top:2rem;margin-left:2rem;display:block;font-family: monospace;text-align:center;'><b>".mysqli_num_rows($result)." : results</b></div>";
            }
            else { 
                echo "<div style='color : red;font-size:25px;margin-top:2rem;margin-left:2rem;display:block;font-family: monospace;text-align:center;'><b>0 : results</b></div>"; 
            }
        ?>

        
        <?php
            for($i=1;$i<=mysqli_num_rows($result);$i++){
               if(isset($_POST['P_'.$i])){
                    $update_status = "UPDATE manage SET Status = 'P' WHERE  ProductID = '$product_id[$i]'";
                    $update_status = mysqli_query($connect,$update_status);
        ?>      
                <script>
                    document.location.href="manage.php";
                </script>
        <?php
                }
                else if(isset($_POST['S_'.$i])){
                    $update_status = "UPDATE manage SET Status = 'S' WHERE  ProductID = '$product_id[$i]'";
                    $update_status = mysqli_query($connect,$update_status);
                    ?>      
                <script>
                    document.location.href="manage.php";
                </script>
        <?php
                }
                else if(isset($_POST['T_'.$i])){
                    $update_status = "UPDATE manage SET Status = 'T' WHERE  ProductID = '$product_id[$i]'";
                    $update_status = mysqli_query($connect,$update_status);
                    ?>      
                <script>
                    document.location.href="manage.php";
                </script>
        <?php
                }
                else if(isset($_POST['W_'.$i])){
                    $update_status = "UPDATE manage SET Status = 'W' WHERE  ProductID = '$product_id[$i]'";
                    $update_status = mysqli_query($connect,$update_status);
                    ?>      
                <script>
                    document.location.href="manage.php";
                </script>
        <?php
                }
                else if(isset($_POST['D_'.$i])){
                    $del_status = "DELETE FROM manage WHERE ProductID = '$product_id[$i]'";
                    $del_status = mysqli_query($connect,$del_status);
        ?>      
                <script>
                    document.location.href="manage.php";
                </script>
        <?php
                }
                
            }
        ?>
        <div  class="login" >
        <input type="button" value="LOGOUT" onclick='location.replace("index.php")'>  
        </div>
           
</body>

</html>