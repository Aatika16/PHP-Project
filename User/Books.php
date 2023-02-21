
<?php include('header.php');
include('../Admin/connection.php');
@$cat_id=$_GET['cat_id'];
@$auth_id=$_GET['auth_id'];
if($cat_id!=null){
    $q="SELECT books.*,category.cat_name,author.auth_name FROM `books` join category on books.cat_id_FK=category.id
    join author on books.auth_id_FK=author.id where category.id='$cat_id'"; 
}
else if($auth_id!=null){
    $q="SELECT books.*,category.cat_name,author.auth_name FROM `books` join category on books.cat_id_FK=category.id
join author on books.auth_id_FK=author.id  where author.id='$auth_id'";
}
else if(isset($_POST['search_btn'])){
    $text=$_POST['search'];
    $q="SELECT books.*,category.cat_name,author.auth_name FROM `books` join category on books.cat_id_FK=category.id
    join author on books.auth_id_FK=author.id where book_name like '%$text%'";
}
else{
    $q="SELECT books.*,category.cat_name,author.auth_name FROM `books` join category on books.cat_id_FK=category.id
    join author on books.auth_id_FK=author.id";
    }

$run=mysqli_query($con,$q);





?>
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb mb-2">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.html">Home</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Upcoming Events</li>
        </ul>
        <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- courses -->
<section class="section">
  <div class="container">
      <form action="" method="post">
      <input type="text" name="search" placeholder="Type book name here"> 
      <input type="submit" value="Go" name="search_btn"> 
      </form>




    <div class="row">

     <?php while($data=mysqli_fetch_assoc($run)){ ?>
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
          <img class="card-img-top rounded-0" src="images/events/event-2.jpg" alt="event thumb">
            <div class="card-date"><span><?php echo $data['price'] ?></span><br>Rs.</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"><?php echo $data['auth_name'] ?></i></p>
            <a href="event-single.html">
              <h4 class="card-title"><?php echo $data['book_name'] ?>.</h4>
              <a href="single.php?id=<?php echo $data['id'] ?>"> Read More</a>
              <a href="books.php?cat_id=<?php echo $data['cat_id_FK'] ?>"><?php echo $data['cat_name'] ?></a>
<?php if(isset($_SESSION['FRONT'])){ ?>
              <a href="books.php" download>Download</a>
<?php } else {?>
    <a href="login.php">Download</a>
    <?php } ?>
            </a>
          </div>
        </div>
      </div>
<?php } ?>
     
    </div>
  </div>
</section>
<!-- /courses -->

<?php include('footer.php')?>