<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogType extends Model
{
    use HasFactory;
    public function blogCategories()
    {
        return $this->hasMany(BlogCategory::class);
    }
}
