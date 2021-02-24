
<?php
// Start the session
session_start();
    if (isset($_SESSION['IsAdmin']) && $_SESSION['IsAdmin'] === true) {}
    else {
        header('location: /Projekti-Web/index.php');
    }

?>

<html>
<head>
<title>Flower Shop Prishtina</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/dashboard.css" rel="stylesheet" type="text/css" media="all">
</head> 
<body>
    <div class="dashboard-main">
        <div class="dashboard-row"> 
            <div class="dashboard-button"> 
                <a href="db-account.php">My Account</a>
            </div>
            <div class="dashboard-button">
            <a href="db-products.php">Products</a>
            </div>
        </div>
        <div class="dashboard-row">
            <div class="dashboard-button"> 
            <a href="db-users.php">All Users</a>
            </div>
            <div class="dashboard-button">
            <a href="db-contact.php">View Messages</a>
            </div>
        </div>
</div>
</div>
<div class="close-button">
    <a href="../index.html">Back to site</a>
</div>
</body>

</html>