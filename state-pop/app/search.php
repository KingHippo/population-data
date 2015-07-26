<?php

$conn = mysql_connect("localhost", "root", "password");
mysql_select_db("state_population", $conn);
$q = strtolower($_GET["city"]);

$return = array();
$query = mysql_query("select population from population where slug like '%$q%'");
while ($row = mysql_fetch_array($query)) {
array_push($return,array('label'=>$row['population'],'value'=>$row['slug']));
}
echo(json_encode($return));
