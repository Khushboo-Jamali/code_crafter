<?php include "header.php" ?>

<?php
if (isset($_GET['msg'])) {
    echo $_GET['msg'];
}
?>

<form action="function.php" method="post">
    <div class="mb-3">
        <label for="" class="form-label">First Name</label>
        <input
            type="text"
            class="form-control"
            name="fname"
            id="" />

    </div>

    <div class="mb-3">
        <label for="" class="form-label">Last Name</label>
        <input
            type="text"
            class="form-control"
            name="lname"
            id="" />

    </div>

    <div class="mb-3">
        <label for="" class="form-label">certification</label>
        <textarea class="form-control" name="certification" id="" rows="3"></textarea>
    </div>


    <div class="mb-3">
        <label for="" class="form-label">phone </label>
        <input
            type="number"
            class="form-control"
            name="phone"
            id="" />

    </div>

    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input
            type="email"
            class="form-control"
            name="email"
            id="" />

    </div>


    <button
        type="submit"
        class="btn btn-primary"
        name="add_emt">
        Submit
    </button>

    <a href="view_emt.php" class="btn btn-primary">Go to list</a>


</form>

<?php include "footer.php" ?>