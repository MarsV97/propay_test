<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{

    protected $fillable = ['user_id','mobile','south_african_id','date_of_birth' ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function interests()
    {
        return $this->morphToMany(Interests::class, 'interestsable');
    }

    public function languages()
    {
        return $this->morphToMany(Languages::class, 'languageable');
    }
}
