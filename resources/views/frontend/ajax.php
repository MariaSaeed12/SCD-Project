<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project"; // Adjust according to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

header('Content-Type: application/json');

if (isset($_POST['query'])) {
    $searchTerm = $_POST['query'];
    $sql = "SELECT * FROM doctors WHERE name LIKE ? OR specialty LIKE ? OR location LIKE ?";
    $stmt = $conn->prepare($sql);
    $searchTerm = "%" . $searchTerm . "%";
    $stmt->bind_param("sss", $searchTerm, $searchTerm, $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();

    $response = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $response[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'specialty' => $row['specialty'],
                'location' => $row['location']
            ];
        }
    }

    echo json_encode($response);
    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['error' => 'Invalid search query.']);
}
?>
