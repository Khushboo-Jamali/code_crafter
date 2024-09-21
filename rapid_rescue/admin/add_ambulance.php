<?php include "header.php"; ?>
<h1>Add Ambulance</h1>
<form action="function.php" method="post">
  <div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Vehicle number</label>
    <div class="col-sm-10">
      <input type="text" name="vnumber" class="form-control">
    </div>
  </div>



  <div class="row mb-3">

    <div class="col-sm-10">
      <button type="submit" name="addambu" class="btn btn-primary">Add ambulance</button>
      <a href="view_ambulance.php" class="btn btn-primary">Go to list</a>
      <?php
      if (isset($_GET['msg'])) {
        echo $_GET['msg'];
      }
      ?>
    </div>
  </div>

</form>
<?php include "footer.php"; ?>