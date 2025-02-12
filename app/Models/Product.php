<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'product';

    protected $fillable = [
        'category_id',
        'product_name',
        'product_description',
        'product_price',
        'status',
        // 'product_rate',
        'product_img',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
