<?php include "header.php"; ?>
<?php
include "config.php";
if (isset($_GET['msg'])) {
  echo $_GET['msg'];
}


if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $status = $_GET['stt'];
  if ($status == "Active") {
    $ambulance = "UPDATE ambulances SET `current_status` = 'Deactive' WHERE ambulance_id = '$id'";
  } else {
    $ambulance = "UPDATE ambulances SET `current_status `= 'Active' WHERE ambulance_id = '$id'";
  }
  if (mysqli_query($conn, $ambulance) == true) {
    header("location:view_ambulance.php?msg=status update successfully");
  } else {
    header("location:view_ambulance.php?msg=status not update successfully");
  }
}
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Ambulance_id</th>
      <th scope="col">Vehicle_number</th>
      <th scope="col">Equipment_level</th>
      <th scope="col">Current_status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM ambulances";
    $res = mysqli_query($conn, $sql);
    $num = 1;
    while ($data = mysqli_fetch_array($res)) {
    ?>
      <tr>
        <td><?php echo $num ?></td>
        <td><?php echo $data['vehicle_number'] ?></td>
        <td><?php echo $data['equipment_level'] ?></td>
        <td><?php echo $data['current_status'] ?></td>


        <td>
          <a href="function.php?edit=<?php echo $data['ambulance_id'] ?>&stt=<?php echo $data['current_status'] ?>"> <i class="bi bi-trash-fill text-danger"></i></a>
          <a href="update_ambulance.php?id=<?php echo $data['ambulance_id'] ?>"><i class="bx bxs-edit text-success"></i></a>
          <a href="add_ambulance.php"> <i class="bx bxs-pencil"></i></a>
        </td>
      </tr>
    <?php
      $num++;
    }
    ?>
  </tbody>
</table>

<?php include "footer.php"; ?>