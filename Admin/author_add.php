
<?php include('header.php') ?>
<section id="main-content">
      <section class="wrapper">
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Add a new Role</h4>
              <form class="form-horizontal style-form" method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Author Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="author_name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Author Since</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="author_since">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Author Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="author_image" accept="image/png, image/jpg, image/jpeg" onChange="abc(this)">
                  </div>
                </div>

                <img src="" id="myimage"/>


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
$a_n=$_POST['author_name'];
$a_s=$_POST['author_since'];
$name=$_FILES['author_image']['name'];         //original name
$tname=$_FILES['author_image']['tmp_name'];  //temp name
$type=$_FILES['author_image']['type'];  //type
$size=$_FILES['author_image']['size'];  //size
$folder="DB_Images/Authors/";

if($type=="image/png" || $type=="image/jpg" || $type=="image/jpeg"){
  $path=$folder.$name;
move_uploaded_file($tname,$path);
$q="INSERT INTO `author`(`auth_name`, `since`, `auth_picture`) VALUES ('$a_n','$a_s','$path')";
$run=mysqli_query($con,$q);
if($run){
  echo "<script> alert('inserted')</script>";
}
else{
  echo mysqli_error($con);
}
}
else{
  echo "<script> alert('Image format error!!!!!')</script>";
}




}



?>

<!-- To diplay image on form -->

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.min.js"></script>
<script>

function abc(input){
  if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#myimage')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100)
                   .css( "visibility", "visible" );		
            };

            reader.readAsDataURL(input.files[0]);
        }
}


</script>