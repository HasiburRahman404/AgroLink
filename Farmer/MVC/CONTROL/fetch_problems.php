<?php
include "../MODEL/Database_conn.php";

$sql = "SELECT * FROM farmers_help";
$result = $conn->query($sql);

echo "<table>
        <tr>
            <th>#</th>
            <th>Email</th>
            <th>Description</th>
        </tr>";

if ($result && $result->num_rows > 0) {
    $i = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>$i</td>
                <td>".htmlspecialchars($row['Email'])."</td>
                <td>".htmlspecialchars($row['Description'])."</td>
              </tr>";
        $i++;
    }
} else {
    echo "<tr>
            <td colspan='3' style='text-align:center'>No problems submitted yet</td>
          </tr>";
}

echo "</table>";
?>
