<?php include('header.php') ?>


<section id="main-content">
      <section class="wrapper">
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Add a new Role</h4>
              <form class="form-horizontal style-form" method="post" action="">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Role Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="role">
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



<?php include('footer.php') ?>

<?php
include('connection.php');
if(isset($_POST['add'])){

    $role=$_POST['role'];

    $query="INSERT INTO `roles`(`role_name`) VALUES ('$role')";

    $run = mysqli_query($con,$query);
    if($run){
        echo "<script> alert('inserted');window.location.href='role_show.php'</script>";
    }
    else{
        echo mysqli_error($con);

    }
}



?>