<?php require_once("../includes/config.php");
header('Content-Type: application/json; charset=utf-8');
$queryCourses = "SELECT * FROM Courses";
$results = $mysqli->query($queryCourses);
$resultsArray = array();
while ($obj = $results->fetch_object()) {
    $resultsArray[] = $obj;
}
$json = json_encode($resultsArray);
echo $json;
?>