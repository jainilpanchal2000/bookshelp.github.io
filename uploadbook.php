<?php
    session_start();
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
      .upload{
        text-align: center;

        width: 50%;
        margin-left: 25%;
      }
      .update1{
        text-align: center;
        padding:0px 20px;
        font-weight: 100px;
      }
      .updateinput{
        min-width: 350px;
        height: 40px;
        border:1px solid grey; 
      }
        #branch{
             min-width: 350px;
        height: 40px;
        border:1px solid grey; 
            margin-left:4.6%;
            
        }
        
        pre{
            border: 1px solid black;
        }
        @media screen and (max-width: 767px){
            #branch{
               margin-left: 22px;
                min-width: 100px;
                height: 20px;
                
            }
            .update1{
                font-size: 11px;
                padding: 0px;
                font-weight: bold;
                margin-top: -15px;
             
                

            }
            .updateinput{
                min-width: 100px;
                height: 20px;
                
            }
            .upload{
                width: 95%;
                margin-left: 2.5%;
            }
            .br{
                margin-left: -5%;
            }
            .imgblock{
                margin-left: 18%;
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
                      <a href="HOME.html"><h1><span>Books</span>Help</h1></a>
                    </div>
                  </div>
        
                  <div class="navbar-collapse collapse">
                    <div class="menu">
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation"><a href="HOME.php" class="active">Home</a></li>
                        <li role="presentation"><a href="book.php">Books</a></li>
                        <li role="presentation"><a href="about.php">About Us</a></li>
                        <li role="presentation  "><a href="Help.php">Help</a></li>
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
            <li>About Us</li>
            <?php 
                if(isset($_SESSION['userid']))
                {
                echo '<li>'.$_SESSION['user'],'</li>';
                }
                else
                {
                echo '<li>Your Account</li>';
                }
            ?>
        </div>
        </div>
    </div>


    <h2 style="color:green;text-align: center;padding:20px 0px;">Upload a Book to Help other </h2>

    <form action="insertuploadbook.php" name="book" method="POST" class="upload" enctype="multipart/form-data"><pre>
        <h4 class="update1"> Book Name         :    <input class="updateinput" type="text" name="bname" placeholder="Enter Book Name" required><br/></h4>
        <h4 class="update1"> Author Name       :    <input class="updateinput" type="text" name="aname" placeholder="Author Name of Book" required><br/></h4>
        <h4 class="update1"> Subject           :    <input class="updateinput" type="text" name="sub" placeholder="Book belong to which subject" required><br/></h4>
        <h4 class="update1 br"> Related-Branch    :<select id="branch" name="branch" >
        <option value="Computer/IT">Computer/IT/CSE</option>
        <option value="Civil">Civil</option>
        <option value="Mechanical">Mechanical</option>
        <option value="Electrical">Electrical</option>
        <option value="Electronics">Electronics</option>
        <option value="Production">Production</option>
       </select></h4>
        <h4 class="update1"> Price             :    <input class="updateinput" type="number" name="price" placeholder="60% price of original price" required><br/></h4>
        <h4 class="update1 imgblock">Book's Photo      :    <input style="text-align:center;display: inline-block;" type="file" name="pic" accept="image/*" required></h4><br/>
        
        </pre>
        <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button></div><br>


    </form>


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
    
    <script>
        function f_validate(){
            var name = document.book.bname.value;
            if(!(name.match(/^[A-Z a-z]+$/)))
            {
                alert("Book Name must contain only characters");
                return false;
            }
            
            var name1 = document.book.aname.value;
            if(!(name.match(/^[A-Z a-z]+$/)))
            {
                alert("Author Name must contain only characters");
                return false;
            }
            var mail = document.book.price.email.value;
            if(!(mail.match(/^[0-9]{1,5}))
            {
                alert("Email is Invalid");
                return false;
            }
            var photo = document.book.pic.value;
            var extension = photo.split('.').pop().toLowerCase();
            if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1)
            {
                alert("Invalid Image file format");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>