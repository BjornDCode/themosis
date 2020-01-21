<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    const CREATED_AT = 'comment_date';
    const UPDATED_AT = 'comment_date';

    protected $primaryKey = 'comment_ID';

}
