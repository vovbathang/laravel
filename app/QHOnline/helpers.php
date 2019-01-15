<?php
/**
 * Created by PhpStorm.
 * User: thangnguyen
 * Date: 15/01/2019
 * Time: 11:12
 */

use App\QHOnline\Facades\Tool;

if (!function_exists('get_thumbnail')) {
    function get_thumbnail($filename)
    {
        return Tool::getThumbnail($filename);
    }
}