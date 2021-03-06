<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const CREATED_AT = 'post_date';
    const UPDATED_AT = 'post_modified';

    protected $primaryKey = 'ID';

    public function getRouteKeyName()
    {
        return 'post_name';
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'comment_ID');
    }

}
