<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>MLG BIKE - CRUD</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
     
<!-- Bootstrap -->
        
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>

body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
}
p {font-size: 16px;}
.margin {margin-bottom: 45px;}
.bg-1 { 
    background-color: darkgoldenrod;
    color: white;
}
.bg-2 { 
    background-color: #f6f6f6;
    color: #555555;
}
.container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
}
.navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
}
.navbar-nav  li a:hover {
    color: #1abc9c !important;
}
</style>
</head>
<body>

<!-- Navbar -->

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.html">MLG BIKE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="glyphicon glyphicon-home logo-small" href="home.html">HOME</a></li>
        <li><a class="glyphicon glyphicon-plus-sign logo-small" href="register.html">REGISTER</a></li>
        <li><a class="glyphicon glyphicon-log-in logo-small" href="login.html">LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php 

?></i>
</li>

    </ul>
    </div>
    </div>
    </nav>

    <br>
  <div class="container-fluid bg-1 text-center">
  <h1 class="margin"><strong>MLG BIKE</strong></h1>
  <img src="logo.jpg" class="img-responsive img-circle margin" style="display:inline" alt="bike" width="350" height="350">
  <h3>CRUD DATA USER</h3>
    </div>
    </div>
    </div>
    <br>

    <br>
  <div class="container-fluid bg-2 text-center">
  <table class="table">
  <thead class="thead-dark">
    <tr>
  <th class="col text-center">Username</th>
  <th class="col text-center">Password</th>
    </tr>

</thead>

<?php
    
  include 'koneksi.php';
    $query = "SELECT * FROM rental";
    $data = $koneksi->query($query);
  while ($d = mysqli_fetch_array($data)){
?>
    <tr>
  <td><?php echo $d['Username'];?></td>
  <td><?php echo $d['Password'];?></td>
    <td>
  <a href='add.php?ID="<?php echo $d['ID'];?>"'><button type="button" class="btn btn-dark">ADD</button></a>
  <a href='update.php?ID="<?php echo $d['ID'];?>"'><button type="button" class="btn btn-dark">UPDATE</button></a>
  <a href='delete.php?ID="<?php echo $d['ID'];?>"'><button type="button" class="btn btn-dark">DELETE</button></a>
    </td>
    </tr>
<?php
  }
?>
    </table>    
    </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
  </html>