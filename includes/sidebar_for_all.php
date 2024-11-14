<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" id="navbar">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-uppercase">
            <li class="nav-item">
                <a class="nav-link active text-light" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="shop.php">Marketplace</a>
            </li>
            <?php if (!isset($_SESSION['customer_email'])): ?>
                <li class="nav-item"><a class="nav-link text-light" href="checkout.php">My Account</a></li>
            <?php else: ?>
                <li class="nav-item"><a class="nav-link text-light" href="customer/my_account.php?my_orders">My Account</a></li>
            <?php endif ?>
            <li class="nav-item">
                <a class="nav-link text-light" href="cart.php">Shopping Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="services.php">Services</a>
            </li>
        </ul>

        <!-- Cart Button -->
        <a href="cart.php" class="btn btn-warning ms-3"><i class="fas fa-shopping-cart"></i><span> <?php echo $getFromU->count_product_by_ip($ip_add); ?> items in Cart</span></a>

        <!-- Search Form -->
        <form class="d-flex ms-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="user_query" required="1">
            <button class="btn btn-outline-light" type="submit" name="search">Search</button>
        </form>
    </div>
</nav>