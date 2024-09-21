<?php include "header.php";?>
<?php

include "config.php";

$sql = "SELECT * FROM   add_medical_history";
           $res = mysqli_query($conn,$sql);





?>
    <a href="Add_medical_history.php" class="btn btn-primary">Add Data</a>
    <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">Past_Disease</th>
                        <th scope="col">Allergies</th>
                        <th scope="col">Blood_Group</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
        -
                <?php
                   while($row = mysqli_fetch_array($res)){
                    ?>
                    
                    <tr>
                        <td><?php echo $row ['amh_id']?></td>
                        <td><?php echo $row ['name']?></td>
                        <td><?php echo $row ['email']?></td>
                        <td><?php echo $row ['past_disease']?></td>
                        <td><?php echo $row ['allergies']?></td>
                        <td><?php echo $row ['blood_group']?></td>
                    <td>
               <a href="medicalupdate.php?id=<?php echo $row ['amh_id']?>" class="btn btn-success">Update</a>
              <a href="medicaldelete.php?id=<?php echo $row ['amh_id']?>" class="btn btn-danger">delete</a>
             



                  </td>
                   </tr>
                   <?php

                   }
                   
                   ?>



            </tbody>
            </table>
        </div>
        </div>
        <?php include "footer.php";?>