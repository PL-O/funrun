<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!------ Include the above in your HEAD tag ---------->
    
</head>
<body style="background-image :url(https://image.freepik.com/free-photo/wood-table-counter-with-concrete-grunge-texture-background-3d-rendering_41470-3623.jpg); 
background-repeat: no-repeat;  
  background-size: 100% 100%;  background-attachment: fixed;">

<nav class="navbar navbar-expand-lg navbar-drak fixed-top"  >
        <a class="navbar-brand" href="/index">
          <img src="https://cdn.dribbble.com/users/4662105/screenshots/13914930/media/3a2e3c4f213c1346cfa838a69a5677cc.jpg?compress=1&resize=400x300"   height="60" alt="logo">
          </a>
      </nav>

<br><br>
          <div class="container">
                <br><br><center> <h1 class="wellt">Register</h1></center>
                <div class="col-lg-12 well">
                <div class="row">
                
                <?php if(isset($validation)): ?>
                    <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                <?php endif; ?>
                
                <form action="/register/save" id method="post">
                   <center>  <div class="col-sm-12">
                        <div class="row">
                        <div class="col-sm-6 form-group">
                               <label for="inputid_card" class="form-lable">ID</label>
                                <input type="text" name="id_card" placeholder="Please enter your ID" class="form-control" id="inputforid_card" value="<?= set_value('id_card'); ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="inputname" class="form-lable">Name</label>
                                <input type="text" name="name" placeholder="Please enter your Name" class="form-control" id="inputforname" value="<?= set_value('name'); ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="inputage" class="form-lable">Age</label>
                                <input type="text" name="age" placeholder="Please enter your Age" class="form-control" id="inputforage" value="<?= set_value('age'); ?>">
                            </div>
                        </div>                            
                    <div class="form-group">
                        <label for="inputemail" class="form-lable">E-mail</label>
                        <input type="email" name="email" placeholder="Please enter your E-mail" class="form-control" id="inputforemail" value="<?= set_value('email');?>">
                    </div>    
                    <div class="form-group">
                    <label for="inputpassword" class="form-lable">Password</label>
                        <input type="password" name="password" placeholder="Please enter your Password" class="form-control" id="inputforpassword">
                    </div>     
                    <div class="form-group">
                    <label for="inputconfpassword" class="form-lable">Password again</label>
                    <input type="password" name="confpassword" placeholder="Please enter your Password Again" class="form-control" id="inputforconfpassword" >
                    </div>           
                     
                    </div>
                         <button type="submit" class="btn btn-success" style=width:20%>Confirm</button>        
                         <a href="/index" class="btn btn-outline-danger" >Cancel</a>
                         <a href="/login">Login?</a></center>
                </form> 
                </div>
    </div>
    </div>
           
                                






</body>
</html>