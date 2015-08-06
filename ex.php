<?php 
require("PRclass.php");



$a=explode(PHP_EOL, $_POST['t1']);

foreach($a as $url)
{
$pr = new PR();
echo "$url has Google PageRank: ". $pr->get_google_pagerank($url) ;
echo "<br>";
}






?>


