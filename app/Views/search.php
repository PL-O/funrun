<?php $session = session(); ?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<title>Search Register Run</title>



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
        
<!-- Latest compiled and minified CSS -->
    <div class="container mt-4">
    <center><h1>Search Resgister Run</h1></center> <br><br>
   
            <div class="mt-3">
                <table class="table table-bordered" id="Search">
                <thead>
                    <tr>
                        <th>ลำดับเลขวิ่ง</th>
                        <th>เลขบัตรประชาชน</th>
                        <th>ชื่อ</th>
                        <th>รายละเอียด</th>
                        <th>ระยะทาง</th>
                        <th>ราคา</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                     
                    <?php foreach($regis as $data): ?>
                    <tr>
                        <td><?php echo $data['ID']; ?></td>
                        <td><?php echo $data['member']; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['category_name']; ?></td>
                        <td><?php echo $data['length']; ?></td>
                        <td><?php echo $data['price']; ?>$</td>
                    </tr>
                    <?php endforeach; ?>
                   
                </tbody>
                
                </table>
            </div>
            </div>

            
 
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
            <script>
                $(document).ready( function () {
                $('#Search').DataTable();
            } );
            </script>
            


               
</body>
</html>