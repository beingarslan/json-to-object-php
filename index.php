<?php 

// import StilisimoGetData-modified.json
$json = file_get_contents('StilisimoGetData-modified.json');
$json_data = json_decode($json, true);
echo $json_data;
?>