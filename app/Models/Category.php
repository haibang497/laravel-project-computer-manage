<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name', 'description'];

    public function computers()
    {
        return $this->hasMany(Computer::class, 'category_id');
    }
}
