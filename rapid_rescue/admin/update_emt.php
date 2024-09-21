<?php include "header.php"; ?>
<?php
include "config.php";
$id = $_GET['id'];
$sel = "SELECT * FROM emt WHERE emt_id = '$id'";
$res = mysqli_query($conn, $sel);

?>
<h1>Update Record</h1>
<?php
if (isset($_GET['msg'])) {
    echo $_GET['msg'];
}
?>
<form action="function.php" method="post">
    <?php
    while ($data = mysqli_fetch_assoc($res)) {
    ?>

        <div class="row mb-3">
            <input type="hidden" name="id" value="<?php echo $data['emt_id'] ?>">
            <label for="inputText" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
                <input type="text" name="fname" class="form-control" value="<?php echo $data['first_name'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
                <input type="text" name="lname" class="form-control" value="<?php echo $data['last_name'] ?>">
            </div>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Certification</label>
            <textarea class="form-control" name="certification" id="" rows="1"><?php echo $data['certification'] ?></textarea>
        </div>



        <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
                <input type="number" name="phone" class="form-control" value="<?php echo $data['phonenumber'] ?>">
            </div>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input
                type="email"
                class="form-control"
                name="email" id="" value="<?php echo $data['email'] ?>" />
        </div>

        <div class="row mb-3">

            <div class="col-sm-10">
                <button type="submit" name="up_emt" class="btn btn-primary">Submit Form</button>
            </div>
        </div>
    <?php
    }
    ?>
</form>
<?php include "footer.php"; ?>