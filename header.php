<?php 
  session_start();
  
  include("admin/db_connection.php");
    
    $categorySql = "SELECT * from category where status = 1";
    $categoryResult = $conn->query($categorySql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NAINA SILKS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/Favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<div>
    <p> <br> </p>
</div>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light mb-30">
        <div class="row px-xl-4">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="navbar-brand" href="index.php"><img src="img/nainalogo1.png" height="90px" width="100px"
                        class="logo" alt="logo"></a>
                <a href="" class="text-decoration-none">
                    <span class="h2 text-uppercase text-primary bg-dark px-2">NAINA</span>
                    <span class="h2 text-uppercase text-dark bg-primary px-1 ml-n1">Silks</span>
                </a>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-2 px-5">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">NAINA</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">SILKS</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-lg-2">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categories <i
                                        class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <?php while($categoryRow = $categoryResult->fetch_assoc()) { ?>
                                        <a href="shop/<?php echo $categoryRow['category_id']; ?>" class="dropdown-item"><?php echo $categoryRow['cat_name']; ?></a>
                                    <?php } ?>
                                    
                                    <!-- <a href="jewellery.php" class="dropdown-item">Jewellery</a>
                                    <a href="candles.php" class="dropdown-item">Candles</a> -->
                                </div>
                            </div>
                            <!-- <a href="detail.php" class="nav-item nav-link">Shop Detail</a> -->
                            <a href="aboutus.php" class="nav-item nav-link">About Us</a>
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i
                                        class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="cart.php" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.php" class="dropdown-item">Checkout</a>
                                </div>
                            </div> -->

                        </div>
                        <a href="contact.php" class="nav-item nav-link active">Contact</a>
                        <!-- <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle"
                                    style="padding-bottom: 2px;">0</span>
                            </a> -->
                        <!-- <a href="" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle"
                                    style="padding-bottom: 2px;">0</span>
                            </a> -->

                    </div>
                </nav>
            </div>
        </div>
    </div>