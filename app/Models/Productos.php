<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public static function getProductos($id = '', $rand = false)
    {
        if ($id == '') {
            if ($rand)
                return self::where('estado', 1)->inRandomOrder()->get();
            else
                return self::where('estado', 1)->get();
        } else {
            return self::find($id);
        }
    }
}
