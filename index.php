<?php 

function get_data($file) {
    $json = file_get_contents($file);
    $json_data = json_decode($json);
    return $json_data;
}

// display the data json
$json_data = get_data('StilisimoGetData-modified.json');

echo '<pre>';
print_r($json_data);
echo '</pre>';


// display the data from json string
$json_data = get_data('StilisimoGetDataJson.json');

echo '<pre>';
print_r($json_data);
echo '</pre>';
