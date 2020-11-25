<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model{
    protected $fillable=['name', 'brand', 'price', 'dayGet', 'status', 'cate_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
