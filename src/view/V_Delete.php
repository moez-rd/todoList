<?php

require_once __DIR__ . '\..\businessLogic\L_Delete.php';
require_once __DIR__ . '\..\helper\UserInput.php';
require_once __DIR__ . '\..\helper\Display.php';
require_once __DIR__ . '\..\model\Data.php';

function viewDelete()
{
    global $data;
    if (!empty($data)) {
        displayLine();
        displayTitle('REMOVE TODO');
        displayLine();
        $in = getUserInput('Ketik nomor todo [0 untuk kembali]');
        if ($in > count($data) || ctype_alpha($in)) {
            displayText('Pilihan tidak benar');
        } else {
            if ($in != '0') {
                deleteData($in);
            }
        }
    } else {
        displayText('Tidak ada data');
    }
}
