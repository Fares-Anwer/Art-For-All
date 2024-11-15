<?php require_once 'includes/header.php'; ?>

<nav class="navbar navbar-expand-lg  navbar-light bg-dark sticky-top" id="navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto text-light text-uppercase">
            <li>
                <a class="nav-link text-light" href="index.php">Home </a>
            </li>
            <li>
                <a class="nav-link text-light" href="../shop.php">Marketplace</a>
            </li>
            <?php if (!isset($_SESSION['customer_email'])): ?>
                <li><a class="nav-link text-light" href="../checkout.php">My Account</a></li>
            <?php else: ?>
                <li><a class="nav-link text-light" href="../customer/my_account.php?my_orders">My Account</a></li>
            <?php endif ?>
            <li>
                <a class="nav-link text-light" href="../cart.php">Shopping Cart</a>
            </li>
            <li>
                <a class="nav-link text-light" href="../contact.php">Contact Us</a>
            </li>
            <li>
                <a class="nav-link text-light" class="active" href="../about.php">About Us</a>
            </li>
            <li>
                <a class="nav-link text-light" href="../services.php">Services</a>
            </li>
        </ul>

        <a class="nav-link text-light" href="../cart.php" class="btn btn-success mr-2"><i class="fas fa-shopping-cart"></i><span> <?php echo $getFromU->count_product_by_ip($ip_add); ?> items in Cart</span></a>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="user_query" required="1">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button>
        </form>
    </div>
</nav>