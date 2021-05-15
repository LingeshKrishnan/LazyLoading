<?php
    require 'dbconfig.php';
   $sql = "SELECT * FROM article ";
   $result = $conn->query($sql);
if($result->num_rows > 1){
    while ($row = $result->fetch_assoc()){
        echo "id :" . $row["id"];
    }
}
?>
