<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Add this line

class Post extends Model
{
    use SoftDeletes; // Add this line

    protected $fillable = [
        'title',
        'content',
        'status',
    ];
    //
}
