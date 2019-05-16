
<?php
try{
$con =new PDO("mysql:host=localhost;dbname=youcrud","root","");
}catch(PDOExeption $e){
	echo $e->getMessage();
}
$sql ="SELECT count(gender) as tcount,gender from data group by gender";
$stmt = $con->prepare($sql);
$stmt->execute();
$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>';
//echo print_r($arr);
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Gender', 'Count'],
          <?php foreach($arr as $key=>$val){?>
          	['<?php echo $val['gender']?>', <?php echo $val['tcount']?> ],

          
          <?php } ?>
          
          
        ]);

        var options = {
          title: 'Gender Count',
          is3D:true
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>