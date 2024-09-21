<?php include 'header.php';?>
<?php
include "config.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $ambulance = $_POST['ambulance_type'];
    $driver = $_POST['driver'];
    $emergency = $_POST['emergency_reason'];
    $query = "INSERT INTO `book_emergency`(`user_name`, `email`, `contact`, `address`, `ambulance_type`, `driver_name`, `reason`) VALUES ('$name','$email','$contact','$address','$ambulance','$driver','$emergency')";
    $res = mysqli_query($conn,$query);
    if($res){
        echo "
        <script>
        alert('your request is accepted Ambulance is on the way!');
        window.location.href:Emergency.php; 
        </script>
        ";
    }


}
?>
        <div class="container">
            <h1 class="text-center">Emergency Ambulance</h1>
            <h3 class="text-center">Must check Driver and Ambulance status before boking!</h3>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input
                        type="text"
                        class="form-control"
                        name="email"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                   
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">contact</label>
                    <input
                        type="text"
                        class="form-control"
                        name="contact"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Address</label>
                    <input
                        type="text"
                        class="form-control"
                        name="address"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Ambulance type</label>
                    <select
                        class="form-select form-select-lg"
                        name="ambulance_type"
                        id=""
                    >
                        <option selected>--Select--</option>
                        <?php
                $sel = "SELECT * FROM `ambulances`";
                $res= mysqli_query($conn,$sel);
                while($data = mysqli_fetch_array($res)){
                ?>
                        <option value="<?php echo $data['ambulance_id']?>"><?php echo $data['vehicle_number']?></option>
                        <?php } ?>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="" class="form-label">Driver</label>
                    <select
                        class="form-select form-select-lg"
                        name="driver"
                        id=""
                    >
                        <option selected> --Select--</option>
                        <?php
                $sel = "SELECT * FROM `drivers`";
                $res= mysqli_query($conn,$sel);
                while($data = mysqli_fetch_array($res)){
                ?>
                        <option value="<?php echo $data['driver_id']?>"><?php echo $data['first_name']?></option>
                        <?php } ?>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="" class="form-label">Emergency Reason</label>
                    <input
                        type="text"
                        class="form-control"
                        name="emergency_reason"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                
                <button
                    type="submit"
                    class="btn btn-primary"
                    name="submit"
                >
                    Book Now
                </button>
            </form>
        </div>
        <?php

include 'footer.php';

?>    
    