<?php
// Simulating recommendations based on the user ID
$user_id = $_GET['user_id']; // Assuming user ID is passed as a query parameter

// Replace this logic with your actual recommendation generation based on user preferences
$recommendations = array(
    array('name' => 'Wedding Planner 1', 'description' => 'Service description 1'),
    array('name' => 'Wedding Planner 2', 'description' => 'Service description 2'),
    // Add more recommendation data as needed
);

// Return recommendations as JSON response
header('Content-Type: application/json');
echo json_encode($recommendations);
?>
