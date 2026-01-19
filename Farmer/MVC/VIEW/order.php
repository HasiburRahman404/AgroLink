<?php
include "../CONTROL/order_valid.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Farmer Dashboard - AgroLink</title>
    <link rel="stylesheet" href="../CSSSTYLES/order.css">
</head>
<body>


<header class="topbar">
    <div class="logo">AgroLink <span>Farmer</span></div>
    <a href="../CONTROL/farmerlogout.php" class="logout">Logout</a>
</header>


<div class="container">

    
    <aside class="sidebar">
        <ul>
            <li><a href="admin_dashboard.php">Dashboard</a></li>
            <li><a href="farmerprofile.php">Profile</a></li>
            <li class="active"><a href="my_products.php">My Products</a></li>
            <li><a href="add_product.php">Add Product</a></li>
            <li><a href="Farmers_help.php">Farmers Help</a></li>
        </ul>
    </aside>

    
    <main class="content">
        <h1>Farmer Dashboard</h1>

       
        <div class="table-box">
            <h2>Requesters Information</h2>
            <table>
                <tr>
                    <?php
                    if($requesters_result->num_rows > 0){
                        $fields = $requesters_result->fetch_fields();
                        foreach($fields as $field){
                            echo "<th>{$field->name}</th>";
                        }
                    }
                    ?>
                </tr>
                <?php
                if($requesters_result->num_rows > 0){
                    while($row = $requesters_result->fetch_assoc()){
                        echo "<tr>";
                        foreach($row as $cell){
                            echo "<td>$cell</td>";
                        }
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='100%'>No data found</td></tr>";
                }
                ?>
            </table>
        </div>

       
        <div class="table-box">
            <h2>Delivery Address</h2>
            <table>
                <tr>
                    <?php
                    if($delivery_result->num_rows > 0){
                        $fields = $delivery_result->fetch_fields();
                        foreach($fields as $field){
                            echo "<th>{$field->name}</th>";
                        }
                    }
                    ?>
                </tr>
                <?php
                if($delivery_result->num_rows > 0){
                    while($row = $delivery_result->fetch_assoc()){
                        echo "<tr>";
                        foreach($row as $cell){
                            echo "<td>$cell</td>";
                        }
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='100%'>No data found</td></tr>";
                }
                ?>
            </table>
        </div>

    </main>

</div>

</body>
</html>
