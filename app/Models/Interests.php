<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interests extends Model
{
    public function userDetails()
    {
        return $this->morphTo(UserDetails::class, 'interestsable');
    }
}
