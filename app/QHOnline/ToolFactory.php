<?php
/**
 * Created by PhpStorm.
 * User: thangnguyen
 * Date: 15/01/2019
 * Time: 10:44
 */

namespace App\QHOnline;

class ToolFactory
{
    public function getThumbnail($filename)
    {
        if ($filename) {
//            2017-04/b2d497b69515658e67d80d135b7d0b54.png
            return preg_replace("/(.*)\.(.*)/i", '$1_thumb.$2', $filename);
        }
        return '';
    }
}