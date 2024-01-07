<?php
require_once '../config/config.php';
$dtpCode = $_POST['dtp'];
$dtpRef = $_POST['dtpRef'];
$imfSql = mysqli_query($conn, "SELECT * FROM require_codes WHERE dtp_code='$dtpCode' AND cust_id='$dtpRef'");
if(mysqli_num_rows($imfSql)){
    header("content-Type: application/text");
    $data = array('status' => 200);
    echo json_encode($data);
}else{
    $data = array('status' => 500);
    echo json_encode($data);
}
?>