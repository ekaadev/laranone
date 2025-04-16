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
}
