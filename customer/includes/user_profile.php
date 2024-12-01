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

if (isset($_POST['overview'])) {
    $customer_disability = $_POST['disability'];
    $biography = $_POST['biography'];

    $update_customer = $getFromU->update_customer("customers", $customer_id, array("disability_id" => $customer_disability, "biography" => $biography));
    if ($update_customer) {
        echo '<script>alert("overview has been added Sucessfully")</script>';
        echo '<script>window.open("my_account.php?usr_profile", "self")</script>';
    } else {
        echo '<script>alert("overview has not added")</script>';
    }
}
if (isset($_POST['submit_challenges'])) {
    $customer_challenges = $_POST['challenges'];
    $customer_solutions = $_POST['solutions'];

    $update_customer = $getFromU->update_customer("customers", $customer_id, array("difficulties" => $customer_challenges, "overcame" => $customer_solutions));
    if ($update_customer) {
        echo '<script>alert("difficulties has been added Sucessfully")</script>';
        echo '<script>window.open("my_account.php?usr_profile", "self")</script>';
    } else {
        echo '<script>alert("difficulties has not added")</script>';
    }
}
if (isset($_POST['submit_message'])) {
    $customer_goal = $_POST['message'];

    $update_customer = $getFromU->update_customer("customers", $customer_id, array("goal" => $customer_goal));
    if ($update_customer) {
        echo '<script>alert("Your Message has been added Sucessfully")</script>';
        echo '<script>window.open("my_account.php?usr_profile", "self")</script>';
    } else {
        echo '<script>alert("Your Message has not added")</script>';
    }
}





?>





<!-- START PAGE CONTENT-->
<div class="page-heading">
    <h1 class="page-title">PROFILE</h1>
</div>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="my_account.php"><i class="fas fa-tachometer-alt"></i> My account</a></li>
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </ol>
</nav>

