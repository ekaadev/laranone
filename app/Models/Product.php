<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // database connection
    protected $connection = 'mysql';
    // table name
    protected $table = 'products';
    // primary key
    protected $primaryKey = 'id';
    // auto increment
    public $incrementing = true;
    // timestamps(created_at, updated_at)
    public $timestamps = true;
    // fillable fields
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
    ];

    public static function create(array $validated)
    {
        return static::query()->create($validated);
    }

    public static function findOrFail(object|string|null $route)
    {
        return static::query()->findOrFail($route);
    }
}
