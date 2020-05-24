<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Twitter_post extends Model
{
    protected $fillable = ['post_id','message','link','picture','post_created_time'];
}
