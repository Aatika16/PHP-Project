<?php include('header.php') ?>
    <section id="main-content">
      <section class="wrapper">
<?php
include('connection.php');
$q="select * from category";
$run=mysqli_query($con,$q);

$q1="select * from author";
$run1=mysqli_query($con,$q1);

?>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Add a new Book </h4>
              <form class="form-horizontal style-form" method="POST" action="">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Book Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="book">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Category</label>
                  <div class="col-sm-10">
                 <select name="cat" class="form-control">
                   <?php while($data=mysqli_fetch_assoc($run)) { ?>
                   <option value="<?php echo $data['id'] ?>"> <?php echo $data['cat_name'] ?>  </option>
                   <?php } ?>
</select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Author</label>
                  <div class="col-sm-10">
                 <select name="auth" class="form-control">
                   <?php while($data=mysqli_fetch_assoc($run1)) { ?>
                   <option value="<?php echo $data['id'] ?>"> <?php echo $data['auth_name'] ?>  </option>
                   <?php } ?>
</select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Book Price</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="price">
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
$book=$_POST['book'];
$cat=$_POST['cat'];
$auth=$_POST['auth'];
$price=$_POST['price'];
$q="INSERT INTO `books`( `book_name`, `cat_id_FK`, `auth_id_FK`, `price`) VALUES ('$book','$cat','$auth','$price')";
$run=mysqli_query($con,$q);
if($run){
}
else{
  echo mysqli_error($con);
}
}



?>




    <?php include('footer.php') ?>