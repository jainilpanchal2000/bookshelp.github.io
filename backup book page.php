<?php
    session_start();
$results_per_page = 5;

            
            if (isset($_GET["page"])) { $page  = $_GET["page"]; }
            else { $page=1; }; 
            $start_from = ($page-1) * $results_per_page;

$total_pages;
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

      <style>
     
        .info{
            
          width: 100%;
          text-align: center;
          text-align: justify;
          padding: 20px 200px;
          color: green;
          
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
          
          .books{
            width: 80%;
            padding: 10px;
            align-content: center;
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
        
          .search1{
              width: 150px;
              background-color: #9cd9ac;
              border-radius: 5px;
              margin-left: 5px;
              color: black;
              border: silver;
          }
          .searchbtn{
              background-color: darkgreen;
              color: white;
              border-radius: 8px;
          }
          .searchbtn:hover{
              background-color: lightgreen;
              color:black;
          }
         .col-sm-5 h3{
              border: none;
              margin-top: 2px;
            

          }
          .col-sm-5 pre{
              box-shadow: 5px 5px gray;
          }
            
          
          .sortbuttons{border-style: none;
              color:black;
              background-color:transparent;
              width: 100%;
              height: 100%;
              font-size: 15px;
              text-align: left;
              outline: none;}
          
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
              h3{
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
                
                 width: 40%;
                 
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
                
                 
                 width: 130%;
             }
            
            
           
          
        }
        .pagination {
  display: inline-block;
            margin-left: 20%;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
}
          .pagination a:hover:not(.active) {background-color: #ddd;}
        
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
                      <a href="HOME.php"><h1><span>Books</span>Help</h1></a>
                    </div>
                  </div>
        
                  <div class="navbar-collapse collapse">
                    <div class="menu">
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation"><a href="HOME.php">Home</a></li>
                        <li role="presentation"><a href="clearbook.php" class="active">Books</a></li>
                        <li role="presentation"><a href="about.php">About Us</a></li>
                          <li role="presentation  "><a href="Help.php">Help    </a></li>
                        <li role="presentation"><a href="Contact.php">Contact</a></li>
                        <?php 
                        if(isset($_SESSION['logged']) && $_SESSION['logged']==true)
                        {
                          echo '<li role="presentation"><a href="profile.php">'.$_SESSION['user'],'</a></li>';
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
         
<li class="dropdown" >
                
                        <button class="dropbtn">Sort 
                          <i class="fa fa-caret-down"></i>
                        </button>
                          <div class="dropdown-content">
                        <form  action="sort.php" method="post">
                       <a>
                           <input type="submit" name="Price" value="Price" class="sortbuttons"></a>
                        <a>
                         <input type="submit"  name="Subject" value="Subject" class="sortbuttons">
                            </a>
                       
                      
             
                            </form>
                              
            
                              
                    </div>
             </li> 
                    
           <li class="dropdown" >
                         <button class="dropbtn">Department 
                         <i class="fa fa-caret-down"></i>
                         </button>
                           <div class="dropdown-content">
                        <form  action="sort.php" method="post">
                       
                         
        <?php 
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "bookshelp";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        $sql = "SELECT DISTINCT branch from book";
        $rnum = $conn->query($sql);
        $temp='';       
              
             if($rnum->num_rows > 0){
                while($row = $rnum->fetch_assoc()){
                    $t="<a class='depmin'><input type='submit' name='Department' value='".$row['branch']."' class='sortbuttons'></a>";
                    $temp=$temp.$t;
                }
                 echo $temp;
             }
                         
                             ?>
                            </form>
                        </div>
                            
                         </li> 
            <li style="margin-left:30%;"><form action="search.php" method="post" style="float:right;visibility:visible;">
                <input type="text" name="srch" class="search1" placeholder=" search by name">
                <input type="submit" value="search" class="searchbtn">  
          </form></li>
          
          
          
          
        
      </div>
    </div>
  </div>

    <div class="info" >
     
        <h2>Books:</h2>
    </div>

  
   <div class="books">
    <?php
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "bookshelp";  

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
      
        if(mysqli_connect_error()){
            die('Connection error('.mysqli_connect_errno().')'.mysqli_connect_error());
        } else {
            

            
            if(isset($_SESSION['search_query']))
            {     
                  $valueToSearch = $_SESSION['search_query'];
                $sql1 = "SELECT * FROM `book` WHERE CONCAT(`bookname`, `authorname`, `subject`, `branch`,`price`) LIKE '%".$valueToSearch."%'";
              
                
    // search in all table columns
    // using concat mysql function
    $sql = "SELECT * FROM `book` WHERE CONCAT(`bookname`, `authorname`, `subject`, `branch`,`price`) LIKE '%".$valueToSearch."%' LIMIT ".$start_from.",".$results_per_page."";
                
               
           
                
    
                   
                
            } 
             
       else if(isset($_SESSION['sortclick'])  && !isset($_SESSION['search_query']))
            {     
                
                
    // search in all table columns
    // using concat mysql function
    if($_SESSION['sortclick']=="Price"){
    $sql1 = "SELECT * FROM book ORDER BY price ASC";
    $sql = "SELECT * FROM book ORDER BY price ASC  LIMIT ".$start_from.",".$results_per_page."";
    }
    else if($_SESSION['sortclick']=="Subject"){
    $sql1 = "SELECT * FROM book ORDER BY subject ASC";
    $sql = "SELECT * FROM book ORDER BY subject ASC LIMIT ".$start_from.",".$results_per_page.""; 
    }
    else{
    $sql1 = "SELECT * FROM book WHERE branch='".$_SESSION['sortclick']."'";
    $sql = "SELECT * FROM book WHERE branch='".$_SESSION['sortclick']."' LIMIT ".$start_from.",".$results_per_page."";
        
    }
           
          
       
             }
                
       else { 
                $sql1 = "SELECT * from book";
                $sql = "SELECT * from book LIMIT ".$start_from.",".$results_per_page."";
          
            }
               
            
            
            
            
$rnum1 = $conn->query($sql1); 
if($rnum1->num_rows < $results_per_page)
{
   $total_pages =1;
}
else{
$total_pages = ceil($rnum1->num_rows / $results_per_page);
}
$rnum = $conn->query($sql);
                if($rnum->num_rows > 0){
                    
                    
                    
                    while($row = $rnum->fetch_assoc()){
                           
                        if(isset($_SESSION['logged']) && $_SESSION['logged']==true)
                        {

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
                            echo "<input type='hidden' name='sid' value=".$row['sid'].">";
                            echo "     <input type='submit' value='See Details' class='bookbtn'>";
                            echo "</form>";
                            echo "</pre>";
                            echo "</div>";
                            echo "</div>";
                            

                        }
                        else
                        {
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
                            $sid = $row['sid'];
                            echo "<form action='dontshowuser.php' method='POST'>";
                            echo "<input type='submit' value='See Details' class='bookbtn'>";
                            echo "</form>";
                            echo "</pre>";
                            echo "</div>";
                            echo "</div>";
                        }
                        
    

                    }
              echo "<div class='pagination'>";
             if($total_pages<3)
             {
                 $npages=$total_pages;
             }
             else{
                $npages=2;
             }
            if($page <3){
                $pagetodisplay = 1;
            }
            else{
                $pagetodisplay = $page;
            }
                    $temp1=$total_pages;
            if($temp1<3)
            {
                
            }
            else{
                if($page>2){
                 echo " <a href='book.php?page=".($page-2)."'";
             echo ">&laquo;</a>";
                }
            }
            $temp;
 for ($i=$pagetodisplay; $i<=($pagetodisplay + $npages); $i++) { 
            if($i > $total_pages){
                  $temp = $i;
             
            }
     else{// print links for all pages
            echo "<a href='book.php?page=".$i."'";
            if ($i==$page)  echo " class='active'";
            else  echo " class='notcurPage'";
            echo ">".$i."</a> "; 
            $temp = $i;
     }
};
           
            if($temp < $total_pages){
            echo "<a href='book.php?page=".($temp+1)."'";
            echo ">&raquo;</a>";
            }
          
            
            
              echo "</div>";
                }
            }
        
       
    
       
        
       

        
       
      ?>
  
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

      <script src="JS/home/slider.js"></script>
    

      <script>
        $(document).ready(function(){
          $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
          });
     
        });
        	
   

  
        
       
 
  
          
     
      </script>
    

</body>
</html>