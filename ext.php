<?php 
    // Setting up connection with database Geeks 
    $connection = mysqli_connect("localhost", "root", "", "bookshelp"); 
  
    // Check connection 
    if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
    $query = "SELECT * FROM book"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 
          
        printf("Number of row in the table : " . $row); 
    
        // close the result. 
        mysqli_free_result($result); 
    } 		   
		 
     mysqli_close($connection); 
?> 
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart1);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['date', 'no of books'],
		   <?php 
		  $connection = mysqli_connect("localhost", "root", "", "bookshelp"); 
		  // $query = "SELECT * FROM book"; 
		//	$result = mysqli_query($connection, $query); 
			// $row = mysqli_num_rows($result); 
			 
		  $query4 = "SELECT * FROM book order by date desc"; 
		  $run4=mysqli_query($connection, $query4); 
		  $array4=mysqli_fetch_assoc($run4);
		  $last_date=$array4['date'];
		  //echo $last_date;
		  
		  $query5 = "SELECT * FROM book order by date asc"; 
		  $run5=mysqli_query($connection, $query5); 
		  $array5=mysqli_fetch_assoc($run5);
		  $first_date=$array5['date'];
		  //echo $first_date;
		
		  $start = strtotime($first_date);
		  $end = strtotime($last_date);
		  $days_between = ceil(abs($end - $start) / 86400);
		  //echo $days_between;
		  
		  $interval = ceil($days_between / 5) ;  
		  $skip=0;
		  $date=$first_date;
		 $temp=false;
		 while($skip <=5)
		 {
		   if(($date > $last_date))
		   {
			   $date = $last_date;
			   $temp=true;
		   }   
		   $query2 = "SELECT * FROM `book` WHERE DATE_FORMAT(STR_TO_DATE(`date`, '%Y-%m-%d'), '%Y-%m-%d') <= DATE_FORMAT(STR_TO_DATE('$date','%Y-%m-%d'), '%Y-%m-%d')";  
		  $run2 = mysqli_query($connection, $query2); 
		  $row2 = mysqli_num_rows($run2);
		  //print " ".$row2." "; 	
				if($temp || ($skip == 5)){
				echo "['".$date."',".$row2."]"; } else{
				echo "['".$date."',".$row2."],";}
		   //DATE_ADD($date, INTERVAL $interval DAY);
		   $date=date('Y-m-d', strtotime($date. ' + '.$interval.' days'));
		   $skip=$skip+1;
		   if($temp){
			   break;
		   }
		 }
		 ?>	
        ]);

        var options = {
          title: 'book',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
      }
        function drawChart1() {
        var data1 = google.visualization.arrayToDataTable([
          ['department', 'no of books']
		   <?php 
		  
           $query9 ="SELECT DISTINCT branch from book";
           $run5=mysqli_query($connection, $query9);
            
            
		  while($array4=mysqli_fetch_assoc($run5))
          {   echo ",";
               $query10="SELECT count(bookname) as no_of_books from book where branch = '".$array4['branch']."'";
              $run6=mysqli_query($connection, $query10);
              $array5=mysqli_fetch_assoc($run6);
                
                  
              echo "['".$array4['branch']."',".$array5['no_of_books']."]";
              
          }
            
            ?>
         
            ]);
             var options1 = {
          title: 'departmentwise',
      
         
                pieHole: 0.4,
 
        };
        var chart1 = new google.visualization.PieChart(document.getElementById('curve_chart1'));
        chart1.draw(data1, options1);
        }
          
    </script>
  </head>
  <body>
  <div id="curve_chart" style="width: 900px; height: 500px"></div>
       <div id="curve_chart1" style="width: 900px; height: 500px"></div>
  </body>
</html>



