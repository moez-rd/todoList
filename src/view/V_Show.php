<?php

require_once __DIR__ . '\..\businessLogic\L_Show.php';
require_once __DIR__ . '\..\helper\UserInput.php';
require_once __DIR__ . '\..\helper\Display.php';
require_once __DIR__ . '\V_Create.php';
require_once __DIR__ . '\V_Delete.php';


function viewShow()
{
    while (true) {
        displayLine();
        displayTitle('TODO LIST');
        displayLine();
        showData();
        displayLine();
        displayText('1. Buat baru');
        displayText('2. Hapus todo');
        displayText('0. Keluar');
        $in = getUserInput('Pilihan');
        if ($in == '1') {
            viewCreate();
        } else if ($in == '2') {
            viewDelete();
        } else if ($in == '0') {
            displayLine();
            displayText('Selamat tinggal');
            break;
        } else {
            displayText('Pilihan tidak benar');
        }
		
    }
}
