<?php
require_once './../../config/config.php';
require_once './../includes/reg-header.php';
$codeRef = $_POST['codeRef'];
$status = "";
$viewCodes = mysqli_query($conn, "SELECT * FROM require_codes WHERE cust_id = '$codeRef'");
$cur = mysqli_query($conn, "SELECT * FROM users WHERE reg_Ref = '$codeRef'");
$fetchCur = mysqli_fetch_assoc($cur);
$userCur = $fetchCur['currency'];


$ttp = mysqli_query($conn, "SELECT * FROM bill_Amt WHERE user_Ref = '$codeRef' and bill ='ttp'");
$ttpAmt = '';
if(mysqli_num_rows($ttp)>0){
    $fetch = mysqli_fetch_array($ttp);
    $ttpAmt = $fetch['amount'];
}else{
    $ttpAmt = 0.00;
}

$vat = mysqli_query($conn, "SELECT * FROM bill_Amt WHERE user_Ref = '$codeRef' and bill ='vat'");
$vatAmt = '';
if(mysqli_num_rows($vat)>0){
    $fetch = mysqli_fetch_array($vat);
    $vatAmt = $fetch['amount'];
}else{
    $vatAmt = 0.00;
}

$dtp = mysqli_query($conn, "SELECT * FROM bill_Amt WHERE user_Ref = '$codeRef' and bill ='dtp'");
$dtpAmt = '';
if(mysqli_num_rows($dtp)>0){
    $fetch = mysqli_fetch_array($dtp);
    $dtpAmt= $fetch['amount'];
}else{
    $dtpAmt = '0.00';
}
if(mysqli_num_rows($viewCodes)>0) {?>
    <?php $row = mysqli_fetch_assoc($viewCodes)?>
    <div class="view-container" id="remove">
        <span class="closeBtn" onclick="window.location.reload();">&times</span>
        <?php 
                echo "<table class='table table-striped'>
                    <tr>
                        <th>TTP-CODE</th>
                        <th>VAT-CODE</th>
                        <th>DTP-CODE</th>
                    </tr>";
                    echo "<tr>";
                        echo   "<td>".$row['ttp_code']."</td>";
                        echo   "<td>".$row['vat_code']."</td>";
                        echo  "<td>".$row['dtp_code']."</td>";
                    echo  "</tr>";
            echo "</table>";
            echo "<br>";
            echo "<table class='table table-striped'>
                <tr>
                    <th>TTP-CODE</th>
                    <th>VAT-CODE</th>
                    <th>DTP-CODE</th>
                </tr>";
                echo "<tr>";
                    echo   "<td>".$userCur .$ttpAmt."</td>";
                    echo   "<td>".$userCur .$vatAmt."</td>";
                    echo  "<td>".$userCur .$dtpAmt."</td>";
                echo  "</tr>";
            echo "</table>";
        ?>
    </div>
<?php }else{?>
    <div class="view-container">
        <span class="closeBtn" onclick="window.location.reload();">&times</span>
        <?php echo "<table class='table table-striped'>
                    <tr>
                        <th>TTPCODE</th>
                        <th>VATCODE</th>
                        <th>DTPCODE</th>
                    </tr>";
                    echo "<tr>";
                        echo   "<td colspan='4' class='text-center text-danger'>NO CODE FOUND</td>";
                        
                    echo  "</tr>";
            echo "</table>";
        ?>
    </div>
<?php }

?>
<style>
       .closeBtn{
           float: right;
           font-size: 30px;
           color: #f00;
           cursor: pointer;
       }
    
       .view-container{
           background-color: #fff;
           width: auto;
           margin-top: 60px;
           padding: 20px;
           overflow-x: scroll;
           -webkit-animation: animatezoom;
           animation: animatezoom 0.6s;
       }
       @-webkit-keyframes animatezoom{
           from {transform: scale(0)}
           to {transform: scale(1)}
       }
       @keyframes animatezoom{
           from {transform: scale(0)}
           to {transform: scale(1)}
       }
   </style>
