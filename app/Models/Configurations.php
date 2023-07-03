<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Configurations extends Model
{
    use HasFactory;

    /**
     * Metodo para generar token
     *
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @return Collection<User>
     */
    public static function generateToken(){
        //devolver mensaje si existe, para confirmar en el vue
        $token = strtoupper(substr(Str::uuid()->toString(), 0, 18));

        return $token;
    }
}
