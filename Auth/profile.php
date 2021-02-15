<?php
// Lampirkan dbconfig 
require_once "dbconfig.php";
// Cek status login user 
if (!$user->isLoggedIn()) {
    header("location: login.php"); //Redirect ke halaman login 
}
// Ambil data user saat ini 
$currentUser = $user->getUser();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css?v=1.6" media="screen" title="no title" charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Profile | HealthyBody</title>
    <link rel="icon" href="../image/tittle.png">
</head>

<body class="bgprofile">
    <nav class="navbar navbar-expand-lg navbar-light " style=" background-color: #fdff7e00;">
        <a class="navbar-brand" href="#"><img src="../image/logolanding2.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a style="color:#fdff7e00">---------------------------------------</a>
                <a class="nav-item nav-link " href="home.php">Home
                    <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="../body_check/bodycheck.php">Body Check
                    <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="../workout/workout.php">Workout
                    <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href=" about2.html">About
                    <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="
				articlelog.html">Facts <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="profile.php">| Profile |
                    <span class="sr-only">(current)</span></a>


            </div>
        </div>
    </nav>

    <div class="hello">
        <div class="info">
            <h1>Profile</h1>
            <img src="img/profile.png" width="80px" height="80px">
            <br>Nama : <?php echo $currentUser['nama']; ?>
            <br>Email : <?php echo $currentUser['email']; ?>

        </div>
        <label><a href="logout.php"><button type="button" style="border-top-left-radius: 30px;
   border-bottom-left-radius: 30px;
   border-bottom-right-radius:30px ;
   border-top-right-radius: 30px;">Logout</button></a></label>


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>