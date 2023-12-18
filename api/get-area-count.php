<?php
    include('../inc/conn.php');
    try {
        $query = "SELECT 
                area,
                COUNT(*) as total_count,
                SUM(total_amount) as total_amount
            FROM ticket_details
            GROUP BY area";

        // Execute the query
        $price_result = mysqli_query($conn, $query);

        // Create an array to store the grouped results
        $output = ['data' => []];

        // Fetch each grouped result as an associative array
        while ($result = mysqli_fetch_assoc($price_result)) {
            $output['data'][] = [
                'area' => $result['area'],
                'total_count' => number_format($result['total_count'], 0),
                'total_amount' => number_format($result['total_amount'], 2),
            ];
        }

        // Convert the output array to JSON format
        $jsonResult = json_encode(['success' => true, 'result' => $output], JSON_PRETTY_PRINT);

        echo $jsonResult;
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
?>