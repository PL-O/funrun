<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 

   
</head>
<body style="background-image :url(https://image.freepik.com/free-photo/wood-table-counter-with-concrete-grunge-texture-background-3d-rendering_41470-3623.jpg); 
background-repeat: no-repeat;  
  background-size: 100% 100%;  background-attachment: fixed;">
        
<nav class="navbar navbar-expand-lg navbar-drak fixed-top" >
        <a class="navbar-brand" href="/index">
          <img src="https://cdn.dribbble.com/users/4662105/screenshots/13914930/media/3a2e3c4f213c1346cfa838a69a5677cc.jpg?compress=1&resize=400x300"   height="60" alt="logo">
          </a>
      </nav>


<br><br><br><br>
             <div class="box-login">
                <div class="container mt-4">
                    <div class="row justify-content-md-center">
                        <div class="col-md-6">
                            <br><center><h1>Login</h1></center>
                            <hr>
                            <?php if(session()->getFlashdata('msg')): ?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('msg'); ?></div>
                            <?php endif; ?>
                            <form action="/login/auth" method="post">
                                <div class="mb-3">
                                    <label for="inputid_card" class="form-label">ID</label>
                                    <input type="text" name="id_card" class="form-control" id="inputforid_card" value="<?= set_value('id_card'); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="inputpassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="inputforpassword">
                                </div>
                               <center> <button type="submit" class="btn btn-success" style=width:20%>Confirm</button>        
                         <a href="/index" class="btn btn-outline-danger" >Cancel</a></center>
                                <a href="/register">Register?</a>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>



        




</body>
</html>