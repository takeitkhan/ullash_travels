<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostMeta extends Model
{
    use HasFactory;
    protected $table = 'posts_meta';
    protected $fillable = [
        'post_id',
        'category_id',
        'meta_name',
      	'meta_value',
    ];

    public function post()
    {
        return $this->belongsTo('App\Models\Post', 'id', 'post_id');
    }


}
