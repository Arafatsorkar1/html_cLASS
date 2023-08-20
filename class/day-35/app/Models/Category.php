<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static function allCategories ()
    {
        return [
            0 => [
                'id' => 1,
                'name' => 'Bangladesh'
            ],
            1 => [
                'id' => 2,
                'name' => 'World'
            ],
            2 => [
                'id' => 3,
                'name' => 'Sports'
            ],
        ];
    }
}
