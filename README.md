# json-to-object-php

function get_data($file) {
    $json = file_get_contents($file);
    $json_data = json_decode($json);
    return $json_data;
}
