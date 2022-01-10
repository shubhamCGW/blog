<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // public function Categories()
    // {
    //     return $this->belongsTo(blog_categories::class);
    // }

    public function posts()
    {
    	return $this->hasMany(blog_post::class,'categories_id','id');
    }
}
