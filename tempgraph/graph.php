<?php
include("phpgraphlib.php");
$graph=new PHPGraphLib(550,350); 
$link = mysql_connect('localhost', 'root', 'vslcreations.com')
   or die('Could not connect: ' . mysql_error());
     
mysql_select_db('temperature') or die('Could not select database');
  
$dataArray=array();
  
//get data from database
$sql="SELECT tempdata, COUNT(*) AS 'count' FROM tempdata GROUP BY ID";
$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
if ($result) {
  while ($row = mysql_fetch_assoc($result)) {
      $temp=$row["temperature"];
      $tdate=$row["tdate"];
      //add to data array
      $dataArray[$temp]=$tdate;
  }
}
  
//configure graph
$graph->addData($dataArray);
$graph->setTitle("Temperature");
$graph->setGradient("lime", "green");
$graph->setBarOutlineColor("black");
$graph->createGraph();
?>