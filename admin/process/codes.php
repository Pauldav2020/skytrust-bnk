<?php
require_once './../../config/config.php';
$user = $_POST['user'];

$sql = mysqli_query($conn, "SELECT * FROM require_codes WHERE cust_id='$user'");
if(mysqli_num_rows($sql)<1) {
    $ttp = "TX".rand(000000,999999);
    $vat = "VAT".rand(000000,999999);
    $dtp = "DP".rand(000000,999999);


    $stmt = $conn->prepare("INSERT INTO require_codes(cust_id,ttp_code,vat_code,dtp_code) VALUES(?,?,?,?)");
    $stmt->bind_param('ssss', $user,$ttp,$vat,$dtp);
    $stmt->execute();
    if($stmt){
        header("Content-Type: application/json");
        $data = array('status' => 200, 'data' => $stmt);
        echo json_encode($data);
    }else{
        $data = array('status' => 500);
        echo json_encode($data);
    }
    
}else{
    $data = array('status' => 501);
        echo json_encode($data);
}

?>