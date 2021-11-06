<?php

$ln = '---';

function displayTitle(string $title)
{
    global $ln;
    echo $ln . strtoupper($title) . $ln . PHP_EOL;
}

function displayText(string $text)
{
    echo $text . PHP_EOL;
}

function displayInline(string $text)
{
    echo $text;
}

function displayLine()
{
    echo '______________________________' . PHP_EOL;
}
