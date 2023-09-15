<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN Panel</title>
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="https://res.cloudinary.com/da3wjnlzg/image/upload/v1694711283/favicons-food/u0zffbpigdnmowvhk6it.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://res.cloudinary.com/da3wjnlzg/image/upload/v1694711282/favicons-food/nty2ublqmethndjk9xfy.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://res.cloudinary.com/da3wjnlzg/image/upload/v1694711283/favicons-food/mdtafkz1jeoqebtgrxqx.png">
<link rel="manifest" href="http://res.cloudinary.com/da3wjnlzg/raw/upload/v1694711284/favicons-food/gd3r2ivcidqsaz1i3b6d.webmanifest">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
        <!-- overlay -->
        <div id="sidebar-overlay" class="overlay w-100 vh-100 position-fixed d-none"></div>

        <!-- sidebar -->
        <div class="col-md-3 col-lg-2 px-0 position-fixed h-100 bg-white shadow-sm sidebar" id="sidebar">
        <h1 class="bi bi-bootstrap text-primary d-flex my-4 justify-content-center"></h1>
        <div class="list-group rounded-0">
            <a href="index.php" class="list-group-item list-group-item-action border-0 d-flex align-items-center">
            <span class="bi bi-border-all"></span>
            <span class="ml-2">Dashboard</span>
            </a>
            <a href="products.php" class="list-group-item list-group-item-action active border-0 align-items-center">
            <span class="bi bi-box"></span>
            <span class="ml-2">Products</span>
            </a>

            <a href="orders.php" class="list-group-item list-group-item-action border-0 align-items-center">
            <div>
                <span class="bi bi-cart-dash"></span>
                <span class="ml-2">Orders</span>
            </div>
            </a>

            <a href="customer.php" class="list-group-item list-group-item-action border-0 align-items-center">
            <div>
                <span class="bi bi-cart-dash"></span>
                <span class="ml-2">Customers</span>
            </div>
            </a>

            <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#purchase-collapse">
            
        </div>
        </div>

        <div class="col-md-9 col-lg-10 ml-md-auto px-0 ms-md-auto">
        <!-- top nav -->
        <nav class="w-100 d-flex px-4 py-2 mb-4 shadow-sm">
            <!-- close sidebar -->
            <button class="btn py-0 d-lg-none" id="open-sidebar">
            <span class="bi bi-list text-primary h3"></span>
            </button>
            <div class="dropdown ml-auto">
            <button class="btn py-0 d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
                <span class="bi bi-person text-primary h4"></span>
                <span class="text-primary h4"><?php echo $_SESSION['admin'] ?></span>
                <span class="bi bi-chevron-down ml-1 mb-2 small"></span>
            </button>
            <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
                <a class="dropdown-item" href="#">Logout</a>
                <a class="dropdown-item" href="#">Settings</a>
            </div>
            </div>
        </nav>

        <!-- main content -->
        <main class="p-4 min-vh-100">
            <section class="row">
            <div class="col-md-6 col-lg-4">
                <!-- card -->
                <article class="p-4 rounded shadow-sm border-left mb-4 mysel2" style="background-color: #007bff;">
                <a href="products.php" class="d-flex align-items-center">
                    <span class="bi bi-box h5 " style="color: white;"></span>
                    <h5 class="ml-2"  style="color: white;">Products</h5>
                </a>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="p-4 rounded shadow-sm border-left mb-4 mysel">
                <a href="customer.php" class="d-flex align-items-center">
                    <span class="bi bi-person h5"></span>
                    <h5 class="ml-2">Customers</h5>
                </a>
                </article>
            </div>
            <!-- <div class="col-md-6 col-lg-4">
                <article class="p-4 rounded shadow-sm border-left mb-4">
                <a href="#" class="d-flex align-items-center">
                    <span class="bi bi-person-check h5"></span>
                    <h5 class="ml-2">Customers</h5>
                </a>
                </article>
            </div> -->
            </section>

            <div class="jumbotron jumbotron-fluid rounded bg-white border-0 shadow-sm border-left px-4">
            <div class="container">
                <h1 class="display-4 mb-2 text-primary">Simple</h1>
                <p class="lead text-muted">Admin Dashboard</p>
            </div>
            </div>
        </main>
        </div>
</body>
<script src="js/js.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</html>