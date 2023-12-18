<?php
    include('../inc/conn.php');
    try {
        $get_price_query = "SELECT `value` FROM `price` WHERE `price_id` = 1";
        $price_result = mysqli_query($conn, $get_price_query);
        $row = mysqli_fetch_row($price_result);

        echo json_encode(['success' => true, 'result' => $row[0]]);
    } catch (Exception $e) {
        echo $e;
    }
?>