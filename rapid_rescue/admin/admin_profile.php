<?php include "header.php";
include "config.php";
// if (session_status() == PHP_SESSION_NONE) {
//     session_start();
// }
?>
<?php

$id = $_SESSION['userId'];
$sel = "SELECT * FROM users WHERE user_id = '$id'" ;
$res = mysqli_query($conn, $sel);

while ($data = mysqli_fetch_array($res)) {
    $_SESSION['userId'] = $data['user_id'];
    $_SESSION['userpic'] = $data['pic'];
    $_SESSION['firstname'] = $data['firstname'];
    $_SESSION['lastname'] = $data['lastname'];
    $_SESSION['address'] = $data['address'];
    $_SESSION['phone'] = $data['phonenumber'];
    $_SESSION['email'] = $data['email'];


// if (isset($_POST["up_user"])) {
//     $userId = $_POST["user_id"];
//     $fname = $_POST["fName"];
//     $lname = $_POST["lName"];
//     $email = $_POST["email"];
//     $phone = $_POST["phone"];
//     $img_name = $_FILES["img"]["name"];
//     $tmp_name = $_FILES["img"]["tmp_name"];
//     $folder = "images/" . $img_name;
//     if ($img_name) {
//         move_uploaded_file($tmp_name, $folder);
//         $query = "UPDATE `users` SET `firstname`='$fname',`lastname`='$lname',`email`='$email',`phonenumber`='$phone', `pic`='$folder'WHERE  `user_id` = $userId";
//         mysqli_query($conn, $query);
//     } else {
//         $query = "UPDATE `users` SET `firstname`='$fname',`lastname`='$lname',`email`='$email',`phonenumber`='$phone' WHERE  `user_id` = $userId";
//         mysqli_query($conn, $query);
//     }
// }
?>

<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    <img src="<?php echo $_SESSION['userpic'] ?>" alt="Profile" class="rounded-circle">
                    <h2><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname'] ?></h2>
                    <h3>User</h3>
                    <div class="social-links mt-2">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                        </li>


                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">chane password</button>
                        </li>


                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">

                            <h5 class="card-title">Profile Details</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">First Name</div>
                                <div class="col-lg-9 col-md-8"><?php echo $data['firstname'] ?></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Last Name</div>
                                <div class="col-lg-9 col-md-8"><?php echo $_SESSION['lastname'] ?></div>
                            </div>



                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Address</div>
                                <div class="col-lg-9 col-md-8"><?php echo $_SESSION['address'] ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Phone</div>
                                <div class="col-lg-9 col-md-8"><?php echo $_SESSION['phone'] ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8"><?php echo $_SESSION['email'] ?></div>
                            </div>

                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                            <!-- Profile Edit Form -->
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                    <div class="col-md-8 col-lg-9">
                                        <img src="<?php echo $_SESSION['userpic']; ?>" alt="Profile">
                                        <div class="pt-2">
                                            <input type="file" name="img" class="btn btn-primary btn-sm" title="Upload new profile image">
                                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-8 col-lg-9">
                                        <input name="user_id" type="number" style=" visibility: hidden;" class="form-control" id="id" value="<?php echo $_SESSION['userId'] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="fName" type="text" class="form-control" id="fullName" value="<?php echo $_SESSION['firstname'] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="lName" type="text" class="form-control" id="fullName" value="<?php echo $_SESSION['lastname'] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="phone" type="text" class="form-control" id="Phone" value="<?php echo $_SESSION['phone'] ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="Email" value="<?php echo $_SESSION['email'] ?>">
                                    </div>
                                </div>



                                <div class="text-center">
                                    <button type="submit" name="up_user" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form><!-- End Profile Edit Form -->

                        </div>

                      

                        <div class="tab-pane fade pt-3" id="profile-change-password">
                            <!-- Change Password Form -->
                            <form>

                                <div class="row mb-3">
                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="password" type="password" class="form-control" id="currentPassword">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                            </form><!-- End Change Password Form -->

                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>
<?php
}
?>
<?php include "footer.php"; ?>