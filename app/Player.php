<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_id', 'player_name', 'player_email'
    ];

    public function team()
    {
        return $this->belongsTo('App\Team');
    }
}
