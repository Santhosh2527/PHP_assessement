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
// echo "Connected successfully";


$sql = "SELECT * FROM Blog_detalis";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"] . " - Title: " . $row["Title"] . " - Content: " . $row["Content"] . " - Author: " . $row["Author"] . " - CreatedAt: " . $row["CreatedAt"] . " - status: " . $row["status"] . "<br>";
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
                <th class="border border-gray-300 p-2">ID</th>
                <th class="border border-gray-300 p-2">Title</th>
                <th class="border border-gray-300 p-2">Content</th>
                <th class="border border-gray-300 p-2">Author</th>
                <th class="border border-gray-300 p-2">CreatedAt</th>
                <th class="border border-gray-300 p-2">Status</th>
            </tr>
        </thead>
        <tbody>
    
            <?php

            $sql = "SELECT * FROM product_detalis";
            $result = $conn->query($sql);

            while ($row = $conn->query($result)) {
                echo "<tr>";
                echo "<td class='border border-gray-300 p-2'>" . $row['ID'] . "</td>";
                echo "<td class='border border-gray-300 p-2'>" . $row['Title'] . "</td>";
                echo "<td class='border border-gray-300 p-2'>" . $row['Content'] . "</td>";
                echo "<td class='border border-gray-300 p-2'>" . $row['Author'] . "</td>";
                echo "<td class='border border-gray-300 p-2'>" . $row['CreatedAt'] . "</td>";
                echo "<td class='border border-gray-300 p-2'>" . $row['status'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>

