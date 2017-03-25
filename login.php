<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user'])!="" ) {
  header("Location: index.php");
  exit;
 }
 
 $error = false;
 
 if( isset($_POST['btn-login']) ) { 
  
  // prevent sql injections/ clear user invalid inputs
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  // prevent sql injections / clear user invalid inputs
  
  if(empty($email)){
   $error = true;
   $emailError = "Please enter your email address.";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  }
  
  if(empty($pass)){
   $error = true;
   $passError = "Please enter your password.";
  }
  
  // if there's no error, continue to login
  if (!$error) {
   
   $password = hash('sha256', $pass); // password hashing using SHA256
  
   $res=mysql_query("SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
   $row=mysql_fetch_array($res);
   $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
   
   if( $count == 1 && $row['userPass']==$password ) {
    $_SESSION['user'] = $row['userId'];
    header("Location: index.php");
   } else {
    $errMSG = "Incorrect Credentials, Try again...";
   }
    
  }
  
 }
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>TriTechathlon</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
	<link rel="shortcut icon" href="images/favicon.ico" />    
</head>

<body>

    <div id="page-wrapper">

        <!-- Header -->
        <header id="header">
            <h1><a href="index.php">TriTechathlon</a></h1>
            <nav>
                <a href="#menu">Menu</a>
            </nav>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <div class="inner">
                <h2>Menu</h2>
                <ul class="links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">about</a></li>
                    <li><a href="scorecard.php">Scorecard</a></li>
                    <li><a href="login.php">LogIn/SignUp</a></li>
                </ul>
                <a href="#" class="close">Close</a>
            </div>
        </nav>

        <!-- Wrapper -->
        <section id="wrapper">
            <header>
                <div class="inner">
                    <h2>About</h2>
                    <p>About TriTechathlon IIIT - A.</p>
                </div>
            </header>

            <!-- Content -->
            <div class="wrapper">
                <div class="inner">

                    <p>
                        <center>
                            <div id="login-form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
     <div class="col-md-12">
        
         <div class="form-group">
             <h2 class="">Sign In.</h2>
            </div>
        
         <div class="form-group">
             <hr />
            </div>
            
            <?php
   if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">
             <div class="alert alert-danger">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
             <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />
                </div>
                <span class="text-danger"><?php echo $emailError; ?></span>
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <a href="register.php">Sign Up Here...</a>
            </div>
        
        </div>
   
    </form>
    </div> 
                        </center>
                    </p>

                </div>
            </div>

        </section>

        <!-- Footer -->
        <section id="footer">
            <div class="inner">
                <h2 class="major">Get in touch</h2>
                <p>Fill the form below to get in touch!</p>
                <form method="post" action="#">
                    <div class="field">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" />
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" />
                    </div>
                    <div class="field">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="4"></textarea>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Send Message" /></li>
                    </ul>
                </form>
                <ul class="contact">
                    <li class="fa-home">
                        IIIT Allahabad<br /> Devghat, Jhawla<br /> Allahabad, UP 211012
                    </li>
                    <li class="fa-phone">+91 94140 38742</li>
                    <li class="fa-envelope"><a href="#">information@tritechathlon.iiita.ac.in</a></li>
                    <li class="fa-twitter"><a href="#">twitter.com/tritechathlon-iiita</a></li>
                    <li class="fa-facebook"><a href="#">facebook.com/tritechathlon-iiita</a></li>
                    <li class="fa-instagram"><a href="#">instagram.com/tritechathlon-iiita</a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; TriTechathlon - IIITA. All rights reserved.</li>
                    <li>Design: Piyush Arora</li>
                </ul>
            </div>
        </section>

    </div>

    <!-- Scripts -->
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/login_effect.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
<?php ob_end_flush(); ?>