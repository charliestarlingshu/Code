<?php require_once("../includes/config.php");
header('Content-Type: application/json; charset=utf-8'); 

$queryCourses = "SELECT courseTitle, courseSubject, courseSummary FROM Courses WHERE courseSubject ='Computing'";
$results = $mysqli->query($queryCourses);
$resultsAr = array();
while ($obj = $results->fetch_object()) {
    $resultsAr[] = $obj;
} 

$json = json_encode($resultsAr);
echo $json; 
?>

