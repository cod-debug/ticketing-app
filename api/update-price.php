<?php
    include('../inc/conn.php');
    try {
        extract($_POST);

        $get_price_query = "UPDATE `price` SET `value` = '$new_price' WHERE `price_id` = 1";
        $price_result = mysqli_query($conn, $get_price_query);

        echo json_encode(['success' => true, 'result' => 'Successfully updated price.']);
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'result' => $e]);
    }
?>