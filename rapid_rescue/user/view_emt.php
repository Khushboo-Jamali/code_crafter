<?php include "header.php"; ?>
<?php
include "config.php";
$sql = "SELECT * FROM emt";
$res = mysqli_query($conn, $sql);

?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Emt Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Certification</th>
      <th scope="col">Contact</th>
      <th scope="col">Email</th>

    </tr>
  </thead>
  <tbody>
    <?php
    while ($data = mysqli_fetch_array($res)) {
    ?>
      <tr>
        <td><?php echo $data['emt_id'] ?></td>
        <td><?php echo $data['first_name'] ?></td>
        <td><?php echo $data['last_name'] ?></td>
        <td><?php echo $data['certification'] ?></td>
        <td><?php echo $data['phonenumber'] ?></td>
        <td><?php echo $data['email'] ?></td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>

<?php include "footer.php"; ?>