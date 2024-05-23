<?php

function readData($file) {
    if (!file_exists($file)) {
        return [];
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $data = [];

    foreach ($lines as $line) {
        $data[] = unserialize($line);
    }

    return $data;
}

function writeData($file, $data) {
    $lines = [];

    foreach ($data as $entry) {
        $lines[] = serialize($entry);
    }

    file_put_contents($file, implode(PHP_EOL, $lines) . PHP_EOL);
}


