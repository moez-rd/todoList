<?php

require_once __DIR__ . '\..\businessLogic\L_Create.php';
require_once __DIR__ . '\..\helper\UserInput.php';
require_once __DIR__ . '\..\helper\Display.php';

function viewCreate()
{
    displayLine();
    displayTitle('CREATE TODO');
    displayLine();
    $in = getUserInput('Ketik todo baru [0 untuk kembali]');
    if ($in != '0') {
        createData($in);
    }
}
