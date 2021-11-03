<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utils extends Model
{
    public static function urlEncondedToObject($urlEnconded){
        parse_str(urldecode($urlEnconded), $result);
        return json_decode(json_encode($result, JSON_UNESCAPED_UNICODE));
    }
    
    public static function getPathImagens(){
        $path = storage_path();
        $path = str_replace("\\", "/", $path);
        return $path . "/app/public/imagens/";
    }
}
