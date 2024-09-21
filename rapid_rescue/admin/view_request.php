<?php include "header.php"; ?>
<?php
include "config.php";
$sql = "SELECT * FROM emergencyrequests";
$res = mysqli_query($conn, $sql);


?>
<?php
if (isset($_GET['msg'])) {
  echo $_GET['msg'];
}
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Request Id</th>
      <th scope="col">User Id</th>
      <th scope="col">Current Time</th>
      <th scope="col">Status</th>

      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
    while ($data = mysqli_fetch_array($res)) {
    ?>
      <tr>
        <td><?php echo $data['request_id'] ?></td>
        <td><?php echo $data['user_id'] ?></td>
        <td><?php echo $data['request_time'] ?></td>
        <td><?php echo $data['status'] ?></td>
        <td>
          <a href="function.php?id=<?php echo $data['request_id'] ?>&status=<?php echo $data['status'] ?>"> <i class="bi bi-trash-fill text-danger"></i></a>
          <a href="update_request.php?id=<?php echo $data['request_id'] ?>"><i class="bx bxs-edit text-success"></i></a>

        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>

<?php include "footer.php"; ?>