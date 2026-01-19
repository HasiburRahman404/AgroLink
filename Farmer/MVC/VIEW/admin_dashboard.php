<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Farmer Dashboard - AgroLink</title>
    <link rel="stylesheet" href="../CSSSTYLES/admin_dashboard.css">
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
            <li><a href="orders.php">Orders</a></li>
            <li><a href="earnings.php">Earnings</a></li>
    </ul>
</aside>


    
    <main class="content">

        <h1>Farmer Dashboard</h1>

        
        <div class="cards">
            <div class="card">
                <h2>15</h2>
                <p>My Products</p>
            </div>
            <div class="card">
                <h2>8</h2>
                <p>Orders Received</p>
            </div>
            <div class="card">
                <h2>৳ 12,500</h2>
                <p>Total Earnings</p>
            </div>
        </div>

        
        <div class="table-box">
            <h2>Recent Orders</h2>
            <table>
                <tr>
                    <th>Order ID</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>#101</td>
                    <td>Fresh Rice</td>
                    <td>20 kg</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <td>#102</td>
                    <td>Organic Potato</td>
                    <td>10 kg</td>
                    <td>Delivered</td>
                </tr>
            </table>
        </div>

    </main>
</div>

</body>
</html>
