<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kapetann";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle checkbox update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['order_id']) && isset($_POST['ready_for_pickup'])) {
        $orderId = $_POST['order_id'];
        $readyForPickup = $_POST['ready_for_pickup'];
        $updateSql = "UPDATE orders SET ready_for_pickup = '$readyForPickup' WHERE id = $orderId";
        $conn->query($updateSql);
    }
}

// SQL query to retrieve orders and user's email
$sql = "SELECT o.id, o.title, o.date, o.invoice_number, u.email, o.ready_for_pickup FROM orders o INNER JOIN users u ON o.user_id = u.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data in table form
    echo "<form method='post'>";
    echo "<table><tr><th>Product</th><th>Date</th><th></th><th>User Email</th><th>Ready for Pickup</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["title"] . "</td><td>" . $row["date"] . "</td><td>" . "</td><td>" . $row["email"] . "</td>";
        echo "<td><input type='checkbox' name='ready_for_pickup' value='1' " . ($row["ready_for_pickup"] ? "checked" : "") . "></td>";
        echo "<input type='hidden' name='order_id' value='" . $row["id"] . "'>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<input type='submit' value='Save'>";
    echo "</form>";
} else {
    echo "0 results";
}
$conn->close();
?>
