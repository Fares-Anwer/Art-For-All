<?php
$customer_email = $_SESSION['customer_email'];

$get_customer = $getFromU->view_customer_by_email($customer_email);

$customer_id = $get_customer->customer_id;
$customer_name = $get_customer->customer_name;
$customer_country = $get_customer->customer_country;
$customer_contact = $get_customer->customer_contact;
$customer_image = $get_customer->customer_image;


// $customer_id = $get_customerID_by_email($_SESSION['customer_email']);


$get_products = $getFromU->viewAllFromTable("artwork;");
$count_products = count($get_products);

$count_sell_products = $getFromU->count_product_by_status("Complete");


?>





<!-- START PAGE CONTENT-->
<div class="page-heading">
    <h1 class="page-title">PROFILE</h1>
</div>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </ol>
</nav>

<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-lg-3 col-md-4">
            <div class="ibox rounded">
                <div class="ibox-body text-center">
                    <div class="mt-2"><img class="img-fluid rounded" src="assets/customer_images/<?php echo $customer_image; ?>" /></div>
                    <h5 class="font-strong m-b-10 m-t-10"><?php echo $customer_name; ?></h5>
                    <div class="m-b-20 text-muted">Artist</div>
                    <div class="profile-social m-b-20">
                        <a href="javascript:;"><i class="fab fa-twitter"></i></a>
                        <a href="javascript:;"><i class="fab fa-facebook"></i></a>
                        <a href="javascript:;"><i class="fab fa-pinterest"></i></a>
                        <a href="javascript:;"><i class="fab fa-dribbble"></i></a>
                    </div>
                    <div class="text-left">
                        <p><i class="fas fa-envelope"></i> Email : <?php echo $customer_email; ?></p>
                        <p><i class="fas fa-globe"></i> Country : <?php echo $customer_country; ?></p>
                        <p><i class="fas fa-phone-square"></i> Phone No : <?php echo $customer_contact; ?></p>
                    </div>
                </div>
            </div>
            <div class="ibox rounded">
                <div class="ibox-body">
                    <div class="row text-center m-b-20">
                        <div class="col-4">
                            <div class="font-24 profile-stat-count"><?php echo $count_products; ?></div>
                            <div class="text-muted">Products</div>
                        </div>
                        <div class="col-4">
                            <div class="font-24 profile-stat-count"><?php echo $count_sell_products; ?></div>
                            <div class="text-muted">Sales</div>
                        </div>
                        <div class="col-4">
                            <div class="font-24 profile-stat-count"><?php echo $count_products - $count_sell_products; ?></div>
                            <div class="text-muted">Remainig</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-8">
            <div class="ibox rounded">
                <div class="ibox-body">
                    <ul class="nav nav-tabs tabs-line">
                        <li class="nav-item">
                            <a class="nav-link active" href="#tab-1" data-toggle="tab"><i class="ti-bar-chart"></i> Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tab-2" data-toggle="tab"><i class="ti-settings"></i> Difficulties</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tab-3" data-toggle="tab"><i class="ti-announcement"></i> Feeds</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-1">
                            <div class="row">
                                <div class="col-md-6" style="border-right: 1px solid #eee;">
                                    <h5 class="text-info m-b-20 m-t-10"><i class="fa fa-bar-chart"></i> Month Statistics</h5>
                                    <div class="h2 m-0">$12,400<sup>.60</sup></div>
                                    <div><small>Month income</small></div>
                                    <div class="m-t-20 m-b-20">
                                        <div class="h4 m-0">120</div>
                                        <div class="d-flex justify-content-between"><small>Month income</small>
                                            <span class="text-success font-12"><i class="fa fa-level-up"></i> +24%</span>
                                        </div>
                                        <div class="progress m-t-5">
                                            <div class="progress-bar progress-bar-success" role="progressbar" style="width:50%; height:5px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="m-b-20">
                                        <div class="h4 m-0">86</div>
                                        <div class="d-flex justify-content-between"><small>Month income</small>
                                            <span class="text-warning font-12"><i class="fa fa-level-down"></i> -12%</span>
                                        </div>
                                        <div class="progress m-t-5">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" style="width:50%; height:5px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-full list-group-divider">
                                        <li class="list-group-item">Projects
                                            <span class="pull-right color-orange">15</span>
                                        </li>
                                        <li class="list-group-item">Tasks
                                            <span class="pull-right color-orange">148</span>
                                        </li>
                                        <li class="list-group-item">Articles
                                            <span class="pull-right color-orange">72</span>
                                        </li>
                                        <li class="list-group-item">Friends
                                            <span class="pull-right color-orange">44</span>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="tab-2">
                            <form action="javascript:void(0)">
                                <h3 class="text-center">Share Your Story</h3>
                                <p class="text-muted text-center">Your story can inspire others. Share the challenges you faced and how you overcame them.</p>

                                <div class="form-group">
                                    <label>Your Full Name</label>
                                    <input class="form-control" type="text" placeholder="Enter your full name">
                                </div>

                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="form-control" type="email" placeholder="Enter your email address">
                                </div>

                                <div class="form-group">
                                    <label>The Challenges You Faced</label>
                                    <textarea class="form-control" rows="4" placeholder="Describe the challenges you faced"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>How You Overcame the Challenges</label>
                                    <textarea class="form-control" rows="4" placeholder="Explain how you overcame those challenges"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Your Message to Others</label>
                                    <textarea class="form-control" rows="3" placeholder="Share your message with visitors"></textarea>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary" type="button">Submit Your Story</button>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="tab-3">
                            <h5 class="text-info m-b-20 m-t-20"><i class="fa fa-bullhorn"></i> Latest Feeds</h5>
                            <ul class="media-list media-list-divider m-0">
                                <li class="media">
                                    <div class="media-img"><i class="ti-user font-18 text-muted"></i></div>
                                    <div class="media-body">
                                        <div class="media-heading">New customer <small class="float-right text-muted">12:05</small></div>
                                        <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-img"><i class="ti-info-alt font-18 text-muted"></i></div>
                                    <div class="media-body">
                                        <div class="media-heading text-warning">Server Warning <small class="float-right text-muted">12:05</small></div>
                                        <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-img"><i class="ti-announcement font-18 text-muted"></i></div>
                                    <div class="media-body">
                                        <div class="media-heading">7 new feedback <small class="float-right text-muted">Today</small></div>
                                        <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-img"><i class="ti-check font-18 text-muted"></i></div>
                                    <div class="media-body">
                                        <div class="media-heading text-success">Issue fixed <small class="float-right text-muted">12:05</small></div>
                                        <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-img"><i class="ti-shopping-cart font-18 text-muted"></i></div>
                                    <div class="media-body">
                                        <div class="media-heading">7 New orders <small class="float-right text-muted">12:05</small></div>
                                        <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-img"><i class="ti-reload font-18 text-muted"></i></div>
                                    <div class="media-body">
                                        <div class="media-heading text-danger">Server warning <small class="float-right text-muted">12:05</small></div>
                                        <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .profile-social a {
            font-size: 16px;
            margin: 0 10px;
            color: #999;
        }

        .profile-social a:hover {
            color: #485b6f;
        }

        .profile-stat-count {
            font-size: 22px
        }
    </style>
</div>
<!-- END PAGE CONTENT-->