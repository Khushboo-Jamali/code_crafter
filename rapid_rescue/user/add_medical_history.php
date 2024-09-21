<?php include "header.php";?>
<?php
// $conn = mysqli_connect("localhost","root","","rapid_rescue");
include 'Config.php';
 if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $email=$_POST['email'];
        $Past_Disease=$_POST['Past_disease'];
        $Allergies=$_POST['allergies'];
        $blood_Group=$_POST['bloodgroup'];
        $sql="INSERT INTO `add_medical_history`(`name`, `email`, `Past_disease`, `allergies`,`blood_group`)
         VALUES ('$name','$email','$Past_Disease', '$Allergies','$blood_Group')";
         mysqli_query($conn,$sql);
    
 
    }
?>

        <div class="container">
            <h1 class="text-center">Add Medical History</h1>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id=""
                       
                    />
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input
                        type="text"
                        class="form-control"
                        name="email"
                        id=""
                                        />
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Past Disease</label>
                    <input
                        type="text"
                        class="form-control"
                        name="Past_disease"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Allergies</label>
                    <input
                        type="text"
                        class="form-control"
                        name="allergies"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Blood Group</label>
                    <select
                        class="form-select form-select-lg"
                        name="bloodgroup"
                        id=""
                    >
                        <option selected>Select Blood-Group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        
                        
                    </select>
                </div>



                <button
                    type="submit"
                    class="btn btn-primary"
                    name="btn"
                >
                    Submit
                </button>
            </form>
        </div>
        <?php include "footer.php";?>





