<?php
header("Content-Type: application/json");

$data = array("language" => $_SESSION["language"]);
echo json_encode($data);

exit();
?>