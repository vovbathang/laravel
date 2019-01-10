<?php
/**
 * Created by PhpStorm.
 * User: thangnguyen
 * Date: 10/01/2019
 * Time: 17:13
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * @var string
     */
    protected $table = 'orders';
    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'address',
        'email',
        'phone',
    ];

    public function products()
    {
        return $this->belongsToMany("App\Product", "product_tag", "order_id", "product_id");

    }
}