<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <!--gives the browser instructions on how to control the page's dimensions and scaling.-->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css" />
      <link rel="stylesheet" href="{{asset('fonts/fonts.min.css')}};" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">

      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="icon" href="../../../../favicon.ico">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <title>E-learning</title>
      <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  
      <link rel="stylesheet" type="text/css" href="{{asset('css/style1.css')}}">


  </head>
  <body>

    <header>
    <!--navbar--->  
     <!--navbar--->  
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand"><img  src="img/SYA11.png" alt="logo" style="width: 100px;" /></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('index') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('produit')}}">Courses</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('login')}}">Login<span class="sr-only">(current)</span></a>
            </li>
            
          </ul>
          <div>
          <div class="collapse navbar-collapse" id="navbarCollapse">
          
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline my-2 my-sm-0" type="submit">Search</button>
          
         </form>
        </div>
        </div>
      </nav>
    </header>
    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel"  >
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" >
          <div class="carousel-item active">
            <img class="first-slide" src="img/sliders/s1.jpg" alt="First slide" style="opacity: 1.5">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Learn from doing</h1>
                <p>Learn something new every day with us</p>
                <div class="row col-lg-12 " style="padding: 2%;">
                    <p><a class=" btn btn-lg btn-outline btn-success " href="{{ url('login') }}" role="button">Sign In</a></p>
                    <p style="margin-left: 1%;"><a class="btn btn-lg btn-outline btn-primary" href="{{ url('register') }}" role="button"> Sign Up</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="img/sliders/s4.jpg" alt="Second slide" style="opacity: 1">
            <div class="container">
              <div class="carousel-caption">
                <h1>You only have to know one thing</h1>
                <p>You can learn anything</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="img/sliders/s3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Give Yourself New Opportunities Each Day</h1>
                <p>The right knowledge at the right time can transform your life</p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


   <div class="uk-container uk-margin-medium-bottom uk-h2 uk-text-center">  
            <h2>Courses</h2>
        </div> 

        <div class="uk-dark uk-background-cover uk-panel uk-flex uk-flex-center uk-flex-middle" >
                <div class="uk-container">
                    <div class="uk-child-width-1-1@s uk-child-width-1-3@m " uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover">
                                <div class="uk-card-media-top">
                                    <img  height="200" src="img/back/b1.jpg" alt="">
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Course #1</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    <span class="rating">
                                            <i class="fas fa-star yellow"></i>
                                            <i class="fas fa-star yellow"></i>
                                            <i class="fas fa-star yellow"></i>
                                            <i class="fas fa-star yellow"></i>
                                            <i class="fas fa-star-half yellow"></i>
                                            <span> 4.5 star rating </span>
                                            <p class="uk-margin-remove-bottom uk-margin-small-top">42,000 feedbacks</p>
                                    </span>
                                    <span class="languages">
                                            <div> Available languages : </div>
                                            <div class="uk-label arabic">Arabic</div>
                                            <div class="uk-label french">French</div>
                                    </span>
                                </div>
                                <div class="uk-card-footer">
                                    <a href="login" class="uk-button uk-button-text">Take this course</a>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover">
                                <div class="uk-card-media-top">
                                    <img  height="200" src="img/back/b2.jpg" alt="">
                                </div>
                                <div class="uk-card-body">
                                    <div class="uk-card-badge uk-label new" >New</div>
                                    <h3 class="uk-card-title">Course #2</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    <span class="rating">
                                            <i class="fas fa-star yellow"></i>
                                            <i class="fas fa-star yellow"></i>
                                            <i class="fas fa-star yellow"></i>
                                            <i class="fas fa-star yellow"></i>
                                            <span> 4 star rating </span>
                                            <p class="uk-margin-remove-bottom uk-margin-small-top">24,358 feedbacks</p>
                                    </span>
                                    <span class="languages">
                                            <div> Available languages : </div>
                                            <div class="uk-label english">English</div>
                                            <div class="uk-label darija">Darija</div>
                                    </span>
                                </div>
                                <div class="uk-card-footer">
                                    
                                    <a href="login" class="uk-button uk-button-text">Take this course</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover">
                                <div class="uk-card-media-top">
                                    <img height="256" src="img/back/b4.jpg" alt="">
                                </div>
                                <div class="uk-card-body">
                                    <div class="uk-card-badge uk-label exclusive" >Exclusive</div>
                                    <h3 class="uk-card-title">Course #3</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    <span class="rating">
                                            <i class="fas fa-star yellow"></i>
                                            <i class="fas fa-star yellow"></i>
                                            <i class="fas fa-star yellow"></i>
                                            <i class="fas fa-star yellow"></i>
                                            <span> 4 star rating </span>
                                            <p class="uk-margin-remove-bottom uk-margin-small-top">62,029 feedbacks</p>
                                    </span>
                                    <span class="languages">
                                            <div> Available languages : </div>
                                            <div class="uk-label tifinagh">Tifinagh</div>
                                    </span>
                                </div>
                                <div class="uk-card-footer">
                                    <a href="login" class="uk-button uk-button-text">Take this course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>


