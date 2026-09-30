<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function Country_User()
    {
        return $this->hasMany(Country::class, 'country_id', 'id');
    }
}
