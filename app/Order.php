<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'name',
        'address',
        'email',
        'phone'
    ];

    public function products()
    {
        return $this->belongsToMany('App\Product', 'product_order', 'order_id', 'product_id')
            ->withPivot('quantity')
            ->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
