
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>E-learning</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body>

    <header>
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
              <a class="nav-link" href="{{url('index')}} ">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('produit')}}">Courses</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('login')}} ">Login<span class="sr-only">(current)</span></a>
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
 <!---body---->
<section>
  <div class="row" style="margin-left: 1%; margin-top: 5%;">
      <aside class="col-lg-3">
          <div class="avatar mx-auto white">

                            <img src="img/vid/vi1.jpg"  style="width: 75%; display: block;margin-left: auto;margin-right: auto;" class="rounded-circle img-fluid">
                        </div>

                        <!--Content-->
                        <div class="card-body"><center>
                            <h4 class="mt-1">Eric Grimson</h4>
                            <p class="font-weight-bold dark-grey-text">Computer scientist and professor at the Massachusetts Institute of Technology</p>
                            <!--Triggering button-->
                            <img src="img/uni/u1.png" style="width: 25%;">
                        </center></div>

                    
          </aside>
          <div class="col-lg-9">
    <video controls width="70%" style=" display: block;margin-left: auto;margin-right: auto;">
      <source src="vid/v1.mp4" type="video/mp4">
    </video>

    <div style="margin-left: 3%; margin-right: 3%;"><p ><center>
      C++is a general-purpose programming language. It has imperative, object-oriented and generic programming features, while also providing facilities for low-level memory manipulation.
    </center></p></div>
 </div>
  </div>
 <div>
   
 </div>
</section>

<!---------------------------------------------------->

  <!--------------------------------------------------------------->

<!--/body----------->
<!-- Footer -->
<footer class="w3-container  w3-padding-32 w3-container w3-black w3-text-light-grey w3-center w3-xlarge " style="margin-bottom: -50px">

  <div class="w3-section">
     <!--Call to action-->
        <div class="call-to-action text-center my-4">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                    <h5>Register for free</h5>
                </li>
                <li class="list-inline-item"><a href="{{url('register')}}" class="btn btn-primary">Sign up!</a></li>
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
  <p class="w3-medium">Copyright © 2018 |All Rights Reserved</a></p>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
 

    
  </body>
</html>
