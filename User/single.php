<?php include('header.php');
include('../Admin/connection.php');
$id=$_GET['id'];
$q="SELECT books.*,category.cat_name,author.auth_name FROM `books` JOIN author ON author.id=books.auth_id_FK JOIN category ON category.id=books.cat_id_FK where books.id='$id'";
$run=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($run);



?>

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb mb-2">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="events.html">Upcoming Events</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Event Details</li>
        </ul>
        <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- event single -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title"><?php echo $data['book_name']?></h2>
      </div>
      <!-- event image -->
      <div class="col-12 mb-4">
        <img src="images/events/event-single.jpg" alt="event thumb" class="img-fluid w-100">
      </div>
    </div>
    <!-- event info -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-9">
        <ul class="list-inline">
          <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
            <div class="d-flex align-items-center">
              <i class="ti-location-pin text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0"><?php echo $data['auth_name']?></h6>
                <p class="mb-0"><?php echo $data['cat_name']?></p>
              </div>
            </div>
          </li>
    
        </ul>
      </div>
      <div class="col-lg-3 text-lg-right text-left">
        <a href="event-single.html" class="btn btn-primary">Apply now</a>
      </div>
      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
    <!-- event details -->
    <div class="row">
      <div class="col-12 mb-50">
        <h3>About Event</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
          anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
          laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
          dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
          consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
          ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
          labore et dolore magnam aliquam quaerat voluptatem.</p>
      </div>
    </div>
    <!-- event speakers -->
    <div class="row">
      <div class="col-12">
        <h3 class="mb-4">Event Speakers</h3>
      </div>
      <!-- speakers -->
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="media">
          <img class="mr-3 img-fluid" src="images/event-speakers/speaker-1.jpg" alt="speaker">
          <div class="media-body">
            <h4 class="mt-0">Jack Mastio</h4>
            Teacher
          </div>
        </div>
      </div>
      <!-- speakers -->
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="media">
          <img class="mr-3 img-fluid" src="images/event-speakers/speaker-2.jpg" alt="speaker">
          <div class="media-body">
            <h4 class="mt-0">John Doe</h4>
            Teacher
          </div>
        </div>
      </div>
      <!-- speakers -->
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="media">
          <img class="mr-3 img-fluid" src="images/event-speakers/speaker-3.jpg" alt="speaker">
          <div class="media-body">
            <h4 class="mt-0">Randy Luis</h4>
            Teacher
          </div>
        </div>
      </div>
      <!-- speakers -->
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="media">
          <img class="mr-3 img-fluid" src="images/event-speakers/speaker-4.jpg" alt="speaker">
          <div class="media-body">
            <h4 class="mt-0">Alfred Jin</h4>
            Teacher
          </div>
        </div>
      </div>
      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
  </div>
</section>


<?php include('footer.php') ?>