<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['title'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function computers()
    {
        return $this->belongsToMany('App\Models\Computer');
    }
}
