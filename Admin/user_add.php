<?php include('header.php') ?>
    <section id="main-content">
      <section class="wrapper">
<?php
include('connection.php');
$q="select * from roles";
$run=mysqli_query($con,$q);

?>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Add a new User </h4>
              <form class="form-horizontal style-form" method="POST" action="">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="user">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pswd">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Role</label>
                  <div class="col-sm-10">
                 <select name="role">
                   <?php while($data=mysqli_fetch_assoc($run)) { ?>
                   <option value="<?php echo $data['id'] ?>"> <?php echo $data['role_name'] ?>  </option>
                   <?php } ?>
</select>
                  </div>
                </div>
                <button type="submit" class="btn btn-theme" name="add">Add</button>
            
               
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>

       
      </section>
      <!-- /wrapper -->
    </section>
<?php

if(isset($_POST['add'])){
$u=$_POST['user'];
$p=$_POST['pswd'];
$r=$_POST['role'];
$q="INSERT INTO `users`( `username`, `password`, `role_id_FK`) VALUES ('$u','$p','$r')";
$run=mysqli_query($con,$q);
if($run){
}
else{
  echo mysqli_error($con);
}
}



?>




    <?php include('footer.php') ?>