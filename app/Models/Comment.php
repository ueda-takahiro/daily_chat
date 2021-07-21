<?php

namespace App\Models;

use App\Models\Traits\PropertyAccessor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory, PropertyAccessor;

    protected $fillable = [
        'user_id',
        'post_id',
        'body'
    ];
}
