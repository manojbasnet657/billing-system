<?php
include './database/dbconfig.php';
$tid = $_GET['t_id'];
echo $tid;
$sql = "SELECT *  FROM `billing` where `cpan_no`='$tid'";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* body{
        background-image: url('250.webp');
        background-repeat: no-repeat;
        background-size: cover;
    } */
    table{
        border-collapse: collapse;
        margin: 10px;
    }
    /* td{
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
    } */
    div{
        width: 50%;
        background-color:yellow;
        margin: auto;
        padding: 10px;
    }
</style>

<body>
    <div >
        <label for="">Shope Name</label>
        <input type="text" name="" id="">
        <h1>Payment</h1>
    <table border="1">
<?php    while($row = mysqli_fetch_array($result)){
    ?>
    

        <tr>
            <td>
                <span>bill_no</span> : <span><?php echo $row['bill_no'] ?></span>
            </td>
        </tr>
        <tr>
            <td>
                <span>Pan_no</span> : <span><?php echo $row['pan_no'] ?></span>
            </td>
        </tr>
        <tr>
            <td>
                <span>customer_pan_no</span> : <span><?php echo $row['cpan_no'] ?></span>
            </td>
        </tr>
        <tr>
            <td>
                <span>trnascation_id</span> : <span><?php echo $row['t_id'] ?></span>
            </td>
        </tr>
        <tr>
            <td>
                <span>Cutomer Name</span> : <span><?php echo $row['cname'] ?></span>
            </td>
        </tr>
        <tr>
            <td>
                <span>Cutomer address</span> : <span><?php echo $row['caddress'] ?></span>
            </td>
        </tr>
        <tr>
            <td>
                <span>product name</span> : <span><?php echo $row['pname'] ?></span>
            </td>
        </tr>
        <tr>
            <td>
                <span>Product quantity</span> : <span><?php echo $row['qunatity'] ?></span>
            </td>
        </tr>
        <tr>
            <td>
                <span>price</span> : <span><?php echo $row['price'] ?></span>
            </td>
        </tr>
        <tr>
            <td>
                <span>payment</span> : <span><?php echo $row['payment'] ?></span>
            </td>
        </tr>
        </tr>
        <?php
}
?>
    </table>
    </div>
</body>

</html>