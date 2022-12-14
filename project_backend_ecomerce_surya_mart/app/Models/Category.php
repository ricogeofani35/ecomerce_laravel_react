<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'c_name'
    ];

    // relasi one to many
    public function product()
    {
        return $this->hasMany(Product::class);
    }

}
