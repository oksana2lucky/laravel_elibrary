<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * Custom table name
     *
     * @var string
     */
    protected $table = 'books';
}
