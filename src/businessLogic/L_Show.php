<?php

require_once __DIR__ . '\..\model\Data.php';
require_once __DIR__ . '\..\helper\Display.php';


function showData()
{
    global $data;
    if (!empty($data)) {
        foreach ($data as $num => $value) {
            displayText('['.  $num . '] ' . $value);
        }
    } else {
        displayText('Tidak ada data');
    }
}
