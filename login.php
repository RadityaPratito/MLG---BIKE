<?php
require_once ("koneksi.php");
$Username = "";
$Password = "";
$User = "";
$Pass = "";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $Username = $_POST['Username'];
    $query = "SELECT * FROM rental WHERE Username = '$Username'";
    $result = $koneksi->query($query);
    $row = $result->fetch_assoc();
    if(count($row)==0){
        $user = "Anda Belum Daftar!";
    }else{
        if($row['Password']==$_POST['Password']){
            session_start();
            $_SESSION["Username"]=$_POST["Username"];
            header("Location: home.html");
        }else{
            $pass = "Password Anda Salah!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLG BIKE - LOGIN</title>

<!-- Bootstrap -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

body { 
 background: url('backlog.jpg'); 
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;
}
.panel-default {
 opacity: 0.9;
 margin-top:180px;
}
.form-group.last {
 margin-bottom:0px;
}
.bg-1 { 
    color: white;
}

    </style>
</head>
<body>

    <div class="container" style="width:30%; margin-top:11%; box-shadow: 0 3px 20px rgba(0,0,0,0.5); padding:40px;">
    <h4 class="container-fluid bg-1 text-center" >LOGIN</h4>
        <hr>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">

<!-- Username -->

    <div class="form-grup bg-1">
        <br>
    <center><label>Username</label></center>
    <div class="input-group">
    <div class="input-group-prepend">
    <div class="input-group-text"><i class="fas fa-user"></i></div>
        </div>
    <input type="text" class="form-control" name="Username" value = "<?php echo $Username;?>" />
        <td><p><?php echo $User; ?></p></td>
        </div>
        </div>

<!-- Password -->

        <br>
    <div class="form-grup bg-1">
    <center><label>Password</label></center>
    <div class="input-group">
    <div class="input-group-prepend">
    <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
        </div>
    <input type="password" name="Password" class="form-control" >
        <td><p><?php echo $Pass; ?></p></td>
        </div>
        <br/>

<!-- Submit -->
 
        <br>
    <center><button type="submit" class="btn btn-success" style="width:30%;">LOGIN</button></center>
        <br>
    <center><a text-center href="register.php" style="font-size:12px">Not Registered? Register Here!</a></center>
        </form>
        </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>