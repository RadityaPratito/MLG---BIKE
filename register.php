<?php
require_once('koneksi.php');
$Username="";
$Password="";
$usereror="";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $user = $_POST['USERNAME'];
    $query = "SELECT * FROM rental WHERE Username = '$Username'";
    $result = $koneksi->query($query);
    $row = $result->fetch_assoc();
    if ($row['username'] != ""){
        $usereror = "Username Sudah Digunakan!";
    }else{
        $user = $_POST ['USERNAME'];
        $pass = $_POST ['PASSWORD'];
        $query = "insert into resto (username,password) values ('$Username','$pPassword')";
        $koneksi->query($query);
        header("Location: login.php");
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLG BIKE - REGISTER</title>

<!-- Bootstrap -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico">
    <style>

body { 
 background: url('background 2.jpg!d'); 
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
    <h4 class="container-fluid bg-1 text-center" >REGISTER</h4>
        <hr>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">

<!-- Username -->

        <br>
    <div class="form-grup bg-1">
    <center><label>Username</label></center>
    <div class="input-group">
    <div class="input-group-prepend">
    <div class="input-group-text"><i class="fas fa-user"></i></div>
        </div>
    <input type="text" class="form-control" name="Username" value = "<?php echo $Username;?>" />
        <td><p><?php echo $Username; ?></p></td>
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
        <td><p><?php echo $Password; ?></p></td>
        </div>
        <br/>

<!-- Submit -->
 
        <br>
    <center><button type="submit" class="btn btn-success" style="width:30%;">SUBMIT</button></center>
        <br>
    <center><a text-center href="login.php" style="font-size:12px">Have An Account? Login Here!</a></center>
        </form>
        </div>
</body>
</html>