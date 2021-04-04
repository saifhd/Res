<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Squadfree Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <style>
 
  #image{
    background-image: url({{asset('storage/images/event.png')}}); 
    background-repeat: no-repeat; 
    height:800px;
    background-size:cover;
  }
  .hidden-spacer {
      height: 56px;
  }
  .list{
    padding-left:10px;
  }
  .navbar{
    padding-right:20px;
  }

  
  </style>
  
 



  
</head>
<body>
<?php
$url=explode("/",Request::url());
    // dd(in_array("event1",$url));
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbar">
  <a class="navbar-brand" href="#">Event Planner</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto " >
      <li class="nav-item list">
        <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item list">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item dropdown list <?php if(in_array("event",$url)==true){ echo 'active'; } ?>">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Events
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('event')}}">Upcomming</a>
          <a class="dropdown-item" href="{{route('event.form')}}">Register</a>
          
        </div>
      </li>
      <li class="nav-item list">
        <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">About Us</a>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
 @yield('content')
<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <div class="row">
      <div class="col-lg-4 col-md-6">
      
            <div class="footer-info" data-aos="fade-up" data-aos-delay="50">
              <h3>Event Planner</h3>
              <p class="pb-3"><em>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi officia vero eius. Dicta eveniet quaerat delectus veritatis? Eligendi officiis, tenetur incidunt earum quaerat autem expedita ipsam iusto saepe, repellendus amet!</em></p>
              <p>
                 
                NO:10,Peradeniya, <br>
                Kandy<br><br>
                <strong>Phone:</strong> +94 81 23 33 333<br>
                <strong>Email:</strong> info@planner.com<br>
              </p>
              
            </div>
          </div>
      
      <div class="col-lg-8 col-md-6">
            <section class="">
              <form action="{{route('store.newsletter')}}" method="post">
              @csrf
                <!--Grid row-->
                <div class="row d-flex justify-content-center">
                  <!--Grid column-->
                  <div class="col-auto">
                    <p class=" text-center">
                      <strong>Sign up for our newsletter</strong>
                    </p>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  
                
                  <div class="col-md-5 col-12">
                    <!-- Email input -->
                    
                      <div class="form-outline form-white mb-4">
                        <input type="email" id="form5Example2" name="email" class="form-control" required=""/>
                        <label class="form-label" for="form5Example2">Email address</label>
                      </div>
                    
                    
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-auto">
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-outline-light mb-4">
                      Subscribe
                    </button>
                  </div>
                  
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </form>
            </section>
            <section class="mb-4">
              <p>
                Subscribe Us To Get Future Updates
              </p>
            </section>
      </div>
    </div>
    
   
    
    
    
    
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="#">EventPlanner.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

 
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>


<script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
</script>  

</body>


</html>