<!-- Team Section -->
<section >
    <!--Section heading-->
      <!--  Padding 64px top and bottom-->
      <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16 w3 w3-center">Team section</span>
    </div>
    <div class="row">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">
               <div id="card-1" class="card-rotating effect__click text-center w-100 h-100">
                    <!--Front Side-->
                    <div class="face front">
                        <div class="avatar mx-auto white">
                            <img src="img\team\t1.jpg"  style="width: 50%;" class="rounded-circle img-fluid"  alt="First sample avatar image">

                        </div>
                        <!--Content-->
                        <div class="card-body">
                            <h4 class="mt-1">Soulaiman Ouissellat</h4>
                            <p class="font-weight-bold dark-grey-text">software engineering student</p>
                        </div>
                    </div>
          <div class="face back">
                    <div class="card-body">
                      <hr>
                        <!--Social Icons-->
                        <ul class="list-inline list-unstyled">
                            <li class="list-inline-item">
                                <a class="icons-sm fb-ic">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                             <li class="list-inline-item">
                                <a class="icons-sm pin-ic">
                                    <i class="fa fa-pinterest"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="icons-sm ins-ic">
                                    <i class="fa fa-instagram"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="icons-sm tw-ic">
                                    <i class="fa fa-twitter"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="icons-sm tw-ic">
                                    <i class="fa fa-linkedin"> </i>
                                </a>
                            </li>
                        </ul>

                      </div>

                    </div>
                </div>
              </div>
              <!----------------------------------------------------->
              <div class="col-lg-4 col-md-12 mb-4">
               <div id="card-1" class="card-rotating effect__click text-center w-100 h-100">
                    <!--Front Side-->
                    <div class="face front">
                        <div class="avatar mx-auto white">
                            <img src="img/team/t2.jpg"  style="width: 50%;" class="rounded-circle img-fluid"  alt="First sample avatar image">
                        </div>
                        <!--Content-->
                        <div class="card-body">
                            <h4 class="mt-1">Yousra El Maleki</h4>
                            <p class="font-weight-bold dark-grey-text">software engineering student</p>
                        </div>
                    </div>
          <div class="face back">
                    <div class="card-body">
                      <hr>
                        <!--Social Icons-->
                        <ul class="list-inline list-unstyled">
                            <li class="list-inline-item">
                                <a class="icons-sm fb-ic">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                             <li class="list-inline-item">
                                <a class="icons-sm pin-ic">
                                    <i class="fa fa-pinterest"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="icons-sm ins-ic">
                                    <i class="fa fa-instagram"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="icons-sm tw-ic">
                                    <i class="fa fa-twitter"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="icons-sm tw-ic">
                                    <i class="fa fa-linkedin"> </i>
                                </a>
                            </li>
                        </ul>

                      </div>

                    </div>
                </div>
              </div>
 <!------------------------------------------------------------------------------>
      <div class="col-lg-4 col-md-12 mb-4">
               <div id="card-1" class="card-rotating effect__click text-center w-100 h-100">
                    <!--Front Side-->
                    <div class="face front">
                        <div class="avatar mx-auto white">
                            <img src="img/team/t3.jpg"  style="width: 50%;" class="rounded-circle img-fluid"  alt="First sample avatar image">
                        </div>
                        <!--Content-->
                        <div class="card-body">
                            <h4 class="mt-1">Anass Boukhrissi</h4>
                            <p class="font-weight-bold dark-grey-text">software engineering student</p>
                        </div>
                    </div>
          <div class="face back">
                    <div class="card-body">
                      <hr>
                        <!--Social Icons-->
                        <ul class="list-inline list-unstyled">
                            <li class="list-inline-item">
                                <a class="icons-sm fb-ic">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                             <li class="list-inline-item">
                                <a class="icons-sm pin-ic">
                                    <i class="fa fa-pinterest"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="icons-sm ins-ic">
                                    <i class="fa fa-instagram"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="icons-sm tw-ic">
                                    <i class="fa fa-twitter"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="icons-sm tw-ic">
                                    <i class="fa fa-linkedin"> </i>
                                </a>
                            </li>
                        </ul>

                      </div>

                    </div>
            </div>         
    </div>  
</section>

<!-- End page content -->
<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:0px 16px" id="contact">
  <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Contact Us</span>
    </div>
  <p class="w3-center w3-large">Lets get in touch. Send us a message</p>
  <div class="w3-row-padding col-lg-12">
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i>Al Hoceima,Morocco</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +212 568320965</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
      <br>
      <form>
        <p><input class="w3-input w3-border" type="text" placeholder="User name" required name="Name"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>
    </div>
    <div class="w3-half">
      <!-- Add Google Maps -->
      <div class="map col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26069.26068581951!2d-3.955142646215416!3d35.23989298915436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd743185573bb27f%3A0x1c38d81ae19c5f4!2sAl+Hoce%C3%AFma%2C+Maroc!5e0!3m2!1sfr!2s!4v151041032457" width="700" height="400" frameborder="0" style="border:0;margin-bottom:1%; margin-left: 4%; "
                            allowfullscre></iframe>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container  w3-padding-32 w3-container w3-black w3-text-light-grey w3-center w3-xlarge " style="margin-bottom: -50px">

  <div class="w3-section"  >
     <!--Call to action-->
        <div class="call-to-action text-center my-4">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                     <h5>Register for free</h5>
                </li>
                <li class="list-inline-item"><a href="{{ url('register') }}" class="btn btn-primary">Sign up!</a></li>
            </ul>
        </div>
        <!--/.Call to action-->
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p class="w3-medium">Copyright © 2018||All Rights Reserved</a></p>
</footer>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit-icons.min.js"></script>
  </body>
</html>
