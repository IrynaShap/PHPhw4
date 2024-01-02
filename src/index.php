<?php
echo "Введіть число:\n";
$value = (int)trim(fgets(STDIN));
echo "Колір: ";

echo match ($value) {
    1 => 'green',
    2 => 'red',
    3 => 'blue',
    4 => 'brown',
    5 => 'violet',
    6 => 'black',
    default => 'white',
};

echo PHP_EOL;