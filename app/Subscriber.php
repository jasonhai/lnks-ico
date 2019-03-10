<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = [
        'name', 'email'
    ];

    public function findByEmail($value='')
    {
        return $this->where('email', $value)->first();
    }
}
