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
      <th scope="col">Ambulance Id</th>
      <th scope="col">Vehicle Number</th>
      <th scope="col">Equipment Level</th>
      <th scope="col">Status</th>



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
        <td><?php echo $data['ambulance_id'] ?></td>
        <td><?php echo $data['vehicle_number'] ?></td>
        <td><?php echo $data['equipment_level'] ?></td>
        <td><?php echo $data['current_status'] ?></td>
      </tr>
    <?php
      $num++;
    }




    ?>
  </tbody>
</table>


<?php include "footer.php"; ?>