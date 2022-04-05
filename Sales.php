<?php
session_start();
if($_SESSION['logged'] == false){
  header('location:admin-login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="project2.css" />
</head>
<style>
  body {
    overflow-x: hidden;
    background-color: blue;
  }

  .form {
    background-color: whitesmoke;
    height: 20vh;
    width: 100%;
    margin-top: 12px;
    padding: 20px;

  }

  .forms {
    background-color: blue;
    height: 20vh;
    width: 100%;
    margin: auto;
    /* margin: 15px; */
    padding: 20px;

  }

  .row1 {
    background-color: whitesmoke;
    height: 35vh;
    width: 100%;
    margin: auto;
    padding: 20px;


  }

  .row2 {
    height: 15vh;
    float: left;
    justify-content: center;
    align-items: center;


  }

  .row3 {
    height: 15vh;
    float: right;
    justify-content: center;
    align-items: center;

  }

  .bills {
    height: 15vh;
    float: left;
    justify-content: center;
    align-items: center;


  }

  .bill1 {
    height: 15vh;
    float: right;
    justify-content: center;
    align-items: center;

  }

  .bill {
    height: 10vh;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    column-gap: 10px;
  }

  div input {
    padding: 5px;
    outline: none;
  }

  div ::placeholder {
    color: black;

  }

  div {
    padding-bottom: 10px;
  }

  input {
    margin: 10px;
  }

  #one,
  #two {
    margin-right: 50px;
  }
  #logout{
    float: right;
    right: 5px;
  }
</style>

<body>
<header>
        <nav class="navbar">
           <h1>Billing System</h1>
           
        </nav>
    </header>
  <!-- <?php include "nav.php" ?> -->

  <form action="" method="POST">

    <div class="forms">
      <div class="bills">
        <div>
          <label for="Fiscal">Fiscal Year:</label><br>
          <input type="text" name="fyear" id="Fiscal Year" placeholder="eg.2079-2080" >
        </div>
        <div>
          <label for="Bill no">Bill No:</label><br>
          <input type="number" name="billno" id="Bill No" placeholder="oo">
        </div>
      </div>
      <div class="bill1">
        <td></td>
        <div>
          <label for="one">Eng_Date:</label><br>
          <input type="date" name="edate" id="one">
        </div>
        <div>
          <label for="">Nep_Date:</label><br>
          <input type="date" name="ndate" id="two">
        </div>
      </div>
    </div>
    <div class="row1">
      <div class="row2">
        <div>
          <label for="">Cutomer Name:</label><br>
          <input type="text" name="cnmame" id="Fiscal Year" placeholder="">
        </div>
        <div>
          <label for="">customer_pan_no</label><br>
          <input type="number" name="cpnumb" id="Fiscal Year" placeholder="eg.123456">
        </div>
        <div>
          <label for="">pan_no</label><br>
          <input type="number" name="pnumb" id="Fiscal Year" value="564654" placeholder="">
        </div>
      </div>
      <div class="row3">
        <div>
          <label for="">addrres</label><br>
          <input type="text" name="address" id="one" placeholder="eg.ktm">
        </div>
        <div>
          <label for="">payment mode</label><br>
          <select id="pmode" name="pmode">
            <option value="cash">cash</option>
            <option value="online">online</option>
          </select>
        </div>
      </div>
    </div>

    </div>
    <div class="form">
      <div class="bill">
        <div>
          <label for="s/n">S/n</label>
          <input type="number" name="Sn" id="S/N" placeholder="S/N" />
        </div>
        <div>
          <label for="P.Name">P.Name</label>
          <input type="text" name="Pname" id="P.Name" placeholder="p.Name" />
        </div>
        <div>
          <label for="Qty">Qty</label>
          <input type="nunber" name="Qty" id="Qty" placeholder="quantity" />
        </div>
        <div>
          <label for="">Price</label>
          <input type="number" name="price" id="price" placeholder="Rs.">
        </div>
        <div>
          <button type="submit" name="submit">Add</button>
        </div>
      </div>
      <div>
        <table>

        </table>
      </div>
    </div>
  </form>
    <div>
      <form action="checkbill.php" method="GET">
        <input type="text" name="check_bill">
        <button type="submit">check details</button>
      </form>
      <form id="logout" action="admin-logout.php" method="POST">
        <button type="submit">logout</button>
      </form>
    </div>
</body>

</html>
<?php
include './database/dbconfig.php';

if(isset($_POST['submit'])){
  $fyear = trim($_POST['fyear']);
  $billno = trim($_POST['billno']);
  $edate = trim($_POST['edate']);
  $ndate = trim($_POST['ndate']);
  $cnmame = trim($_POST['cnmame']);
  $cpnumb = trim($_POST['cpnumb']);
  $pnumb = trim($_POST['pnumb']);
  $address = trim($_POST['address']);
  $pmode = trim($_POST['pmode']);
  $Sn = trim($_POST['Sn']);
  $Pname = trim($_POST['Pname']);
  $Qty = trim($_POST['Qty']);
  $price = trim($_POST['price']);

// echo"$fyear
// $billno
// $edate
// $ndate
// $cnmame
// $cpnumb
// $pnumb
// $address
// $pmode
// $Sn
// $Pname
// $Qty
// $price";


  $sql  = "INSERT INTO `billing`(`fiscal_year`, `bill_no`, `edate`, `ndate`, `cname`, `cpan_no`, `pan_no`, `caddress`, `payment`, `sn`, `pname`, `qunatity`, `price`) VALUES ('$fyear',$billno,'$edate','$ndate','$cnmame',$cpnumb,$pnumb,'$address','$pmode',$Sn,'$Pname',$Qty, $price)";

  if(mysqli_query($conn,$sql)){
    echo"inserted";
  }else{
    echo"not inserted";
  }
  
}

?>