<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name', 'date'
    ];
    public function eventregister(){
        return $this->hasMany(EventRegister::class);
    }
}
