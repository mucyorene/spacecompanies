<?php 
  session_start();
  include 'inc/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("inc/header.php");?>
</head>

<body>

  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Type</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
                <option>All Type</option>
                <option>For Rent</option>
                <option>For Sale</option>
                <option>Open House</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">City</label>
              <select class="form-control form-control-lg form-control-a" id="city">
                <option>All City</option>
                <option>Alabama</option>
                <option>Arizona</option>
                <option>California</option>
                <option>Colorado</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">Bedrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bedrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Garages</label>
              <select class="form-control form-control-lg form-control-a" id="garages">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathrooms">Bathrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bathrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Min Price</label>
              <select class="form-control form-control-lg form-control-a" id="price">
                <option>Unlimite</option>
                <option>$50,000</option>
                <option>$100,000</option>
                <option>$150,000</option>
                <option>$200,000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->

  <!-- ======= Header/Navbar ======= -->
  <?php 
    include("inc/nav.php");
    include("forms/signup.php");
    
  ?>
  <!-- End Header/Navbar -->

  <main id="main">

    <!-- ======= Intro Single ======= -->
    
    <!-- End Intro Single-->

    <!-- ======= Contact Single ======= -->
    <br><br><br><br><br><br><br><br>
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 section-8">
            <div class="row">
                <div class="col-md-7">
                    
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4 section-md-t3">
                <?php 
                  include("inc/loginFile.php");
                ?>
                    <form method="POST" role="form">
                        <div class="row">

                            <div class="col-md-12 mb-3">
                                <?php
                                  if (isset($_POST['login'])) {
                                    echo $msg;
                                  }
                                ?>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <input type="text" name="uname" class="form-control form-control-lg form-control" placeholder="Username" data-rule="minlen:3" data-msg="Please enter at least 3 characters username">
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <input type="password" name="pass" class="form-control form-control-lg form-control" placeholder="Password" data-rule="minlen:6" data-msg="Please enter at least 6 characters of Password">
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button name="login" type="submit" class="btn btn-sm btn-primary">Login</button>
                            </div>
                            <div class="col-md-12 text-center">
                                Need new Account? <a href="newCompany">Sign up</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Single-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("inc/footer.php");?>
  <!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <script type="text/javascript">
    $(function(){
      $("#navLogin").addClass('active');
    });
  </script>
</body>

</html>