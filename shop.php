<?php

require('index.php');

$servername = "localhost";
$username = "dckap";
$password = "Dckap2023Ecommerce";
$dbname = "Ecommerce";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT * FROM product_detalis";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - name: " . $row["name"] . " - price: " . $row["price"] . " - image: " . $row["image"] . " - description: " . $row["description"] .  "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="flex flex-col">

    <table class="border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="border border-gray-300 p-2">Id</th>
                <th class="border border-gray-300 p-2">Name</th>
                <th class="border border-gray-300 p-2">Price</th>
                <th class="border border-gray-300 p-2">Image</th>
                <th class="border border-gray-300 p-2">Description</th>
            </tr>
        </thead>
        <tbody>
    
            <?php

            $sql = "SELECT * FROM product_detalis";
            $result = $conn->query($sql);

            while ($row = $conn->query($result)) {
                echo "<tr>";
                echo "<td class='border border-gray-300 p-2'>" . $row['id'] . "</td>";
                echo "<td class='border border-gray-300 p-2'>" . $row['name'] . "</td>";
                echo "<td class='border border-gray-300 p-2'>" . $row['price'] . "</td>";
                echo "<td class='border border-gray-300 p-2'>" . $row['image'] . "</td>";
                echo "<td class='border border-gray-300 p-2'>" . $row['description'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>