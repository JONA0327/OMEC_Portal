<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Document extends Model
{
    
    protected $table = 'documents';
    protected $fillable= ['type','description','url','id'];
    protected $guarded = [];
    
    

    public function setUrlAttribute($file)
    {
        if ($file) {
            $name = time().'.'.$file->extension();
            $file->storeAs('public', $name);
            $this->attributes['url'] = $name;
        }
    }

    public function getUrlAttribute($value)
    {
        return asset('storage/' . $value);
    }
    
}
