<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentPoint extends Model
{
    // use HasFactory;
    public function content()
    {
        return $this->belongsTo('App\Models\Content');
    }
}
