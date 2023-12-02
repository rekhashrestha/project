<?php
// Database configuration
$servername = "127.0.0.1:3307"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "user_db"; // Replace with your database name

// Create connection
$conn = new mysqli($127.0.0.1:3307, $root, , $user_db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user ID from the request
$venue_id = $_GET['venue_id']; // Assuming user ID is passed as a query parameter

// Prepare SQL query to retrieve recommendations for the given user ID
$sql = "SELECT name FROM venue WHERE venue_id = $venue_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch recommendations and store them in an array
    $recommendations = array();
    while ($row = $result->fetch_assoc()) {
        $recommendations[] = array(
            'name' => $row['name'],
           
        );
    }

    // Return recommendations as JSON response
    header('Content-Type: application/json');
    echo json_encode($recommendations);
} else {
    echo "No recommendations found for the user.";
}

// Close database connection
$conn->close();
?>
