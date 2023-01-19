<?php include('header.php') ;
include('connection.php') ;
$q="select * from roles";
$run=mysqli_query($con,$q);

?>


<section id="main-content">
      <section class="wrapper">


          <!-- /col-md-12 -->
          <div class="col-md-12 mt">
            <div class="content-panel">
              <table class="table table-hover">
                <h4><i class="fa fa-angle-right"></i> Role Table</h4>
                <hr>
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Role Name</th>
                   
                  </tr>
                </thead>
                <tbody>

            <?php while($data=mysqli_fetch_assoc($run)) { ?>
                  <tr>
                    <td><?php  echo $data['id'] ?></td>
                    <td><?php  echo $data['role_name'] ?></td>
                  </tr>
<?php } ?>
                 
                </tbody>
              </table>
            </div>
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- row -->
       
        <!-- /row -->
      </section>
    </section>




<?php include('footer.php') ?>