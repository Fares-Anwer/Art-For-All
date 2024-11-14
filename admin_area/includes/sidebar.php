<?php
$admin_email = $_SESSION['admin_email'];

$get_admin = $getFromU->view_admin_by_email($admin_email);

$admin_id = $get_admin->admin_id;
$admin_name = $get_admin->admin_name;
$admin_image = $get_admin->admin_image;

$dashboard = (isset($_GET['dashboard'])) ? 'active' : '';

$products = (isset($_GET['add_product']) || isset($_GET['view_products']) || isset($_GET['edit_product']) || isset($_GET['Unapprove_product'])) ? 'active' : '';
$add_product = (isset($_GET['add_product'])) ? 'active' : '';
$view_products = (isset($_GET['view_products'])) ? 'active' : '';
$unapprove_product = (isset($_GET['Unapprove_product'])) ? 'active' : '';


$cats = (isset($_GET['add_cat']) || isset($_GET['view_cats']) || isset($_GET['edit_cat'])) ? 'active' : '';
$add_cat = (isset($_GET['add_cat'])) ? 'active' : '';
$view_cats = (isset($_GET['view_cats'])) ? 'active' : '';

$slides = (isset($_GET['add_slide']) || isset($_GET['view_slides']) || isset($_GET['edit_slide'])) ? 'active' : '';
$add_slide = (isset($_GET['add_slide'])) ? 'active' : '';
$view_slides = (isset($_GET['view_slides'])) ? 'active' : '';

$view_customers = (isset($_GET['view_customers'])) ? 'active' : '';

$view_orders = (isset($_GET['view_orders'])) ? 'active' : '';

$view_payments = (isset($_GET['view_payments'])) ? 'active' : '';

$users = (isset($_GET['add_user']) || isset($_GET['view_users']) || isset($_GET['edit_user'])) ? 'active' : '';
$add_user = (isset($_GET['add_user'])) ? 'active' : '';
$view_users = (isset($_GET['view_users'])) ? 'active' : '';

$boxes = (isset($_GET['add_box']) || isset($_GET['view_boxes']) || isset($_GET['edit_box'])) ? 'active' : '';
$add_box = (isset($_GET['add_box'])) ? 'active' : '';
$view_boxes = (isset($_GET['view_boxes'])) ? 'active' : '';

$coupons = (isset($_GET['add_coupon']) || isset($_GET['view_coupons']) || isset($_GET['edit_coupon'])) ? 'active' : '';
$add_coupon = (isset($_GET['add_coupon'])) ? 'active' : '';
$view_coupons = (isset($_GET['view_coupons'])) ? 'active' : '';

$services = (isset($_GET['add_service']) || isset($_GET['view_services']) || isset($_GET['edit_service'])) ? 'active' : '';
$add_service = (isset($_GET['add_service'])) ? 'active' : '';
$view_services = (isset($_GET['view_services'])) ? 'active' : '';

$edit_css = (isset($_GET['edit_css'])) ? 'active' : '';

$edit_contact_us = (isset($_GET['edit_contact_us'])) ? 'active' : '';

$edit_about_us = (isset($_GET['edit_about_us'])) ? 'active' : '';

$enquiry_types = (isset($_GET['add_enquiry_type']) || isset($_GET['view_enquiry_types']) || isset($_GET['edit_enquiry_type'])) ? 'active' : '';
$add_enquiry_type = (isset($_GET['add_enquiry_type'])) ? 'active' : '';
$view_enquiry_types = (isset($_GET['view_enquiry_types'])) ? 'active' : '';


?>



