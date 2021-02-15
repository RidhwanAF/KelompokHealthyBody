<?php
// Lampirkan dbconfig 
require_once "dbconfig.php";
// Cek status login user 
if ($user->isLoggedIn()) {
    header("location: profile.php"); //redirect ke index 
}
//jika ada data yg dikirim 
if (isset($_POST['kirim'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Proses login user 
    if ($user->login($email, $password)) {
        header("location: home.php");
    } else {
        // Jika login gagal, ambil pesan error 
        $error = $user->getLastError();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login | HealthyBody</title>
    <link rel="stylesheet" href="style.css?v=1.8" media="screen" title="no title" charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login | HealthyBody</title>
    <link rel="icon" href="../image/tittle.png">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light " style=" background-color: #fdff7e00;">
        <a class="navbar-brand" href="#"><img src="../image/logolanding2.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a style="color:#fdff7e00">--------------------------------------------------------------</a>
                <a class="nav-item nav-link " href="../index.html">Home
                    <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="../about.html">About
                    <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="
				../article.html">Facts <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="login.php">| Login |
                    <span class="sr-only">(current)</span></a>

            </div>
        </div>
    </nav>
    <div class="login-page">
        <div class="form">
            <form class="login-form" method="post">
                <?php if (isset($error)) : ?>
                    <div class="error">
                        <?php echo $error ?>
                    </div>
                <?php endif; ?>
                <div class="judul">
                    <b>Login </b>
                </div>
                <input type="email" name="email" placeholder="email" required /><br>
                <input type="password" name="password" placeholder="password" required /><br>
                <label> <button type="submit" name="kirim" style="border-top-left-radius: 30px;
   border-bottom-left-radius: 30px;
   border-bottom-right-radius:30px ;
   border-top-right-radius: 30px;">login</button></label><br>
                <p class="message">Not registered? <a href="register.php">Create an account</a></p>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>