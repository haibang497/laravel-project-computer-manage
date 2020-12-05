<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['title', 'dayCreate', 'status', 'user_id'];


    public function computers()
    {
        return $this->belongsToMany('App\Models\Computer');
    }
}
