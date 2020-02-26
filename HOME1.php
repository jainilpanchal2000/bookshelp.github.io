<?php
  session_start();
  header('Cache-Control: no-cache, must-revalidate');
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
?>
<!DOCTYPE html>
<html>
    <head>

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
        .book{
          /* align-items: center; */
          text-align: center;
          padding: 49px 20px;
          align-content: center; 
        }
        .container26{
          box-shadow: 0 0 35px rgba(0,0,0,0.1);
          padding: 20px 30px;
          /* text-align: center; */
          /* position:relative; */
          display: inline-block;
          text-align: justify;
          width: 60%;
          border-radius: 10px;
        }
        .container26::before{
          color: #71c55d;
          content: "";
          display: inline-block;
          font: 70px/1 FontAwesome;
          position: absolute;
          right: 43px;
          /* text-align: left; */
          top: -29px;
        }
        .container26 h2{
            text-align: center;
            color: green;
            font-family: fantasy;
            margin-bottom: 15px;
        }
        .container26 p{
          text-align: justify;
          color: gray;
          font-size: 18px;
          font-family: monospace;
        }



      a[ class="btn-slide animation animated-item-3" ]:target ~ #start .book {
          -webkit-transform: translateY( 0px);
          transform: translateY( 0px );
      }

      </style>


    </head>
<body>



    <!-- Navigation Bar -->
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
                        <li role="presentation"><a href="HOME.php" class="active">Home</a></li>
                        <li role="presentation"><a href="book.php">Books</a></li>
                        <li role="presentation"><a href="about.php">About Us</a></li>
                        <!-- <li role="presentation"><a href="blog.html">Blog</a></li> -->
                        <li role="presentation  "><a href="Help.php">Help</a></li>
                        <li role="presentation"><a href="Contact.php">Contact</a></li>
                        <li role="presentation"><a href="#"><?php echo $_SESSION['user'] ?></a></li>
                        <li role="presentation"><a href="signout.php">Sign Out</a></li>
                        <!-- <?php 
                        if($_SESSION['isLogged']==true)
                        {
                          echo $_SESSION['name'];
                          echo '<li role="presentation"><a href="#">Sign Out</a></li>';
                        }
                        else
                        {
                          echo '<li role="presentation"><a href="Login.php">Log In</a></li>';
                          echo '<li role="presentation"><a href="signup.php">Sign Up</a></li>';
                        }
                        ?> -->
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
    </header>

    <section id="main-slider" class="no-margin">
            <div class="carousel slide">
              <div class="carousel-inner">
                <div class="item active" style="background-image: url(img/b3.jpg)">
                  <div class="container">
                    <div class="row slide-margin">
                      <div class="col-sm-6">
                        <div class="carousel-content">
                          <h2 class="animation animated-item-1">Welcome to <span style="color: chartreuse">BooksHelp</span></h2>
                          <p class="animation animated-item-2" style="color:black;"><b>So many books, so little time...</b></p>
                          <a class="btn-slide animation animated-item-3" href="#start">Let's start</a>
                        </div>
                      </div>
        
                      <div class="col-sm-6 hidden-xs animation animated-item-4">
                        <div class="slider-img">
                          <!-- <img src="img/b9.png" class="img-responsive"> -->
                        </div>
                      </div>
        
                    </div>
                  </div>
                </div>
                <!--/.item-->
              </div>
              <!--/.carousel-inner-->
            </div>
            <!--/.carousel-->
    </section>
    <!--/#main-slider-->

    <div class="book" id="start">

              <div class="container26">
                        <h2>Books</h2>
                        <p>Books play a significant role in our life. 
                            They say that “When you open a book, you open a new world”. 
                            I believe that everyone would agree with this statement as books have become inevitable to mankind. 
                            For the majority of people, books are part of their everyday life.  
                            A book is like a best friend who will never walk away from you.
                            A book communicates knowledge, and not only knowledge but wisdom of all kinds. 
                            They say that “The more you read, the more well-read you are”. 
                            In simple terms what this means is that the more you read the more exposed you are, your attitudes, your ideas and your imagination changes. 
                            I believe that my personality, behaviour, ideas and knowledge are all built on the books I have read. Nothing can add to our intellect more than reading a book.</p>
              </div>

    </div>

<!--=============================SLIDER================================================-->
    <div class="slideshow26">

      <div class="myslide26">
        <q>A room without books is like a body without a soul.</q>
        <p class="author26"> Marcus Tullius Cicero</p>
      </div>
      
      <div class="myslide26">
        <q>Books are the quietest and most constant of friends; they are the most accessible and wisest of counselors, and the most patient of teachers.</q>
        <p class="author26"> Charles W. Eliot</p>
      </div>
      
      <div class="myslide26">
        <q>So many books, so little time.</q>
        <p class="author26"> Frank Zappa</p>
      </div>
      
      <a class="prev26" onclick="plusSlides(-1)">❮</a>
      <a class="next26" onclick="plusSlides(1)">❯</a>
      
      </div>
      
      <div class="dotc26">
        <span class="dot26" onclick="currentSlide(1)"></span> 
        <span class="dot26" onclick="currentSlide(2)"></span> 
        <span class="dot26" onclick="currentSlide(3)"></span> 
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

      <script src="JS/home/slider.js"></script>


</body>
</html>