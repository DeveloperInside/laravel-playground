<?php

namespace  App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 0,
                'name' => 'John',
                'email' => 'john@example.com'
            ],
            [
                'id' => 1,
                'name' => 'John2',
                'email' => 'john@example.com2'
            ]
        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        return $listings[$id];
    }
}
