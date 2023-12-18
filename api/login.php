<?php
    include('../inc/conn.php');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        extract($_POST);
        $md5_password = md5($password);
        $select_user_query = "SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$md5_password'";
        $result = mysqli_query($conn, $select_user_query);

        if($result){
            $exist = mysqli_num_rows($result);
            if($exist){
                echo json_encode(['success' => true, 'message' => 'Successfully logged in.']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Invalid username and password.']);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid query. Contact the developer']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid request']);
    }
?>
