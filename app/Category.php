<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Custom table name
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * Disable created_at and updated_at
     *
     * @var bool
     */
    public $timestamps = false;
}
