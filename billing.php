
<?php
    include './database/dbconfig.php';
    $cbill = $_GET['check_bill'];
    

    $sql = "SELECT *  FROM `billing` WHERE `cname` LIKE '$cbill%'";
    $result = mysqli_query($conn ,$sql);
    $num = mysqli_num_rows($result);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            margin: auto;
        }
        th,td{
            text-align: center;
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    
<?php
    if($num > 0){
?>


<table border="1">
    <th>customer name</th>
    <th>address</th>
    <th>fiscal year</th>
    <th>p_name</th>
    <th>date</th>
    <th>details</th>
<?php
    }
?>

    <?php
    if($num > 0){
        while($row =  mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo$row['cname'] ?></td>
                <td><?php echo$row['caddress'] ?></td>
                <td><?php echo$row['fiscal_year'] ?></td>
                <td><?php echo$row['pname'] ?></td>
                <td><?php echo$row['edate'] ?></td>
                <td>
                    <form action="billdetails.php" method="GET">
                        <input style="display: none;" type="number" value="<?php echo$row['t_id'] ?>" name="t_id">
                        <button type="submit">check Bill</button>
                    </form>
                </td>
            </tr>
    <?php
        }
    }else{
        echo"No deatils found";
    }
    ?>


</table>
</body>
</html>



















