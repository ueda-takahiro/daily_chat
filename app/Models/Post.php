<?php

namespace App\Models;

use App\Models\Traits\PropertyAccessor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, PropertyAccessor;

    protected $fillable = [
        'user_id',
        'body'
    ];
}
