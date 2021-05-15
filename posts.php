<?php
require_once('dbconfig.php');
require_once('index.php');
$limitStart = 0;
$limitCount = 10; // Set how much data you have to fetch on each request
if(isset($limitStart ) || !empty($limitStart)) {
$query = "SELECT id, title, image FROM article ORDER BY id limit $limitStart, $limitCount";
$result = mysqli_query($conn, $query);
$res = array();
while($resultSet = mysqli_fetch_assoc($result)) {
$res[] = array('id'=>$resultSet['id'],'title'=>$resultSet['title'],'image'=>$resultSet['image']);
}
echo json_encode($res);
}
?>