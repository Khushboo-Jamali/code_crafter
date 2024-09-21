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
        <td><?php echo $num?></td>
        <td><?php echo $data['first_name'] ?></td>
        <td><?php echo $data['last_name'] ?></td>
        <td><?php echo $data['phonenumber'] ?></td>
        <td><?php echo $data['STATUS'] ?></td>
      </tr>
    <?php
      $num++;
    }




    ?>
  </tbody>
</table>


<?php include "footer.php"; ?>