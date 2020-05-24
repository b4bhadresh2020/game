<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'team_name'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function players()
    {
        return $this->hasMany('App\Player');
    }
}