<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-lg-4 col-md-5">
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
        <div class="col-lg-8 col-md-7">
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
                                <div class="col-md-12">
                                    <?php
                                    // جلب البيانات من قاعدة البيانات
                                    $status_of_profile = $getFromU->view_customer_by_id($customer_id);
                                    $customer_biography = $status_of_profile->biography;

                                    // شرط إذا كانت السيرة الذاتية غير موجودة
                                    if ($customer_biography == null):
                                    ?>
                                        <form method="post" class="needs-validation" novalidate>

                                            <h5 class="text-info m-b-20 m-t-10">
                                                <i class="fa fa-user"></i> About the Artist
                                            </h5>

                                            <!-- Type of Disability -->
                                            <div class="form-group">
                                                <label for="disability-type">Type of Disability</label>
                                                <select name="disability" class="form-control" id="disability-type" required>
                                                    <option value="" disabled selected>Select your disability</option>
                                                    <?php
                                                    $disabilitys = $getFromU->viewAllFromTable("disability");
                                                    foreach ($disabilitys as $disability) {
                                                        $disability_id = $disability->disability_id;
                                                        $disability_type = $disability->disability_type;
                                                    ?>
                                                        <option value="<?php echo $disability_id; ?>"><?php echo $disability_type; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <!-- Biography Section -->
                                            <div class="form-group">
                                                <label for="artist-biography">Biography</label>
                                                <textarea name="biography" class="form-control" id="artist-biography" rows="6" placeholder="Write about how your love for art began, your journey, and the challenges you faced." required></textarea>
                                            </div>

                                            <div class="form-group">
                                                <button name="overview" class="btn btn-primary" type="submit"><i class="fas fa-plus-circle"></i>Add</button>
                                            </div>
                                        </form>

                                    <?php else: ?>
                                        <h5 class="text-info m-b-20 m-t-10">
                                            <i class="fa fa-user"></i> Artist Information
                                        </h5>

                                        <p><strong>Type of Disability:</strong>
                                            <?php
                                            $status_of_profile = $getFromU->view_customer_by_id($customer_id);
                                            $customer_biography = $status_of_profile->biography;
                                            $disability_id = $status_of_profile->disability_id;

                                            $disability_info = $getFromU->view_disability_by_id($disability_id);
                                            $the_disability_type = $disability_info->disability_type;
                                            echo $the_disability_type;
                                            ?>
                                        </p>

                                        <p><strong>Biography:</strong></p>
                                        <p><?php echo nl2br(htmlspecialchars($customer_biography)); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="tab-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                    // جلب بيانات التحديات من قاعدة البيانات
                                    $status_of_profile = $getFromU->view_customer_by_id($customer_id);
                                    $customer_challenges = $status_of_profile->difficulties;
                                    $customer_solutions = $status_of_profile->overcame;

                                    // شرط إذا لم يتم إدخال التحديات والحلول
                                    if ($customer_challenges == null && $customer_solutions == null):
                                    ?>
                                        <h5 class="text-info m-b-20 m-t-10">
                                            <i class="fa fa-exclamation-triangle"></i> Challenges
                                        </h5>

                                        <p class="text-muted">Share the challenges you faced as a person with disabilities and how you overcame them. This can help visitors and build a human connection.</p>

                                        <form method="post" class="needs-validation" novalidate>
                                            <!-- Challenges Faced -->
                                            <div class="form-group">
                                                <label for="artist-challenges">Challenges Faced</label>
                                                <textarea name="challenges" class="form-control" id="artist-challenges" rows="6" placeholder="Describe the challenges you encountered." required></textarea>
                                            </div>

                                            <!-- How You Overcame Them -->
                                            <div class="form-group">
                                                <label for="artist-solutions">How You Overcame Them</label>
                                                <textarea name="solutions" class="form-control" id="artist-solutions" rows="6" placeholder="Explain how you overcame these challenges." required></textarea>
                                            </div>

                                            <div class="form-group">
                                                <button name="submit_challenges" class="btn btn-primary" type="submit"><i class="fas fa-plus-circle"></i> Add</button>
                                            </div>
                                        </form>

                                    <?php else: ?>
                                        <h5 class="text-info m-b-20 m-t-10">
                                            <i class="fa fa-exclamation-triangle"></i> Your Challenges and Solutions
                                        </h5>

                                        <p><strong>Challenges Faced:</strong></p>
                                        <p><?php echo nl2br(htmlspecialchars($customer_challenges)); ?></p>

                                        <p><strong>How You Overcame Them:</strong></p>
                                        <p><?php echo nl2br(htmlspecialchars($customer_solutions)); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="tab-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                    // جلب بيانات الرسالة أو الهدف من قاعدة البيانات
                                    $status_of_profile = $getFromU->view_customer_by_id($customer_id);
                                    $customer_goal = $status_of_profile->goal;

                                    // شرط إذا لم يتم إدخال الرسالة أو الهدف
                                    if ($customer_goal == null):
                                    ?>
                                        <h5 class="text-info m-b-20 m-t-10">
                                            <i class="fa fa-bullseye"></i> Artist's Message or Goal
                                        </h5>

                                        <p class="text-muted">Write a motivational message or express your goal in art. For example, "My dream is to showcase my art to the world."</p>

                                        <form method="post" class="needs-validation" novalidate>
                                            <!-- Message or Goal -->
                                            <div class="form-group">
                                                <label for="artist-message">Your Message or Goal</label>
                                                <textarea name="message" class="form-control" id="artist-message" rows="6" placeholder="Write your message or goal here." required></textarea>
                                            </div>

                                            <div class="form-group">
                                                <button name="submit_message" class="btn btn-primary" type="submit"><i class="fas fa-plus-circle"></i> Add</button>
                                            </div>
                                        </form>

                                    <?php
                                    else:
                                        // إذا كانت الرسالة أو الهدف موجودة بالفعل
                                    ?>
                                        <h5 class="text-info m-b-20 m-t-10">
                                            <i class="fa fa-bullseye"></i> Your Message or Goal
                                        </h5>

                                        <p><strong>Your Message:</strong></p>
                                        <p><?php echo nl2br(htmlspecialchars($customer_goal)); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
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