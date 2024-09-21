
<?php include "header.php"; ?>
<h1>Add City</h1>
<form action="function.php" method="post">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">City</label>
                  <div class="col-sm-10">
                    <input type="text" name="city" class="form-control">
                  </div>
                </div>
               
                

             
            
              

              
           

                <div class="row mb-3">
               
                  <div class="col-sm-10">
                    <button type="submit" name="addCity" class="btn btn-primary">Submit Form</button>
                    <a href="view_city.php"  class="btn btn-primary">GO TO LIST</a>
                    <?php
                    if(isset($_GET['msg'])){
                        echo $_GET['msg'];
                    }
                    ?>
                  </div>
                </div>

              </form>
<?php include "footer.php"; ?>