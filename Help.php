<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <title>BooksHelp/Help</title>

  <!-- Bootstrap -->
  <link href="CSS/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="CSS/font-awesome.min.css">
  <link rel="stylesheet" href="CSS/animate.css">
  <link href="CSS/prettyPhoto.css" rel="stylesheet">
  <link href="CSS/style.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="CSS/footer.css">

    <style>
    
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
        
        .topic-list{
            padding-bottom: 8px;
            font-size: 23px;
        }
        
        .query{
         
           float: right;
           margin-top: 2%;
            margin-left: 10%;
           width: 50%;
            
       
            background-color: transparent;
        }
           .query1{
         
           float: left;
           margin-top: 2%;
            margin-left: 10%;
           width: 50%;
              margin-bottom: 10%;
       
                background-color: transparent;
          
            
        }
        .data1{
            color: white;
            text-shadow:1px 1px 1px white;
        }
        
        .queryimage{
            width:30%; 
             margin-top: 2%;
            margin-left: 10%;
            border-radius: 10px;
          
            float: left;
            -webkit-box-shadow: 0 0 10px #fff;
        box-shadow: 0 0 10px #fff;
           
          
        }
           .queryimage2{
            width:30%; 
             margin-top: 2%;
           margin-right: 10%;
            border-radius: 10px;
           
            float: right;
           -webkit-box-shadow: 0 0 10px #fff;
        box-shadow: 0 0 10px #fff;
          
        }
        .q11{
            background-color: transparent;
           margin-bottom: 5%;
           
            height: 35%;
             width: 100%;
            display: inline-block;
            position: relative;
          
        }
        .q21{
              background-color: transparent;
           margin-bottom: 5%;
        
               height: 35%;
            width: 100%;
              display: inline-block;
              position: relative;
        }
        
        
        
      
        @media screen and (max-width: 767px) {
         .topic-list{
            font-size: 1.5rem;
        }
            .data1{
                font-size: 1.2rem;
                   text-shadow:0.5px 0.5px 0.5px white;
            }
            .query{
                margin-top: 0%;
                
                
            }
            .query1{
                margin-top: 0%;
            }
            .queryimage{
                   -webkit-box-shadow: 0 0 5px #fff;
        box-shadow: 0 0 5px #fff;
            }
            
            .queryimage2{
                   -webkit-box-shadow: 0 0 5px #fff;
        box-shadow: 0 0 5px #fff;
            }
           
}
        
        
        .base1{
            height: 100%;
            width: 100%;
            background-color: red;
            color: blue;
            background-image:  url(Images/imageedit_2_.jpg);
            background-position: center;
  background-repeat: no-repeat;
  background-size: cover;   
           
    
            
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
              <a href="HOME.php"><h1><span>BOOKS</span>help</h1></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="HOME.php">Home</a></li>
                <li role="presentation"><a href="book.php">Books</a></li>
                <li role="presentation"><a href="about.php">About Us</a></li>
                <li role="presentation  "><a href="Help.php" class="active">Help</a></li>
                <li role="presentation"><a href="Contact.php" >Contact</a></li>
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
        <li>Help</li>
        <?php 
            if(isset($_SESSION['userid']))
            {
                echo '<li class="dropdown">
                        <button class="dropbtn">'.$_SESSION['user'].' 
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
      </div>
    </div>
  </div>
   
  <div class="row" style="background: #08012e;  ">
          <div class="col-lg-12 text-center" style="background: #08012e;">
            <h2 class="section-heading text-uppercase" style="font-size: 35px;color:white;text-shadow:2px 2px 2px white;">Help </h2>
          
          </div>
        </div>

<!--
    <div class="row">
        <div class="col-lg-12 text-center">
    <h2 style="color:black">Uploading Books</h2>
   
    <div style="color:black;font-size:23px">
        <li class="topic-list" style="align:left">In order to upload books for donation or selling user have to be logged in.</li>
        <li class="topic-list" style="content-align:left">User must enter all required details about books to be uploaded.</li>
        <li class="topic-list"  style="content-align:left">User must enter all required details about books to be uploaded.</li>
            </div>
          
            
        </div>  
    </div>
  <div class="row">
        <div class="col-lg-12 text-center">
    <h2 style="color:black">Purchasing Books</h2>
   
    <div style="color:black">
        <li class="topic-list" style="align:left">In order to purchase books user have to be logged in.</li>
        <li class="topic-list" style="content-align:left">Find the book to purchase and open the corresponding details about seller.</li>
        <li class="topic-list" style="content-align:left">Try and contact with seller via contact number or email-id to buy books.</li>
    <li class="topic-list" style="content-align:left">If price is higher than you can pay then you can negotiate with the seller to lower the price.</li>
     <li class="topic-list" style="content-align:left">Meet the seller , check the condition of the book and then pay for it.</li>
            </div>
          
            
        </div>  
    </div>
-->
    
    <div class="base1">
    
         <div class="q11">
    
        <img src="Images/ss1upload.PNG" class="queryimage">
        <div class="query">
        <h2 class="data1">How to Upload a book</h2>
        <h3 class="data1">* In order to upload books user have to be logged in. </h3>
        <h3 class="data1">* After Log in you can upload book from directly your profile or from book section.</h3>
        <h3 class="data1">* User must enter all required details about books to upload.</h3>
        
             </div>
        </div>
        
        
      <div class="q21">
          <img src="Images/ss1upload.PNG" class="queryimage2">
        <div class="query1">
        <h2 class="data1">How to Upload a book</h2>
        <h3 class="data1">* In order to upload books user have to be logged in. </h3>
        <h3 class="data1">* After Log in you can upload book from directly your profile or from book section.</h3>
        <h3 class="data1">* User must enter all required details about books to upload.</h3>
        
        
        </div>
        </div>
        
      <div class="q11">
          <img src="Images/ss1upload.PNG" class="queryimage">
        <div class="query">
        <h2 class="data1">How to Upload a book</h2>
        <h3 class="data1">* In order to upload books user have to be logged in. </h3>
        <h3 class="data1">* After Log in you can upload book from directly your profile or from book section.</h3>
        <h3 class="data1">* User must enter all required details about books to upload.</h3>
          </div>
        
        </div>
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
        <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x" style="color:grey"></i></a>
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
