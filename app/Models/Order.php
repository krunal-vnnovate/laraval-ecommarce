<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'users_id',
        'product_id',
        // 'stock',
        'deliveryAdd',
        'orderId',
        'paymentMethod',
        // 'customeDescription',
        // 'customeImg',
        // 'orderStatus',
    ];
    //
}
