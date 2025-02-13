<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';

    protected $fillable = [
        'users_id',
        'product_id',
    ];
    //

    public function user(){
        return $this->hasOne('App/Models/User', 'id', 'users_id');
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
