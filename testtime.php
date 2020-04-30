<?php
include("temp/database.php");
$count = mysqli_query($conn, "SELECT `fullname`, COUNT(*) AS `count` FROM `members` GROUP BY `fullname`");
$rowcount = mysqli_fetch_array($count);
echo $rowcount["count"];
?>