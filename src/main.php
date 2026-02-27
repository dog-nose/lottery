<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use DogNose\Lottery\Model\FizzBuzz;

if ($argc < 2) {
    fwrite(STDERR, "使い方: php main.php <数字>\n");
    exit(1);
}

$input = $argv[1];

if (!ctype_digit($input) && !($input[0] === '-' && ctype_digit(substr($input, 1)))) {
    fwrite(STDERR, "エラー: 整数を入力してください\n");
    exit(1);
}

$number = (int) $input;
$fizzBuzz = new FizzBuzz();
echo $fizzBuzz->evaluate($number) . PHP_EOL;
