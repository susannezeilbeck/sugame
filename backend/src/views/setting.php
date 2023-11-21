<?php
header("Content-Type: application/json");

$data = array("setting" => $_SESSION["setting"]);
echo json_encode($data);

exit();
?>