<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    public function userDetails()
    {
        return $this->morphTo(UserDetails::class, 'languageable');
    }

}
