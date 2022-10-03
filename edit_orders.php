<?php
include 'dbConfig.php';
include 'ordersConfig.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE orders set id='" . $_POST['id'] . "', name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', phone='" . $_POST['phone'] . "' , address='" . $_POST['address'] . "' ,
productname='" . $_POST['productname'] . "', quantity='" . $_POST['quantity'] . "', ordertotal='" . $_POST['ordertotal'] . "',  status='" . $_POST['status'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
header("Location: orders.php");
exit();
}
$result = mysqli_query($conn,"SELECT * FROM orders WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">ShipStation</span>
                    </a>
                </li>

                <li>
                    <a href="welcome.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="orders.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Orders</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="welcome__text">
                    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php
                                $resultSales = mysqli_query($conn, 'SELECT SUM(id) AS value_sum FROM orders'); 
                                $rowSales = mysqli_fetch_assoc($resultSales); 
                                $sumSales = $rowSales['value_sum'];
                                echo $sumSales;
                                ?>
                        </div>
                        <div class="cardName">Sales</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName"></div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php
                                $resultEarning = mysqli_query($conn, 'SELECT SUM(ordertotal) AS value_sum FROM orders'); 
                                $rowEarning = mysqli_fetch_assoc($resultEarning); 
                                $sumEarning = $rowEarning['value_sum'];
                                echo $sumEarning;
                            ?>
                        </div>
                        <div class="cardName">Earning</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>
    <div class="editForm" id="myForm">
        <form name="editForm" method="post" action="" class="editForm-container">
            <div>
                <div>
                    <?php if(isset($message)) { echo $message; } ?>
                </div>
                Name: <br>
                <input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
                <br>
                Email:<br>
                <input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
                <br>
                Phone:<br>
                <input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>">
                <br>
                Address: <br>
                <input type="text" name="address" class="txtField" value="<?php echo $row['address']; ?>">
                <br>
            </div>
            <div>
                Product: <br>
                <input type="text" name="productname" class="txtField" value="<?php echo $row['productname']; ?>">
                <br>
                Quantity: <br>
                <input type="text" name="quantity" class="txtField" value="<?php echo $row['quantity']; ?>">
                <br>
                Order Total: <br>
                <input type="text" name="ordertotal" class="txtField" value="<?php echo $row['ordertotal']; ?>">
                <br>
                Status:<br>
                <input type="text" name="status" class="txtField" value="<?php echo $row['status']; ?>">
                <br>
            </div>
        </form>
        <button type="submit" name="submit" value="Submit" class="btn" onclick="location.href='orders.php'">Submit</button>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>