<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLG BIKE - ADD DATA</title>

    <!-- Bootstrap -->

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <style>

body { 
 background: url('#'); 
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
    color: black;
}

</style>
</head>
<body>

<div class="container" style="width:30%; margin-top:11%; box-shadow: 0 3px 20px rgba(0,0,0,0.5); padding:40px;">
<h4 class="text-center" >ADD DATA</h4>
<hr>
<form action="proses.php" method="POST">

<!-- Username -->

    <div class="form-grup bg-1">
        <br>
<center><label>Username</label></center>
    <div class="input-group">
    <div class="input-group-prepend">
    <div class="input-group-text"><i class="fas fa-user"></i></div>
        </div>
    <input type="text" class="form-control" name="Username"/>
        </div>
        </div>

<!-- Password -->
        <br>               
    <div class="form-grup bg-1">
    <center><label>Password</label></center>
    <div class="input-group">
    <div class="input-group-prepend">
    <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
    <input type="Password" name="Password" class="form-control" >
        </div>
        </div>
        <br>

<!-- Submit -->

        <br/>
    <center><button type="Submit" class="btn btn-primary" style="width:30%;">ADD</button></center>
        <br>
</form>
</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
</body>
</html>