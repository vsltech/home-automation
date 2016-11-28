<?php
include("phpgraphlib.php");
$graph=new PHPGraphLib(550,350); 
$link = mysql_connect('localhost', 'root', 'vslcreations.com')
   or die('Could not connect: ' . mysql_error());
     
mysql_select_db('temperature') or die('Could not select database');
  
$data1=array();
$data2=array();
$data3=array();
  
//get data from database
$sql="SELECT tdate,temperature,humidity FROM tempdata WHERE ID<25";
$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
if ($result) {
  while ($row = mysql_fetch_assoc($result)) {
      $temp=$row["temperature"];
      $tdate=$row["tdate"];
      $hum=$row["humidity"];
      //add to data array
      $data1[]=$tdate;
      $data2[]=$temp;
      $data3[]=$hum;
  }
}
  
//configure graph
$graph->addData($data1,$data2);
$graph->setBarColor('navy');
$graph->setupXAxis(20, 'blue');
$graph->setTitle('Average Temperature by Month in Room');
$graph->setTitleColor('blue');
$graph->setGridColor('153,204,255');
$graph->setDataValues(true);
$graph->setDataValueColor('navy');
$graph->setDataFormat('degrees');
$graph->setGoalLine('32');
$graph->setGoalLineColor('red');
$graph->createGraph();
?>
