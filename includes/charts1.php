<?php
 require  "includes/connect.php";
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>
 Name vs Age Charts
 </title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['Name', 'Age(Years)'],
 <?php 
 $query = "SELECT name,age FROM info  ORDER BY name";

 $exec = mysqli_query($conn,$query);
 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['name']."',".$row['age']."],";
 }
 ?>
 
 ]);

 var options = {
 title: 'Age of the users'
 };
 var chart = new google.visualization.ColumnChart(document.getElementById("columnchart"));
 chart.draw(data, options);
 }
 </script>
</head>
<body>
 <h4>Name and Age of the Users</h4>
 <div id="columnchart" style="width: 700px; height: 400px;"></div>
</body>
</html>