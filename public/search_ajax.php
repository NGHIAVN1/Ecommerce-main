<?php
include 'lib/connection.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['query'])) {
    $query = mysqli_real_escape_string($conn, $_POST['query']);
    
    // Search in product table
    $sql = "SELECT id, name, description, Price, imgname 
            FROM product 
            WHERE name LIKE '%$query%' 
            OR description LIKE '%$query%' 
            ORDER BY name ASC 
            LIMIT 10";
    
    $result = $conn->query($sql);
    $products = [];
    
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $products[] = [
                'id' => $row['id'],
                'name' => htmlspecialchars($row['name']),
                'description' => htmlspecialchars($row['description']),
                'Price' => number_format($row['Price']),
                'imgname' => htmlspecialchars($row['imgname'])
            ];
        }
    }
    
    echo json_encode($products);
} else {
    echo json_encode([]);
}

$conn->close();
?>
