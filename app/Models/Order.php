<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['title', 'dayCreate', 'status', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id');
    }

    public function computers()
    {
        return $this->belongsToMany('App\Models\Computer');
    }
}
