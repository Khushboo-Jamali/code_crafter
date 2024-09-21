<?php  include "header.php";?>
<?php
 include = "config.php";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM add_medical_history WHERE amh_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Past_Disease = $_POST['Pastdisease'];
    $Allergies = $_POST['allergies'];
    $Blood_Group = $_POST['bloodgroup'];

    $update_stmt = $conn->prepare("UPDATE add_medical_history SET name=?, email=?, Past_disease=?, allergies=?, blood_group=? WHERE amh_id=?");
    $update_stmt->bind_param("sssssi", $name, $email, $Past_Disease, $Allergies, $Blood_Group, $id);
    
    if ($update_stmt->execute()) {
        header("location:view_medical_history.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

?>
<div class="container">
    <h1 class="text-center">Update Medical History</h1>
    <form method="post">
        <?php while ($row = $result->fetch_assoc()) { ?>
            <input type="hidden" name="id" value="<?php echo $row['amh_id']; ?>" />
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required />
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required />
            </div>
            <div class="mb-3">
                <label class="form-label">Past Disease</label>
                <input type="text" class="form-control" name="Pastdisease" value="<?php echo htmlspecialchars($row['Past_disease']); ?>" required />
            </div>
            <div class="mb-3">
                <label class="form-label">Allergies</label>
                <input type="text" class="form-control" name="allergies" value="<?php echo htmlspecialchars($row['allergies']); ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">Blood Group</label>
                <select class="form-select" name="bloodgroup" required>
                    <option value="" disabled>Select one</option>
                    <option value="A+" <?php echo ($row['blood_group'] == "A+") ? "selected" : ""; ?>>A+</option>
                    <option value="A-" <?php echo ($row['blood_group'] == "A-") ? "selected" : ""; ?>>A-</option>
                    <option value="B+" <?php echo ($row['blood_group'] == "B+") ? "selected" : ""; ?>>B+</option>
                    <option value="B-" <?php echo ($row['blood_group'] == "B-") ? "selected" : ""; ?>>B-</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="update_btn">Submit</button>
        <?php } ?>
    </form>
</div>
<?php  include "footer.php";?>