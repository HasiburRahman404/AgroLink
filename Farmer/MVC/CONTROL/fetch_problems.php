<?php
include "../MODEL/Database_conn.php";
$conn = openConn();

$sql = "SELECT * FROM farmers_help";
$result = $conn->query($sql);

echo "<table border='1' cellpadding='5' cellspacing='0'>
        <tr>
            <th>Email</th>
            <th>Description</th>
        </tr>";

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $email = htmlspecialchars($row['Email']);
        $description = htmlspecialchars($row['Description']);

        echo "<tr>
                <td>{$email}</td>
                <td>{$description}</td>
              </tr>";
    }
} else {
    echo "<tr>
            <td colspan='3' style='text-align:center'>No problems submitted yet</td>
          </tr>";
}

echo "</table>";
?>