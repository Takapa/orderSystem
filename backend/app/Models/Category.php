<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $guarded = []; 

    public function item()
    {
        return $this->hasMany(Item::class);
    }

    public function getLists()
    {
        $categories = Category::pluck('name', 'id');

        return $categories;
    }
}
