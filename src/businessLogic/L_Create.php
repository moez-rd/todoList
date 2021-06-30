<?php

require_once __DIR__ . '\..\model\Data.php';

function createData(string $name)
{
    global $data;
    if (empty($data)) {
        $data[1] = $name;
    } else {
        $data[] = $name;
    }
    updateData();
}
