<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    function blogcategory()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }
}