<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="./assets/img/users/<?php echo $admin_image; ?>" class="img-fluid img-circle" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong"><?php echo $admin_name; ?></div><small>Administrator</small>
            </div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="<?php echo $dashboard; ?>" href="index.php?dashboard"><i class="sidebar-item-icon fas fa-tachometer-alt"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>

            <li class="heading">FEATURES</li>
            <li class="<?php echo $products; ?>">
                <a href="javascript:;"><i class="sidebar-item-icon fab fa-product-hunt"></i>
                    <span class="nav-label">Products</span><i class="fa fa-angle-left arrow"></i>
                </a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a class="<?php echo $add_product; ?>" href="index.php?add_product"><i class="fas fa-plus-circle"></i> Insert Product</a>
                    </li>
                    <li>
                        <a class="<?php echo $view_products; ?>" href="index.php?view_products"><i class="fas fa-eye"></i> View Approve Products</a>
                    </li>
                    <li>
                        <a class="<?php echo $unapprove_product; ?>" href="index.php?Unapprove_product"><i class="fas fa-eye-slash"></i> View Unapprove Products</a>
                    </li>
                </ul>
            </li>
            <li class="<?php echo $cats; ?>">
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-table"></i>
                    <span class="nav-label">Categories</span><i class="fa fa-angle-left arrow"></i>
                </a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a class="<?php echo $add_cat; ?>" href="index.php?add_cat"><i class="fas fa-plus-circle"></i> Insert Category</a>
                    </li>
                    <li>
                        <a class="<?php echo $view_cats; ?>" href="index.php?view_cats"><i class="fas fa-eye"></i> View Categories</a>
                    </li>
                </ul>
            </li>
            <li class="<?php echo $boxes; ?>">
                <a href="javascript:;"><i class="sidebar-item-icon fas fa-arrows-alt"></i>
                    <span class="nav-label">Boxes</span><i class="fas fa-angle-left arrow"></i>
                </a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a class="<?php echo $add_box; ?>" href="index.php?add_box"><i class="fas fa-plus-circle"></i> Insert Box</a>
                    </li>
                    <li>
                        <a class="<?php echo $view_boxes; ?>" href="index.php?view_boxes"><i class="fas fa-eye"></i> View Boxes</a>
                    </li>

                </ul>
            </li>

            <li class="<?php echo $coupons; ?>">
                <a href="javascript:;"><i class="sidebar-item-icon fas fa-minus-circle"></i>
                    <span class="nav-label">Coupons</span><i class="fas fa-angle-left arrow"></i>
                </a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a class="<?php echo $add_coupon; ?>" href="index.php?add_coupon"><i class="fas fa-plus-circle"></i> Insert Coupon</a>
                    </li>
                    <li>
                        <a class="<?php echo $view_coupons; ?>" href="index.php?view_coupons"><i class="fas fa-eye"></i> View Coupons</a>
                    </li>
                </ul>
            </li>

            <li class="<?php echo $slides; ?>">
                <a href="javascript:;"><i class="sidebar-item-icon fas fa-sliders-h"></i>
                    <span class="nav-label">Slides</span><i class="fa fa-angle-left arrow"></i>
                </a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a class="<?php echo $add_slide; ?>" href="index.php?add_slide"><i class="fas fa-plus-circle"></i> Insert Slide</a>
                    </li>
                    <li>
                        <a class="<?php echo $view_slides; ?>" href="index.php?view_slides"><i class="fas fa-eye"></i> View Slides</a>
                    </li>
                </ul>
            </li>
            <li class="<?php echo $view_customers; ?>">
                <a href="index.php?view_customers"><i class="sidebar-item-icon fas fa-users"></i>
                    <span class="nav-label">View Customers</span>
                </a>
            </li>
            <li class="<?php echo $view_orders; ?>">
                <a href="index.php?view_orders"><i class="sidebar-item-icon fas fa-list-alt"></i>
                    <span class="nav-label">View Orders</span>
                </a>
            </li>
            <li class="<?php echo $view_payments; ?>">
                <a href="index.php?view_payments"><i class="sidebar-item-icon fas fa-money-bill-alt"></i>
                    <span class="nav-label">View Payments</span>
                </a>
            </li>
            <li class="<?php echo $users; ?>">
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-users"></i>
                    <span class="nav-label">Users</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a class="<?php echo $add_user; ?>" href="index.php?add_user"><i class="fas fa-plus-circle"></i> Insert User</a>
                    </li>
                    <li>
                        <a class="<?php echo $view_users; ?>" href="index.php?view_users"><i class="fas fa-eye"></i> View Users</a>
                    </li>

                </ul>
            </li>
            <li class="<?php echo $services; ?>">
                <a href="javascript:;"><i class="sidebar-item-icon fab fa-squarespace"></i>
                    <span class="nav-label">Services</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a class="<?php echo $add_service; ?>" href="index.php?add_service"><i class="fas fa-plus-circle"></i> Insert Service</a>
                    </li>
                    <li>
                        <a class="<?php echo $view_services; ?>" href="index.php?view_services"><i class="fas fa-eye"></i> View Servservice</a>
                    </li>

                </ul>
            </li>
            <li class="<?php echo $edit_contact_us; ?>">
                <a href="index.php?edit_contact_us"><i class="sidebar-item-icon fas fas fa-edit"></i>
                    <span class="nav-label">Update Contact Us</span>
                </a>
            </li>

            <li class="<?php echo $enquiry_types; ?>">
                <a href="javascript:;"><i class="sidebar-item-icon fas fa-question-circle"></i>
                    <span class="nav-label">Enquiry Type</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a class="<?php echo $add_enquiry_type; ?>" href="index.php?add_enquiry_type"><i class="fas fa-plus-circle"></i> Insert Enquiry Type</a>
                    </li>
                    <li>
                        <a class="<?php echo $view_enquiry_types; ?>" href="index.php?view_enquiry_types"><i class="fas fa-eye"></i> View Enquiry Types</a>
                    </li>

                </ul>
            </li>
            <li class="<?php echo $edit_about_us; ?>">
                <a href="index.php?edit_about_us"><i class="sidebar-item-icon fas fas fa-edit"></i>
                    <span class="nav-label">Update About Us</span>
                </a>
            </li>
            <li class="<?php echo $edit_css; ?>">
                <a href="index.php?edit_css"><i class="sidebar-item-icon fas fas fa-pen-alt"></i>
                    <span class="nav-label">Edit CSS</span>
                </a>
            </li>
            <li>
                <a href="logout.php"><i class="sidebar-item-icon fas fa-power-off"></i>
                    <span class="nav-label">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav>