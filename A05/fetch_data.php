<?php
include 'connection.php';

$islands = $conn->query("SELECT * FROM islandsOfpersonality WHERE status = 'Active' LIMIT 4")->fetch_all(MYSQLI_ASSOC);

$contents = $conn->query("SELECT * FROM islandcontents")->fetch_all(MYSQLI_ASSOC);
?>
