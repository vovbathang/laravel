<?php
/**
 * Created by PhpStorm.
 * User: thangnguyen
 * Date: 15/01/2019
 * Time: 10:47
 */

namespace App\QHOnline\Facades;

use App\QHOnline\ToolFactory;
use Illuminate\Support\Facades\Facade;

class Tool extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ToolFactory::class;
    }
}