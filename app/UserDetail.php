<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'phone', 'birth_day', 'country', 'city', 'postalcode', 'identification', 'gender'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
