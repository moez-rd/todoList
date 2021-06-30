<?php

require_once __DIR__ . '\..\businessLogic\L_Create.php';

$data = array();
$loc = __DIR__ . '\..\..\data\dataList.txt';

function loadData(): bool
{
    global $loc, $data;
    $file = fopen($loc, 'r');
    if (!$file) {
        return false;
    }
    while (!feof($file)) {
        $dt = trim(fgets($file));
        if ($dt == '?empty') {
            return true;
        } else {
            if (empty($data)) {
                $data[1] = $dt;
            } else {
                $data[] = $dt;
            }
        }
    }
    fclose($file);
    return true;
}

function updateData()
{
    global $loc, $data;
    $file = fopen($loc, 'w');
    if (empty($data)) {
        fwrite($file, '?empty');
    } else {
        fwrite($file, implode(PHP_EOL, $data));
    }
    fclose($file);
}
