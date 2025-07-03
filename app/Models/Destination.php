<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Review;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'location', 'image_url', 'price_range'];

    public function reviews() 
    {
        $this->hasMany(Review::class);
    }
}
