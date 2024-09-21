<?php include "header.php"; ?>
<?php

include "config.php";
// $sql = "SELECT doctors.*, cities.city_name, departments.dept_name FROM doctors
// INNER JOIN cities ON doctors.cityid=cities.id
// INNER JOIN departments ON doctors.deptid=departments.id
// ";
// $sql = "SELECT * FROM driver";
// $res = mysqli_query($conn, $sql);

?>
<?php
if (isset($_GET['msg'])) {
  echo $_GET['msg'];
}
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Drive Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>


      <th scope="col">Contact</th>
      <th scope="col">Status</th>

      <th scope="col">Actions</th>



    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM drivers";
    $res = mysqli_query($conn, $sql);
    $num = 1;
    while ($data = mysqli_fetch_array($res)) {
    ?>
      <tr>
        <td><?php echo $num ?></td>
        <td><?php echo $data['first_name'] ?></td>
        <td><?php echo $data['last_name'] ?></td>
        <td><?php echo $data['phonenumber'] ?></td>
        <td><?php echo $data['STATUS'] ?></td>


        <td>
          <a href="function.php?Did=<?php echo $data['driver_id'] ?>&status=<?php echo $data['STATUS'] ?>"> <i class="bi bi-trash-fill text-danger"></i></a>
          <a href="update_driver.php?id=<?php echo $data['driver_id'] ?>"><i class="bx bxs-edit text-success"></i></a>
          <a href="add_driver.php"> <i class="bx bxs-pencil"></i></a>
        </td>
      </tr>
    <?php
      $num++;
    }




    ?>
  </tbody>
</table>


<?php include "footer.php"; ?>