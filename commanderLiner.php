<?php

if ($argc !== 2) {
    echo "Expecting one argument.\n";
    exit(1);
}
$name = $argv[1];
echo "Hello, $name...\n";