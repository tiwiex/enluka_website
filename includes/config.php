<?php

function load_flat_file($file_path) {
    $content = file_get_contents($file_path);
    $lines = explode("\n", $content);
    $data = array();

    foreach ($lines as $line) {
        $parts = explode("=", $line, 2);
        if (count($parts) === 2) {
            $key = trim($parts[0]);
            $value = trim($parts[1]);
            $data[$key] = $value;
        }
    }

    return $data;
}

// Replace 'config.txt' with the actual path to your flat file.
$config_data = load_flat_file('includes/config.txt');

?>