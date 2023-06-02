<?php

namespace App;

use Illuminate\Support\Collection;

class Users
{
    public static function new(): static
    {
        return app(static::class);
    }

    public function generate(int $n): Collection
    {
        return collect(range(1, $n))
            ->map(fn() => [
                'name' => fake()->name,
                'email' => fake()->email,
            ])
            ->sortBy('name')
            ->values();
    }
}
