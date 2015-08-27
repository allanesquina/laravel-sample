<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'text',
        'tasks_id'
    ];
    //
}
