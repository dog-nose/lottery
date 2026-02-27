<?php

declare(strict_types=1);

namespace DogNose\Lottery\Model;

class FizzBuzz
{
    public function evaluate(int $number): string
    {
        if ($number % 15 === 0) {
            return 'FizzBuzz';
        }

        if ($number % 3 === 0) {
            return 'Fizz';
        }

        if ($number % 5 === 0) {
            return 'Buzz';
        }

        return (string) $number;
    }
}
