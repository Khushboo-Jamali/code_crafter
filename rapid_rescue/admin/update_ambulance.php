<?php include "header.php"; ?>

<?php
$id = $_GET['id'];
$sel = "SELECT * FROM ambulances WHERE ambulance_id = '$id'";
$res = mysqli_query($conn, $sel);
?>
<h1>Add Ambulance</h1>
<form action="function.php" method="post">
  <?php
  while ($data = mysqli_fetch_array($res)) {
  ?>

    <div class="row mb-3">
      <input type="hidden" name="id" value="<?php echo $data['ambulance_id'] ?>">
      <label for="inputText" class="col-sm-2 col-form-label">Vehicle number</label>
      <div class="col-sm-10">
        <input type="text" name="vnumber" class="form-control" value="<?php echo $data['vehicle_number'] ?>">
      </div>
    </div>



    <div class="row mb-3">

      <div class="col-sm-10">
        <button type="submit" name="up_ambu" class="btn btn-primary">Update Ambulance</button>


      </div>
    </div>
  <?php
  }
  ?>
</form>
<?php include "footer.php"; ?>