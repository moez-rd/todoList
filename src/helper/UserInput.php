<?php

require_once 'Display.php';

function getUserInput(string $message)
{
    displayInline($message . '> ');
    return trim(fgets(STDIN));
}
