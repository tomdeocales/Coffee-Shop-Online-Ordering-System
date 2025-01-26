<?php
// Establish connection to the database
include 'db.php';


?>
<!DOCTYPE html>
<html>
<head>
    <title>User Orders</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Order Title</th>
            <th>Quantity</th>
            <th>Subtotal Amount</th>
            <th>Date</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
    <td><?php echo $row['subtotal_amount']; ?></td>
    <td><?php echo $row['date']; ?></td>
</tr>
<?php endwhile; ?>

    </table>
</body>
</html>
