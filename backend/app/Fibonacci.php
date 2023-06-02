<?php

namespace App;

class Fibonacci
{
    public static function new(): static
    {
        return app(static::class);
    }

    public function calculate(int $n): int
    {
        return ($n < 2) ? $n : $this->calculate($n - 1) + $this->calculate($n - 2);
    }
}
