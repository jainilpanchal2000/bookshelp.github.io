<?php
    
    session_start();
    $ssid = $_POST['sid'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>BooksHelp/Profile</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BooksHelp</title>

    <!--Home Page Animation-->
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/animate.css">
    <link href="CSS/prettyPhoto.css" rel="stylesheet">
    <link href="CSS/style.css" rel="stylesheet">

    <link rel="stylesheet" href="CSS/footer.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="CSS/home/slider.css">

    <style>
        .info{
          width: 100%;
          text-align: center;
          text-align: justify;
          padding: 20px 200px;
          color: green;
          font-family : monospace;
        }

        .dropdown .dropbtn {
          border: none;
          outline: none;
          color: white;
          background-color: inherit;
        }

        .dropdown:hover .dropbtn {
          color: black;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {
          background-color: #ddd;
        }


        .dropdown:hover .dropdown-content {
          display: block;
        }

        .dropdown-submenu {
          position: relative;
        }

        .dropdown-submenu .dropdown-menu {
          top: 0;
          left: 100%;
          margin-top: -1px;
        }

        .btn{
          background: green;
          
        }
        
        .profile{
          text-align: center;
          border: 2px solid green;
          width: 100%;


        }
         
         
        .profilepic{
          border-radius:50%;
          border: 8px solid gray;
          box-shadow:rgba(0,0,0,0.1);
          margin : 20px;
            height: 255px;
            width: 255px;
        }
        .username{
          text-align: center;
          font-family: monospace;
          font-weight: 100px;
          padding: 0px 20px 20px 20px;
        }
        .update{
          color:white;
        }
        .update:hover{
          color:black;
        }
        
        pre{
            text-align: justify;
            margin-left: 25%;
            padding-left: 5%;
            width: 50%;
        }
        
        .bookphoto{
              height: 250px;
              width: 250px;
              box-shadow: rgba(0,0,0,0.1);
              border: 5px solid gray;
              margin-left: 300px;
              margin-right: 50px;
              border-radius: 10px;
              padding: 0px;
              margin-bottom: 60px;
          }
        
            
      </style>


</head>

<body>

    <header>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
              <div class="navigation">
                <div class="container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                    <div class="navbar-brand">
                      <a href="HOME.html"><h1><span>Books</span>Help</h1></a>
                    </div>
                  </div>
        
                  <div class="navbar-collapse collapse">
                    <div class="menu">
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation"><a href="HOME.php">Home</a></li>
                        <li role="presentation"><a href="book.php" class="active">Books</a></li>
                        <li role="presentation"><a href="about.php">About Us</a></li>
                        <li role="presentation"><a href="Contact.php">Contact</a></li>
                        <?php 
                        if(isset($_SESSION['logged']) && $_SESSION['logged']==true)
                        {
                          echo '<li role="presentation"><a href="#">'.$_SESSION['user'],'</a></li>';
                          echo '<li role="presentation"><a href="signout.php">Sign Out</a></li>';
                        }
                        else
                        {
                          echo '<li role="presentation"><a href="Login.php">Log In</a></li>';
                          echo '<li role="presentation"><a href="signup.php">Sign Up</a></li>';
                        }
                        ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
    </header>

    <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="HOME.php">Home</a></li>
        <li>Books</li>
        <?php 
            if(isset($_SESSION['logged']) && $_SESSION['logged']==true)
            {
                echo '<li class="dropdown">
                        <button class="dropbtn">'.$_SESSION['user'],' 
                          <i class="fa fa-caret-down"></i>
                        </button>
                          <div class="dropdown-content">
                            <a href="profile.php">Profile</a>
                            <a href="#">Upload a book</a>
                            <a href="signout.php">Log Out</a>
                          </div>
                      </li> ';
            }
            else
            {
              echo '<li>Your Account</li>';
            }
        ?>
        <li><a class="update" href="update.php">Update Profile</a></li>
      </div>
    </div>
  </div>


  <div class="profile">
  
      <?php
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "bookshelp";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
      
        if(mysqli_connect_error()){
            die('Connection error('.mysqli_connect_errno().')'.mysqli_connect_error());
        } else {
            $sql = "SELECT * from profile INNER JOIN signup ON profile.id = signup.id where signup.id='".$ssid."'";
            
            $rnum = $conn->query($sql);
            if($rnum->num_rows > 0){
                while($row = $rnum->fetch_assoc()){
                echo "<img src=".$row['photo']." class='profilepic'>";
                echo "<h2>".$row['name']."</h2>";
                    
                echo "<pre>
                       <h3>Email           : ".$row['email']."</h3> 
                       <h3>Mobile Number   : ".$row['mobile']."</h3>
                       <h3>Branch          : ".$row['branch']."</h3>
                       <h3>Year            : ".$row['year']."</h3>
                       <h3>College         : ".$row['college']."</h3>  
                       <h3>Address         : ".$row['address']."</h3>                       
                       </pre>";
                }
            }
            
            
            echo "<h2 style='text-align: center; padding:30px 0px;'>Books Uploaded By The User </h2>";
            
            $sql1 = "SELECT * from book where sid='".$ssid."'";
            
            $rnum = $conn->query($sql1);
            if($rnum->num_rows > 0){
                while($row = $rnum->fetch_assoc()){
                    
                        echo "<div class='row m-3'>";
                        echo "<img src=".$row['bookphoto']." class='bookphoto col-sm-6'></a>";
                        echo "<div class='col-sm-6'>";
                        echo "<pre style='margin-left: 50px;width: auto;'>";
                        echo "<h3> Name        : ".$row['bookname']."</h3>";
                        echo "<h3> Author Name : ".$row['authorname']."</h3>";
                        echo "<h3> Subject     : ".$row['subject']."</h3>";
                        echo "<h3> Department  : ".$row['branch']."</h3>";
                        echo "<h3> Price       : ".$row['price']."</h3>";
                        echo "</pre>";
                        echo "</div>";
                        echo "</div>";

                    }
            }
        }
      ?>
  
  </div>
    

  <!-- Footer -->
  <footer class="footer-distributed">

    <div class="footer-left">      
      <div class="navbar-brand">
        <a href="HOME.html"><h1><span>BOOKS</span>HELP</h1></a>
      </div>
      <p class="footer-links" style="display: inline; margin-left: 120px">
        <a href="#">Home</a>
        --
        <a href="#">Books</a>
        --
        <a href="#">About</a>
        --
        <a href="#">Contact</a>     
      </p>
    </div>
  
      
  
    <div class="footer-center">
  
      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>C-2, Anand</span> Gujarat, India</p>
      </div>
  
      <div>
        <i class="fa fa-phone"></i>
        <p>+91 81-53-047061</p>
      </div>
  
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:support@company.com">support@BooksHelp.com</a></p>
      </div>
  
    </div>
  
    <div class="footer-right">
  
      <p class="footer-company-about">
        <span>About the company</span>
        We value the art. We believe in loyalty. 
        Our motto is accuracy and perfection.
        We provide best collection over the world.
      </p>
  
      <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-github"></i></a>
      </div>
    </div>

    <div class="copyright">
        &copy; BooksHelp. All Rights Reserved.
        <div class="credits" style="font-family: initial;color: grey">
          Designed by <a href="#">Kaushal</a></div>
      </div>

      <div class="pull-right">
        <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
      </div>
  </footer>
    
    
    
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="JS/jquery.min.js"></script>
      <script src="JS/jquery-migrate.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="JS/bootstrap.min.js"></script>
      <script src="JS/jquery.prettyPhoto.js"></script>
      <script src="JS/jquery.isotope.min.js"></script>
      <script src="JS/wow.min.js"></script>
      <script src="JS/functions.js"></script>
</body>
</html>
