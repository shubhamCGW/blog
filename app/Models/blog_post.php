<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class blog_post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'metatitle',
        'content',
        'image',
        'categories_id'
    ];
    public function category()
    {
    	return $this->belongsTo(blog_category::class,'categories_id','id');
    }

}
