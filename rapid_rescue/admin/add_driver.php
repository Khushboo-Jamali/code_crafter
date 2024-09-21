<?php include "header.php"; ?>
<h1>Add Driver</h1>
<?php
if (isset($_GET['msg'])) {
  echo $_GET['msg'];
}
?>
<form action="function.php" method="post">
  <div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" name="lname" class="form-control">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">phone number</label>
    <div class="col-sm-10">
      <input type="number" name="phone" class="form-control">
    </div>
  </div>



  <div class="row mb-3">

    <div class="col-sm-10">
      <button type="submit" name="driver" class="btn btn-primary">Submit Form</button>
      <a href="view_driver.php" class="btn btn-primary">Go to list</a>
    </div>
  </div>

</form>
<?php include "footer.php"; ?>