<?php
/**
 * Created by PhpStorm.
 * User: thangnguyen
 * Date: 10/01/2019
 * Time: 16:56
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * @var string
     */
    protected $table = 'tags';
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    public function products()
    {
        return $this->belongsToMany("App\Product", "product_tag", "tag_id", "product_id");

    }
}