<?php
session_start();
require_once './config/config.php';

    //  email service
    require_once './email.php';

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $sqlUser = mysqli_query($conn, "SELECT * FROM OnBanking WHERE username='$user'");
    if($sqlUser){
        $rowPass = mysqli_fetch_assoc($sqlUser);
        $dataPass = $rowPass['password'];
        if(password_verify($pass,$dataPass)){
            $state = $rowPass['state'];
            $validate = $rowPass['valid_user'];
            if($validate !== 'Pending'){
                if($state == 'OPENED'){
                    $search = mysqli_query($conn, "SELECT * FROM otp WHERE status='YES' AND username='$user'");
                    if(mysqli_num_rows($search) >0){
                        $otpCode = rand(000000,999999);
                        $sql = mysqli_query($conn, "UPDATE otp SET otp_code='$otpCode' WHERE username='$user'");
                        if($sql){
                            $otp = $otpCode;
                            $row = mysqli_fetch_array($search);
                            
                            $user_ref = $row['user_ref'];
                            $sqlemail = mysqli_query($conn, "SELECT * FROM users WHERE reg_Ref='$user_ref'");
                            $rowEmail = mysqli_fetch_assoc($sqlemail);
                            $email = $rowEmail['email'];
                            sendotp($otp, $email,$domain_email,$header,$bank_name);
                            
                            $_SESSION['code'] = true;
                            $_SESSION['start'] = time();
                            $_SESSION['expire'] = $_SESSION['start'] + (05 * 60);
                            header("content-type: application/json");
                            $status = array('status' => 'success', 'data' => $row);
                            echo json_encode($status);  
                        }else{
                            $status = array('status' => 'error2');
                            echo json_encode($status);
                        }
                    }else{
                        $status = array('status' => 'error');
                        echo json_encode($status);
                    }
                }else{
                    echo json_encode(array('status' => 'blocked'));
                }
            }else{
                echo json_encode(array('status' => 'inactive_user'));
            }
           
        }else{
            echo json_encode(array('status' => 'invalid'));
        }
    }
?>

