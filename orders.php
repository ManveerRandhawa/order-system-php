<?php
// Load the database configuration file
include 'dbConfig.php';
include 'config.php';
include 'ordersConfig.php';
$result = mysqli_query($conn,"SELECT * FROM orders");
// Get status message
if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusType = 'alert-success';
            $statusMsg = 'Order data has been imported successfully.';
            break;
        case 'err':
            $statusType = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusType = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusType = '';
            $statusMsg = '';
    }
}

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM orders WHERE id=$id");
	$_SESSION['message'] = "email deleted!"; 
	header('location: orders.php');
}
?>

<!-- Display status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="col-xs-12">
    <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>

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
                    <a href="welcome.php">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span href="welcome.php" class="title">ShipStation</span>
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
                            <ion-icon name="order-outline"></ion-icon>
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

                <div class="welcome__text" style="color: #ef9273;">
                    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
                </div>
            </div>
            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders" style="width: 1370px;">
                    <div class="cardHeader" style="max-width: 970px;">
                        <h2>Recent Orders</h2>
                        <a href="javascript:void(0);" class="btn" onclick="formToggle('importFrm');"><i class="plus"></i> Import</a>
                        <a href="exportData.php" class="btn"><i class="exp"></i> Export</a>
                        <button href="addData.php" id="add__order" class="btn" onclick="openForm()" ondblclick="closeForm()">Add Order</button>
                    </div>
                    <!-- CSV file upload form -->
                    <div class="col-md-12" id="importFrm" style="display: none;">
                        <form action="importData.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="file" />
                            <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
                        </form>
                    </div>

                    <!-- Data list table --> 
                    <table class="table table-striped table-bordered" style="max-width: 1140px; margin-top:-200px;">
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Order Total</th>
                            <th>Status</th>
                        </tr>
                                <?php
                                $i=0;
                                while($row = mysqli_fetch_array($result)) {
                                ?>
	                    <tr>
                            <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["name"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["phone"]; ?></td>
                                <td><?php echo $row["address"]; ?></td>
                                <td><?php echo $row["productname"]; ?></td>
                                <td><?php echo $row["quantity"]; ?></td>
                                <td><?php echo $row["ordertotal"]; ?></td>
                                <td><?php echo $row["status"]; ?></td>
                                <td><button style="margin-left: 80px;" class ="update__btn" type="button"><a style="text-decoration:none; color:#fff; " href="edit_orders.php?id=<?php echo $row["id"]; ?>">Update</a></button></td>
                                <td><button class ="delete__btn" type="button"><a style="text-decoration:none; color:#fff;" href="orders.php?del=<?php echo $row['id']; ?>">Delete</a></button></td>
                        </tr>
                                <?php
                                $i++;
                                }
                                ?>
                    </table>
    <div class="form-popup" id="myForm">
        <form action="addData.php" method="post" class="form-container">
            <div>                   
                <label class="form__text" for="firstName">Name:</label>
                <input type="text" name="name" id="firstName">

                <label class="form__text" for="lastName">Email:</label>
                <input type="text" name="email" id="email">

                <label class="form__text" for="emailAddress">Phone:</label>
                <input type="text" name="phone" id="phone">

                <label class="form__text" for="emailAddress">Address:</label>
                <input type="text" name="address" id="address">
            </div>                 
            <div>          
                <label class="form__text" for="emailAddress">Product Name:</label>
                <input type="text" name="productname" id="productName">

                <label class="form__text" for="emailAddress">Quantity:</label>
                <input type="text" name="quantity" id="quantity">
                            
                <label class="form__text" for="emailAddress">Order Total:</label>
                <input type="text" name="ordertotal" id="orderTotal">

                <label class="form__text" for="emailAddress">Status:</label>
                <input type="text" name="status" id="status">
            </div> 
            
        </form>
    </div>     
    <!-- =========== Scripts =========  -->
    <script src="main.js"></script>

    <script>
        function openForm() {
        document.getElementById("myForm").style.display = "block";
    }
    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
    </script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- Show/hide CSV upload form -->
<script>
function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}
</script>
</body>

</html>