<?php
require_once __DIR__ . '\src\helper\Display.php';
require_once __DIR__ . '\src\view\V_Show.php';
require_once __DIR__ . '\src\model\Data.php';

if (loadData()) {
    displayText('APLIKASI CRUD v1.0');
    displayLine();
    
    viewShow();
} else {
    displayText('Error 101');
}

