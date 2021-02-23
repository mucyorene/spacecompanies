<!DOCTYPE html>
<html lang="en">
<?php include("inc/connect.php");?>
<head>
    <?php
     include("inc/header.php");?>
</head>

<body>

  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <?php include("inc/searchForm.php");?>
  <!-- End Property Search Section -->>

  <!-- ======= Header/Navbar ======= -->
  <?php
    include("inc/nav.php");
  ?>
  <!-- End Header/Navbar -->

  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">

          <?php
            // $ch = mysqli_query($conn,"SELECT *FROM offices ORDER BY id DESC limit 6") or die(mysqli_error($conn));
            // if (mysqli_num_rows($ch)>0) {
            //   while ($intro = mysqli_fetch_array($ch)) {
          ?>
            <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/about1.jpg)">
              <div class="overlay overlay-a"></div>
              <div class="intro-content display-table">
                <div class="table-cell">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="intro-body">
                          <p class="intro-title-top"><?php //$intro['location'];?>Rwandan Deserved the Best
                            <!-- <br> KG Paul VI</p> -->
                          <h1 class="intro-title mb-4">
                            <span class="color-b"><?php //$intro['rooms'];?> </span><?php //$intro['name'];?>Space Company LTD
                            <!-- <br>Paul VI</h1> -->
                          <p class="intro-subtitle intro-price">
                            <a href="#"><span class="price-a"><?php //$intro['status'];?>Find your | Affordable <?php //$intro['price'];?></span></a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php
            //   }
            // }
          ?>
    </div>
  </div><!-- End Intro Section -->

  <main id="main">
    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Our Services</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Sale Spaces</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                  convallis a pellentesque
                  nec, egestas non nisi.
                </p>
              </div>
              <div class="card-footer-c">
                <a href="#" class="link-c link-icon">Read more
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-4"></div>
          
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Lend Spaces</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                  convallis a pellentesque
                  nec, egestas non nisi.
                </p>
              </div>
              <div class="card-footer-c">
                <a href="#" class="link-c link-icon">Read more
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Latest Properties</h2>
              </div>
              <div class="title-link">
                <a href="spaces">View All
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div id="property-carousel" class="owl-carousel owl-theme">
          <?php
            $sel = mysqli_query($conn,"SELECT *FROM companies,offices WHERE offices.saleStatus='reserve' AND companies.coStatus='Approved' AND offices.companyId=companies.id ORDER BY offices.id DESC limit 6") or die(mysqli_error($conn));
            if (mysqli_num_rows($sel)) {
              while ($row = mysqli_fetch_array($sel)) {
                ?>
                  <div class="carousel-item-b">
                    <div class="card-box-a card-shadow">
                      <div class="img-box-a">
                        <img src="admin/media/spaceImages/<?= $row['thumnail'];?>" style="height:400px;" alt="No images" class="img-a img-fluid">
                      </div>
                      <div class="card-overlay">
                        <div class="card-overlay-a-content">
                          <div class="card-header-a">
                            <h2 class="card-title-a">
                              <a href="property-single?identification=<?= rand().uniqid()."!".$row['id']."!".rand().uniqid().rand();?>"><?= $row['name']?>
                                <br /></a>
                                <a href="customers?ident=<?= rand().uniqid().rand()."!".$row['id']."!".rand().uniqid().rand();?>" id="customers" class="btn btn-sm btn-outline-warning">Book</a>
                            </h2>
                          </div>
                          <div class="card-body-a">
                            <div class="price-box d-flex">
                              <span class="price-a"><?= $row['status']?> | <?= $row['price']?></span>
                            </div>
                            <a href="property-single?identification=<?= rand().uniqid()."!".$row['id']."!".rand().uniqid().rand();?>" class="link-a">Click here to view
                              <span class="ion-ios-arrow-forward"></span>
                            </a>
                          </div>
                          <div class="card-footer-a">
                            <ul class="card-info d-flex justify-content-around">
                              <li>
                                <h4 class="card-info-title">Area</h4>
                                <span><?= $row['area']?>m
                                  <sup>2</sup>
                                </span>
                              </li>
                              <li>
                                <h4 class="card-info-title">Contact</h4>
                                <span><?= $row['contact'];?></span>
                              </li>
                              <li>
                                <h4 class="card-info-title">Price</h4>
                                <span><?= $row['price'];?></span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
              }
            }
          ?> 

        </div>
      </div>
    </section><!-- End Latest Properties Section -->

    <!-- ======= Agents Section ======= -->
    <section class="section-agents section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Lastest Companies</h2>
              </div>
              <div class="title-link">
                <a href="companies">All Companies
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <?php
            $comp = mysqli_query($conn,"SELECT *FROM companies WHERE coStatus='Approved' ORDER BY id DESC limit 3") or die(mysqli_error($conn));
            if (mysqli_num_rows($comp)>0) {
              while ($companies = mysqli_fetch_array($comp)) {
                ?>
                    <div class="col-md-4">
                      <div class="card-box-d">
                        <div class="card-img-d">
                          <img src="admin/media/companies/<?= $companies['thumbnail'];?>"  style="height:400px;" alt="" class="img-d img-fluid">
                        </div>
                        <div class="card-overlay card-overlay-hover">
                          <div class="card-header-d">
                            <div class="card-title-d align-self-center">
                              <h3 class="title-d">
                                <a href="company-single?comidentification=<?= rand().uniqid()."!".$companies['id']."!".rand().uniqid();?>" class="link-two"><?= $companies['comName'];?>
                                  <!-- <br> Escala -->
                                </a>
                              </h3>
                            </div>
                          </div>
                          <div class="card-body-d">
                            <p class="content-d color-text-a">
                              Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                            </p>
                            <div class="info-agents color-a">
                              <p>
                                <strong>Phone: </strong> <?= $companies['comPhone'];?></p>
                              <p>
                                <strong>Email: </strong>  <?= $companies['comEmail'];?></p>
                            </div>
                          </div>
                          <div class="card-footer-d">
                            <div class="socials-footer d-flex justify-content-center">
                              <ul class="list-inline">
                                <li class="list-inline-item">
                                  <a href="#" class="link-one">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                  </a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="link-one">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                  </a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="link-one">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                  </a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="link-one">
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                  </a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="link-one">
                                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                <?php
              }
            }
          ?>
        </div>
      </div>
    </section><!-- End Agents Section -->

    <!-- ======= Latest News Section ======= -->
    <!-- <section class="section-news section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Latest News</h2>
              </div>
              <div class="title-link">
                <a href="blog-grid">All News
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div id="new-carousel" class="owl-carousel owl-theme">
          <div class="carousel-item-c">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="assets/img/post-2.jpg" alt="" class="img-b img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-category-b">
                    <a href="#" class="category-b">House</a>
                  </div>
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="blog-single">House is comming
                        <br> new</a>
                    </h2>
                  </div>
                  <div class="card-date">
                    <span class="date-b">18 Sep. 2017</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item-c">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="assets/img/post-5.jpg" alt="" class="img-b img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-category-b">
                    <a href="#" class="category-b">Travel</a>
                  </div>
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="blog-single">Travel is comming
                        <br> new</a>
                    </h2>
                  </div>
                  <div class="card-date">
                    <span class="date-b">18 Sep. 2017</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item-c">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="assets/img/post-7.jpg" alt="" class="img-b img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-category-b">
                    <a href="#" class="category-b">Park</a>
                  </div>
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="blog-single">Park is comming
                        <br> new</a>
                    </h2>
                  </div>
                  <div class="card-date">
                    <span class="date-b">18 Sep. 2017</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item-c">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="assets/img/post-3.jpg" alt="" class="img-b img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-category-b">
                    <a href="#" class="category-b">Travel</a>
                  </div>
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="#">Travel is comming
                        <br> new</a>
                    </h2>
                  </div>
                  <div class="card-date">
                    <span class="date-b">18 Sep. 2017</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End Latest News Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Testimonials</h2>
              </div>
            </div>
          </div>
        </div>
        <div id="testimonial-carousel" class="owl-carousel owl-arrow">
          <div class="carousel-item-a">
            <div class="testimonials-box">
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="testimonial-img">
                    <img src="assets/img/testimonial-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="testimonial-ico">
                    <span class="ion-ios-quote"></span>
                  </div>
                  <div class="testimonials-content">
                    <p class="testimonial-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                      debitis hic ber quibusdam
                      voluptatibus officia expedita corpori.
                    </p>
                  </div>
                  <div class="testimonial-author-box">
                    <img src="assets/img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                    <h5 class="testimonial-author">Albert & Erika</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item-a">
            <div class="testimonials-box">
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="testimonial-img">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="testimonial-ico">
                    <span class="ion-ios-quote"></span>
                  </div>
                  <div class="testimonials-content">
                    <p class="testimonial-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                      debitis hic ber quibusdam
                      voluptatibus officia expedita corpori.
                    </p>
                  </div>
                  <div class="testimonial-author-box">
                    <img src="assets/img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
                    <h5 class="testimonial-author">Pablo & Emma</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End Testimonials Section -->

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
      $("#navHome").addClass('active');
    });
  </script>

</body>

</html>