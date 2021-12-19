
<!-- THIS IS THE START OF HOME PAGE -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--  Font Awesome css 
    <link rel="stylesheet" href="css/all.min.css">

     google font 
    <link rel="stylesheet" href="https://fonts..com/css2?family=Ubgoogleapisuntu:wght@500;700&display=swap">-->

    <!--custom css -->
    <link rel="stylesheet" href="css/style.css">

    <title>HelpingBird</title>
</head>
<body>
<!-- Start navigation -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5" >
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">HelpingBird</a>
    <span class="navbar-text">easy to learn</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav custom-nav pl-5" >
      <li class="nav-item custom-nav-item"><a href="index.php"class="nav-link">Home</a></li> 

       <!-- <li class="nav-item custom-nav-item"><a href="#"class="nav-link">Courses</a></li> -->

       <li class="nav-item custom-nav-item"><a href="#"class="nav-link">My profile</a></li>

       <li class="nav-item custom-nav-item"><a href="#"class="nav-link">LogOut</a></li>

       <li class="nav-item custom-nav-item"><a href="#"class="nav-link" data-bs-toggle="modal"
        data-bs-target="#StuLoginModelcenter ">Login</a></li>

       <li class="nav-item custom-nav-item"><a href="#"class="nav-link"
         data-bs-toggle="modal" data-bs-target="#StuRegModelcenter ">Signup</a></li>
 
      </ul>
    </div>
  </div>
</nav>

<!-- End  navigation -->

<!--start video backgraund -->
<div class="container-fluid remove-vid-marg" >
 <div class="vid-parent">
  <video > 
    <source src="video/banvid.mp4" > 
  </video>
  <div class="vid-overlay">
     </div>
  </div>
 <div class="vid-content">
      <h1 class="my-content">Welcome to HelpingBird</h1>
      <small class="my-content">Easy to learn</small> <br>
      <a href="#"  class="btn btn-danger"
       data-bs-toggle="modal" data-bs-target="#StuRegModelcenter "> Get started</a>
     
      
   </div>
</div>
<!--end video backgraund -->

<!-- start text banner -->
<div class ="conteiner-fluid bg-danger text-banner">
  <div  class="row bottom-banner">
    <div class="col-sm" >
      <h5><i class="fas fa-book-open mr-3 "></i> learn and imlpeament</h5>
       </div>
<div class="col-sm">
  <h5><i class="fas fa-user mr-3"></i> Expert instractor</h5>
    </div>
<div class="col-sm">
  <h5><i class="fas fa-keyboard mr-3"></i> lifetime access</h5>
    </div> s
  </div>
</div> 
<!-- end text banner -->

<!--  start about section  -->
<div class="container-fluid p-4" style="background-color:#E9ECEF">
  <div class="container" style ="background-color:#E9ECEF">
     <div class="row text-center">
        <div class="col-sm">
           <h5>About Us</h5>
           <p>
             HelpingBird provides universel access and
            it is best platform to study for the students.
            it is absulutely free of cost with confortable 
            study material.
           </p>
          </div>
          <!-- <div class=" col-sm">
             <h5>Category</h5>
             <a class="text-dark" href="#"> Web Development</a><br>
             <a class="text-dark" href="#">Web Designing</a><br>
             <a class="text-dark" href="#">Android App dev</a><br>
             <a class="text-dark" href="#">iOS Development</a><br>
             <a class="text-dark" href="#">Data development</a> <br>    
          </div> -->
          
            <div class="Col-sm" >
              <h5>Contact Us </h5>
              <p>HelpigBird Pvt Ltd <br> Near Shahapur ARMIET COLLAGE <br> thane,
               maharastra <br> ph.0000000000   </p>
            </div>
        </div>
    </div>
</div>
<!--  end about section  -->


 <!-- start footer section -->
    <footer class=" container-fluid bg-dark text-center p-2">
      <small class="text-white">Copyright &copy; 2021 || Designed By
         E-Learing  || <a href="#Login" data-bs-toggle="modal"
         data-bs-target="#adminLoginModelcenter "> Admin Login</a>  
      </small>
    </footer>  
    <!-- end footer section -->

<!-- start of students registration model-->
<!-- Modal -->
<div class="modal fade" id="StuRegModelcenter" tabindex="-1" aria-labelledby="StuRegModelcenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="StuRegModelcenterLabel">Student Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
         <!-- start of Student registration form body -->
         <!-- start of Student registration form body -->
<form id="stuform">
          <div class="form-group">
            <i class= "fas-fa-user"></i><label for="stuname" class="pl-2 
            font-weight-bold" > Name </label><input 
            type="text"
            class="form-control" placeholder="Name" name="stuname" id="stuname">
          </div>
 
          <div
            class="form-group">
            <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 
            font-weight-bold"> Email </label><input 
            type="email"
            class="form-control" placeholder="Email"
            name="stuemail"  id="stuemail"> 
            <small class="form-text"> We'll never share your email with anyone else.</small>
          </div> 

          <div class="form-group">
            <i class="fas fa-key"></i><label for="stupass" 
            class="pl-2 
            form-weight-bold" > Password</label><input type="password"
            class="form-control" placeholder="password" name="stupass"   id="stupass" >
          </div>
         
         </form>
        <!-- end of Student registration form body  -->
       <!-- end of Student registration form body -->
        
      </div>
      <div class="modal-footer">
        <span id ="successMsg"></span>
        <button id="btn" type="button" class="btn btn-primary">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>
    <!-- end of students registration model-->
    
    <!-- start of students Login model-->
<!-- Modal -->
<div class="modal fade" id="StuLoginModelcenter" tabindex="-1" aria-labelledby="StuLoginModelcenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="StuLoginModelcenterLabel">Student Login </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <!-- start of Student Login form body -->
             <form id="StuLoginForm">
               <div class="form-group">
            <i class="fas fa-envelope"></i><label for="stuLogemail" class="pl-2 font-weight-bold">Email</label><input 
            type="email"
      
            class="form-control" placeholder="Email"
            name="stuLogemail" id="stuLogemail">
            </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="stuLogpass" 
            class="pl-2 form-weight-bold"> Password</label><input type="password"
            class="form-control" placeholder="password" name="stuLogpass" id="stuLogpass">
          </div>
         </form>
       <!-- end of Student Login form body -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="StuLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
       </div>
    </div>
  </div>
</div>
    <!-- end of students Login model-->
 
    <!-- start of Admin Login model-->
<!-- Modal -->
<div class="modal fade" id="adminLoginModelcenter" tabindex="-1" aria-labelledby="adminLoginModelcenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModelcenterLabel">Admin Login </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <!-- start of Admin Login form body -->
         <form id="adminLoginForm">
          <div class="form-group">
            <i class="fas fa-envelope"></i><label for="adminLogemail" class="pl-2 font-weight-bold">Email</label><input 
            type="email"
            class="form-control" placeholder="Email"
            name="adminLogemail" id="adminLogemail">
            </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="adminLogpass" 
            class="pl-2 form-weight-bold">New Password</label><input type="password"
            class="form-control" placeholder="password" name="adminLogpass" id="adminLogpass">
          </div>
         </form>
       <!-- end of Admin Login form body -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="StuLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
       </div>
    </div>
  </div>
</div>
    <!-- end of Admin Login model-->


<!-- jquery and boostrap javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

 <!--  Font Awesome js -->
<script src="js/all.min.js"></script>

<!-- student ajax call js -->
<script type="text/javascript" src="js/ajax.js"></script>
</body>
</html>

<!-- THIS IS THE END OF HOME PAGE -->
