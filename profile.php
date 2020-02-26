<?php
    session_start();

if(isset($_POST['sid']))
{
   $ssid = $_POST['sid'];
}
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
        
        .Myprofile{
            text-align: justify;
            margin-left: 30%;
            padding-left: 5%;
            width: 40%;
            box-shadow: 5px 5px gray;
            
        }
        .Myprofile h3{
            margin-top: -1%;
        }
        .bookphoto{
              max-width: 200px;
             height: 250px;
              box-shadow: 5px 5px #4e524e;
              border: 5px solid #93eb91;
              margin-left: 300px;
              margin-right: 50px;
              border-radius: 20px;
              padding: 0px;
              color: darkblue;
              margin-bottom: 60px;
              background-size: cover;
          }
          .bookbtn{
              background-color: gray;
              color: white;
              font-size: 17px;
              border: 1px solid black;
              margin: 8px;
              
          }
          .bookbtn:hover{
              background-color: white;
              color: green;
          }
           .col-sm-5 h3{
              border: none;
              margin-top: 2px;
            

          }
          .col-sm-5 pre{
              box-shadow: 5px 5px gray;
              text-align: justify;
          }
        
        
         @media screen and (max-width: 767px) { 
             .info, h3{
                 font-size: 1.5rem;
                 padding: 20px 20px;
             }                                                        
                .bookphoto{
              height: 130px;
              width: 100px;
              box-shadow: 5px 5px #4e524e;
              border: 5px solid #93eb91;
              margin-left: 20px;
             
              border-radius: 10px;
           
            
          }
              .col-sm-5 h3{
                 font-weight: bold; 
                  font-size: 10px;
                 padding: 0px;
                padding-left: 5px;
                 
                  margin-top: 4px;
             }
            
             .bookbtn{
                 margin: 5px;
                 font-size: 10px;
                 border: 1px solid black;
                 border-radius: 3px;
                
                 
             }
             .bookdiv{  
                 padding: 0%;
                 float: left;
                 margin: 0%;
                
                 width: 30%;
                 
             }
            
             .col-sm-5 pre{
               
                 padding: 0px;
               
        
                box-shadow: 5px 5px gray;
                 font-weight: bold; 
                 width: 55%;
             }
             .col-sm-5{
                 padding: 0px;
              
             }
             .row{
                 
                 width: 110%;
             }
             .Myprofile{
                width: 80%;
                margin-left: 10%;
                padding-left: 5%;
                  overflow-x: hidden;
           
             }
             .Myprofile h3{
                font-weight: bold; 
                font-size: 12px;
               margin-left: -50%;
                padding: 0%;
                margin-top: -10px;
               
                 display: inline;
                 
                 
               
             }
            
              .profilepic{
          border-radius:50%;
          border: 8px solid #9a7dfa;
          box-shadow:rgba(0,0,0,0.1);
          margin : 20px;
            height: 150px;
            width: 150px;
        }
          
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
                      <a href="HOME.php"><h1><span>Books</span>Help</h1></a>
                    </div>
                  </div>
        
                  <div class="navbar-collapse collapse">
                    <div class="menu">
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation"><a href="HOME.php">Home</a></li>
                        <li role="presentation"><a href="book.php">Books</a></li>
                        <li role="presentation"><a href="about.php">About Us</a></li>
                          <li role="presentation  "><a href="Help.php">Help    </a></li>
                        <li role="presentation"><a href="Contact.php">Contact</a></li>
                     <?php 
                        if(isset($_SESSION['userid']) /*&& $_SESSION['logged']==true*/)
                        {
                          echo '<li role="presentation"><a href="profile.php">'.$_SESSION['user'],'</a></li>';
                          echo '<li role="presentation"><a href="signout.php">Sign Out</a></li>';
                        }
                        else
                        {
                          echo '<li role="presentation"><a href="login/login.php">Log In</a></li>';
                          echo '<li role="presentation"><a href="login/signup.php">Sign Up</a></li>';
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
            if(isset($_SESSION['userid']))
            {
                echo '<li class="dropdown">
                        <button class="dropbtn">'.$_SESSION['user'],' 
                          <i class="fa fa-caret-down"></i>
                        </button>
                          <div class="dropdown-content">
                            <a href="profile.php">Profile</a>
                            <a href="uploadbook.php">Upload a book</a>
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
                   <?php
         if(isset($_SESSION['userid']) ){
          echo "<li><a href='uploadbook.php'>Upload Book</a></li>";
          
         }
          ?>
      </div>
    </div>
  </div>


  <div class="profile">
  
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
            if(isset($ssid)){
            $sql = "SELECT * from user  where user.uid='".$ssid."'";
            }
            else{
                 $sql = "SELECT * from user  where user.uid='".$_SESSION['userid']."'"; 
            }
            $rnum = $conn->query($sql);
            if($rnum->num_rows > 0){
                while($row = $rnum->fetch_assoc()){
               echo "<img src=".$row['uimage']." class='profilepic'>";
                 echo "<h2>".$row['uidusers']."</h2>";
                    
                echo "<pre class='Myprofile'>
                       <h3>Name            : ".$row['uidusers']."</h3>
                       <h3>Email           : ".$row['email']."</h3> 
                           
                    <a href='login/fetch_user.php'>message</a>
                       </pre>";
                }
            }
            
            
            echo "<h2 style='text-align: center; padding:30px 0px;'>Books Uploaded By The User </h2>";
            if(isset($ssid)){
            $sql1 = "SELECT * from book where uid='".$ssid."'";
            }
            else{
                   $sql1 = "SELECT * from book where uid='".$_SESSION['userid']."'";

            }
            
            $rnum = $conn->query($sql1);
            if($rnum->num_rows > 0){
                while($row = $rnum->fetch_assoc()){
                    
                        echo "<div class='row m-3'>";
                     echo "<div class='bookdiv'>";
                            echo "<img src=".$row['bookphoto']." class='bookphoto col-sm-6'  alt='No Photo Found'></a>
                            ";
                            echo "</div>";
                            echo "<div class='col-sm-5'>";
                            echo "<pre>";
                           
                            echo "<h3> Name        : ".$row['bookname']."</h3>";
                            echo "<h3> Author Name : ".$row['authorname']."</h3>";
                            echo "<h3> Subject     : ".$row['subject']."</h3>";
                            echo "<h3> Department  : ".$row['branch']."</h3>";
                            echo "<h3> Price       : ".$row['price']."</h3>";
    //                        $sid = $row['sid'];
                            echo "<form action='profile.php' method='POST'>";
                            echo "<input type='hidden' name='sid' value=".$row['uid'].">";
                            echo "     <input type='submit' value='See Details' class='bookbtn'>";
                            echo "</form>";
                            echo "</pre>";
                            echo "</div>";
                            echo "</div>";

                    }
            }
               unset($ssid);
        }
   
      ?>
  
  </div>
  
  </div>
    
    
    
    
    

            

  <!-- Footer -->
  <footer class="footer-distributed">

    <div class="footer-left">      
      <div class="navbar-brand">
        <a href="HOME.php"><h1><span>BOOKS</span>HELP</h1></a>
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
        <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x" style="color: grey"></i></a>
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