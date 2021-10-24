<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Run</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!------ Include the above in your HEAD tag ---------->

    

</head>
<body style="background-image : url(https://storage.googleapis.com/s.read.thai.run/home-background.jpg);
background-repeat: no-repeat;  
  background-size: cover;background-size: 100% 100%;  background-attachment: fixed;">
      
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

<br><br><br><br>
            <div class="container">
                <center><h1 class="wellt">Register Run</h1></center>
                <div class="col-lg-12 well">
                <div class="row">
                
                <?php if(isset($validation)): ?>
                    <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                <?php endif; ?>
                
                <form action="/regisRun/regis" id method="post">
                
                <div class="col-sm-12">
                <div class="row">
                <div class="col-sm-12">
                        <div class="row">
                        <div class="col-sm-6 form-group">
                                <center><label for="inputid_card" class="form-lable">ID</label><p>
                                <input type="text" name="id_card" class="form-control" id="inputforid_card" value=" <?php echo  $session->get('id_card'); ?>"></center>
                            </div>
                         
                          
                        </div>         
                  
                    <div class="col-sm-12">
                        <div class="row">
                        <div class="form-group">
                <label for="">Type</label>
                <br><input type="radio" name="category" value="1"> FUN RUN ระยะทาง 3กิโลเมตร ราคา 550$ 
                <br><input type="radio" name="category" value="2"> MINI MARATHON ระยะทาง 10กิโลเมตร ราคา 550$ 
                <br><input type="radio" name="category" value="3"> VIP ระยะทาง 3/10กิโลเมตร ราคา 1000$ 
                <br><input type="radio" name="category" value="5"> Super VIP ระยะทาง 15กิโลเมตร ราคา 1200$ 
                </div>          
                     
                    </div>
                         <button type="submit" class="btn btn-success"  >Comfirm</button>        
                         <a href="/user" class="btn btn-danger" >Cancel</a>
                </form> 
                </div>
    </div>
    </div>
           
                                






</body>
</html>