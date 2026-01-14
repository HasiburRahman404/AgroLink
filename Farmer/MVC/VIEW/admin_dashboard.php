<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Farmer Dashboard - AgroLink</title>
    <link rel="stylesheet" href="admin_dashboard.css">
</head>
<body>

<!-- ===== TOP NAVBAR ===== -->
<header class="topbar">
    <div class="logo">AgroLink <span>Farmer</span></div>
    <a href="#" class="logout">Logout</a>
</header>

<!-- ===== MAIN CONTAINER ===== -->
<div class="container">

    <!-- ===== SIDEBAR ===== -->
    <aside class="sidebar">
        <ul>
            <li class="active">Dashboard</li>
            <li>..</li>
            <li>My Products</li>
            <li>Orders</li>
            <li>Earnings</li>
            <li>Profile</li>
        </ul>
    </aside>

    <!-- ===== MAIN CONTENT ===== -->
    <main class="content">

        <h1>Farmer Dashboard</h1>

        <!-- INFO CARDS -->
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

        <!-- RECENT ORDERS -->
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
