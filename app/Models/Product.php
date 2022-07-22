<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_id',
        'price',
        'status'
    ]; 

    public function images()
    {
        return $this->hasOne(Image::class, 'id', 'image_id');
    }


}
