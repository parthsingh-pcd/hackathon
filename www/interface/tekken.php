<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TEKKEN &mdash; registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/style.css">

    <script type="text/javascript">
      function payemntpage(resp,event)
      {
        alert("Successfully Registered. Move to the payment page");
      }
    </script>
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-11 col-xl-2">
            <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0">HACKATHON<span class="text-primary">2.0</span> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="speakers.html">Speakers</a></li>
                <li><a href="news.html">News</a></li>
                <li class="active"><a href="contact.html">Contacts</a></li>
                <li class="cta"><a href="buy-tickets.html">Buy Tickets</a></li>
              </ul>
            </nav>
          </div>
          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </div>
    </header>

    <div class="site-section site-hero inner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <span class="d-block mb-3 caption" data-aos="fade-up">Welcome </span>
            <h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="100">Tekken Registration</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6" data-aos="fade-up">
            <form action="#">
             

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="" for="fname">Institution Name</label>
                  <input type="text" id="fname" name = "clgName" class="form-control">
                </div>
              </div>

              <div class = "row form-group">
                <div class="col-md-6">
                  <label class="" for="team_name">Participant's Name</label>
                  <input type="text" id="team_name" name = "team_name" class="form-control">
                </div>

                <!-- <div class="col-md-6">
                  <label class="" for="team_leader_name">Team Leader Name</label>
                  <input type="text" id="team_leader_name" name = "team_leader_name" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-4">
                  <label class="" for="team_member">Number Of Team Members</label> 
                  <input type="number" min = "3" max = "5" id="team_member" name = "team_member" class="form-control">
                </div> -->

                <div class="col-md-8">
                  <label class="" for="email">Email ID</label> 
                  <input type="email" id="email" name = "email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="" for="password">Password</label> 
                  <input type="password" id="password" name = "password" class="form-control">
                </div>
              </div>

              <!--<div class="row form-group">
                <div class="col-md-12">
                  <label class="" for="other_members">Other Team Member Name (, Seperated)</label> 
                  <input type="text" id="other_members" name = "other_members" class="form-control">
                </div>
              </div>-->

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Proceed to Payment" onclick="payemntpage(this,event)" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="p-4 mb-3">
              <p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">Note:</p>
			  <!--<p class="mb-4">Each team could have a minimum of 3 & a maximum of 5 members</p>-->
              <p class="mb-4">Each participant have to submit 50 INR for the Tekken</p>

              <p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">Phone</p>
              <p class="mb-4"><a href="#">+91-6396754998</a></p>

              <p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">Email Address</p>
              <p class="mb-0"><a href="#">itscoolparth@gmail.com</a></p>

            </div>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-4 mb-5">
            <div class="site-section-heading">
              <h2 class="text-center">Testimonials</h2>
            </div>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
          
          <div class="row justify-content-center">

            <div class="testimony text-center col-md-5">
              <figure>
                <img src="/images/person_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&rdquo;</p>
                <p class="author">&mdash; Emely Peters</p>
              </blockquote>
            </div>
          </div>

          <div class="row justify-content-center">
           <div class="testimony text-center col-md-5">
              <figure>
                <img src="/images/person_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&rdquo;</p>
                <p class="author">&mdash; Alex Anchors</p>
              </blockquote>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="testimony text-center col-md-5">
              <figure>
                <img src="/images/person_3.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&rdquo;</p>
                <p class="author">&mdash; Aaron Thomas</p>
              </blockquote>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="testimony text-center col-md-5">
              <figure>
                <img src="/images/person_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&rdquo;</p>
                <p class="author">&mdash; Emely Peters</p>
              </blockquote>
            </div>
          </div>

          <div class="row justify-content-center">
           <div class="testimony text-center col-md-5">
              <figure>
                <img src="/images/person_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&rdquo;</p>
                <p class="author">&mdash; Alex Anchors</p>
              </blockquote>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="testimony text-center col-md-5">
              <figure>
                <img src="/images/person_3.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&rdquo;</p>
                <p class="author">&mdash; Aaron Thomas</p>
              </blockquote>
            </div>
          </div>

        </div>




        
      </div>
    </div>
    
      
    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h2 class="footer-heading text-uppercase mb-4">About Event</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aliquid quibusdam fugit architecto.</p>
          </div>
          <div class="col-md-3 ml-auto">
            <h2 class="footer-heading text-uppercase mb-4">Quick Links</h2>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Speakers</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h2 class="footer-heading text-uppercase mb-4">Connect with Us</h2>
            <p>
              <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="#" class="p-2"><span class="icon-twitter"></span></a>
              <a href="#" class="p-2"><span class="icon-youtube"></span></a>
              <a href="#" class="p-2"><span class="icon-instagram"></span></a>
            </p>
          </div>
        </div>
        <div class="row">
          
            <div class="col-md-12 text-center">
              <div class="border-top pt-5">
              <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-primary" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  </div>

  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/jquery-ui.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/jquery.countdown.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/bootstrap-datepicker.min.js"></script>
  <script src="/js/aos.js"></script>

  <script src="/js/main.js"></script>
    
  </body>
</html>