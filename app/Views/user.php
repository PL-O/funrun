<?php $session = session(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<title>Home</title>



</style>
</head>
<body >
      
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" >
        <a class="navbar-brand" href="/user">
          <img src="https://cdn.dribbble.com/users/4662105/screenshots/13914930/media/3a2e3c4f213c1346cfa838a69a5677cc.jpg?compress=1&resize=400x300"   height="60" alt="logo">
          </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav justify-content-center">

            
            <li class="nav-item">
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false" style="color:white">
        Register for a run and search.
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
           <li> <a  href="/search">1.Search a running register</a></li>
               <li> <a  href="/regisrun" role="button" >2.Register to run</a></li>
            </li>
          </ul>
       
      
        </div>
        
       <center><h5 style="color:white"class="mr-2"><br></user:br><?php echo  $session->get('name'); ?></h5>
        <a class="btn btn-danger " href="/logout">Logout</a>
            </li>             
        </nav>


              
   
        <br><br>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <br>
        <div class="carousel-inner">
          <div class="carousel-item active">
           <center> <img src="https://stadiumth.s3.ap-southeast-1.amazonaws.com/upload/1618551877382.jpg" class="d-block " alt="image" style="width:90%;height:525px;"></center>
            <div class="carousel-caption d-none d-md-block">
             <h5>   </h5>
              <p>   </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.runex.co/1000/runex-events/photo/11c08650-2935-4458-aa3e-5e03d8f01c4f.png" class="d-block w-100" alt="image" style="width:200px;height: 525px;">
            <div class="carousel-caption d-none d-md-block">
              <h5>  </h5>
              <p>  </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://www.ktc.co.th/sites/ktc/hilightArticleImg/1545256000995/content-%E0%B8%9D%E0%B8%B6%E0%B8%81%E0%B8%8B%E0%B9%89%E0%B8%AD%E0%B8%A1%E0%B8%A7%E0%B8%B4%E0%B9%88%E0%B8%87-10-%E0%B8%81%E0%B8%B4%E0%B9%82%E0%B8%A5%E0%B9%80%E0%B8%A1%E0%B8%95%E0%B8%A3-10-big.jpg" class="d-block w-100" alt="image" style="width: 350px;height: 525px;">
            <div class="carousel-caption d-none d-md-block">
              <h3>  </h3>
              <p>  </p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


           
</body>
</html>