<?php
include('../inc/conn.php');
    // Your SQL query
    $select_user_query = "SELECT * FROM `ticket_details`";

    // Execute the query
    $result = mysqli_query($conn, $select_user_query);

    // Check if the query was successful
    if ($result) {
        // Fetch all rows as an associative array
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // Convert the array to JSON
        $json_response = json_encode($rows);

        // Set the Content-Type header to application/json
        header('Content-Type: application/json');

        // Output the JSON response
        echo $json_response;
    } else {
        // Handle the database query error
        echo json_encode(['error' => mysqli_error($conn)]);
    }
?>
