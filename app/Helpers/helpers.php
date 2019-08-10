<?php

if (! function_exists('csvToArray')) {
    function csvToArray($filename = '', $delimiter = ',')
    {
        $file = fopen($filename, 'r');
        while (!feof($file)) {
            $data[] = fgetcsv($file, 0, $delimiter);
        }
        fclose($file);
        return $data;
    }
}
