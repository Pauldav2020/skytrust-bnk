<?php
require_once '../config/config.php';
$vatCode = $_POST['vat'];
$vatRef = $_POST['vatRef'];
$vatSql = mysqli_query($conn,"SELECT * FROM require_codes WHERE vat_code='$vatCode' AND cust_id='$vatRef'");
if(mysqli_num_rows($vatSql)>0) {
    header('Content-Type: application/text');
    $data = array('status' => 200, 'code'=>$vatSql);
    echo json_encode($data);
}else {
    $data = array('status' => 500);
    echo json_encode($data);
}
?>