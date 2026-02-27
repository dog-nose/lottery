<?php

declare(strict_types=1);

namespace DogNose\Lottery\Tests\Model;

use DogNose\Lottery\Model\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private FizzBuzz $fizzBuzz;

    protected function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function test_3の倍数はFizzを返す(): void
    {
        $this->assertSame('Fizz', $this->fizzBuzz->evaluate(3));
        $this->assertSame('Fizz', $this->fizzBuzz->evaluate(6));
        $this->assertSame('Fizz', $this->fizzBuzz->evaluate(9));
    }

    public function test_5の倍数はBuzzを返す(): void
    {
        $this->assertSame('Buzz', $this->fizzBuzz->evaluate(5));
        $this->assertSame('Buzz', $this->fizzBuzz->evaluate(10));
        $this->assertSame('Buzz', $this->fizzBuzz->evaluate(20));
    }

    public function test_15の倍数はFizzBuzzを返す(): void
    {
        $this->assertSame('FizzBuzz', $this->fizzBuzz->evaluate(15));
        $this->assertSame('FizzBuzz', $this->fizzBuzz->evaluate(30));
        $this->assertSame('FizzBuzz', $this->fizzBuzz->evaluate(45));
    }

    public function test_それ以外の数はそのまま返す(): void
    {
        $this->assertSame('1', $this->fizzBuzz->evaluate(1));
        $this->assertSame('2', $this->fizzBuzz->evaluate(2));
        $this->assertSame('4', $this->fizzBuzz->evaluate(4));
        $this->assertSame('7', $this->fizzBuzz->evaluate(7));
    }

    public function test_負の数も判定できる(): void
    {
        $this->assertSame('Fizz', $this->fizzBuzz->evaluate(-3));
        $this->assertSame('Buzz', $this->fizzBuzz->evaluate(-5));
        $this->assertSame('FizzBuzz', $this->fizzBuzz->evaluate(-15));
        $this->assertSame('-1', $this->fizzBuzz->evaluate(-1));
    }

    public function test_0はFizzBuzzを返す(): void
    {
        $this->assertSame('FizzBuzz', $this->fizzBuzz->evaluate(0));
    }
}
