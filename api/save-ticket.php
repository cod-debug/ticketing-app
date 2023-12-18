<?php
    include('../inc/conn.php');
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['proof_of_payment'])) {
        extract($_POST);

        $targetDirectory = '../uploads/proof_of_payment/';
        $allowedExtensions = ['pdf', 'jpg', 'jpeg', 'png', 'docx', 'doc', 'docs']; // Adjust the allowed file extensions as needed

        $fileName = $_FILES['proof_of_payment']['name'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        
        $get_price_query = "SELECT `value` FROM `price` WHERE `price_id` = 1";
        $price_result = mysqli_query($conn, $get_price_query);
        $row = mysqli_fetch_row($price_result);
        $current_price = $row[0];

        // Validate file type
        if (!in_array($fileExtension, $allowedExtensions)) {
            echo json_encode(['success' => false, 'message' => 'Invalid file type. Allowed types: ' . implode(', ', $allowedExtensions)]);
            exit;
        }

        $uniqueCode = time();
        $fileName = $uniqueCode . "_" . $fileName;
        $targetFile = $targetDirectory . $fileName;

            
        $total_price_expected = $current_price * $number_of_ticket;

        if($total_amount >= $total_price_expected){

            if (move_uploaded_file($_FILES['proof_of_payment']['tmp_name'], $targetFile)) {
                
                if($total_amount >= $total_price_expected){
                    for($number_of_ticket; $number_of_ticket > 0; $number_of_ticket--){
                        $save_query = "INSERT INTO `ticket_details` (`ref_num`, `full_name`, `email`, `contact`, `address`, `area`, `proof_of_payment`, `total_amount`, `mode_of_payment`) VALUES
                        ('1', '$full_name', '$email', '$contact_number', '$address', '$area', '$fileName', '$current_price', '$mode_of_payment' )";
                        mysqli_query($conn, $save_query);
                    } 
                }
    
                echo json_encode(['success' => true, 'message' => 'Ticket Bought']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Failed to upload image']);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Not enough amount rendered']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid request']);
    }
?>