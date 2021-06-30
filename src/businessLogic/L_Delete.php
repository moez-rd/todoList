<?php

require_once __DIR__ . '\..\model\Data.php';

function deleteData(int $num): bool
{
    global $data;
    if ($num <= count($data)) {
        for ($i = $num; $i < count($data); $i++) {
            $data[$i] = $data[$i + 1];
        }
        unset($data[count($data)]);
        updateData();
        return true;
    } else {
        return false;
    }
}

