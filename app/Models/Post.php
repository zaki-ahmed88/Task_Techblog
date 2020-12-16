<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'topic', 'desc', 'img', 'tag_id'
    ];


    public function Tag(){

        return $this->belongsTo('App\models\Tag');
    }

}
