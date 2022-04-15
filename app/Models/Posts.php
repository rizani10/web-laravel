<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Posts extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
