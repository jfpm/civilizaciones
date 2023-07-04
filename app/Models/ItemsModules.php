<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsModules extends Model
{
    use HasFactory;

    /**
    * Modelo Items Modules
    *
    * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
    * @package Modulos
    * @subpackage curiosidades, culturales, adoraciones
    */
    protected $table = 'items_modules';

    protected $primaryKey = 'id';

    protected $fillable = [
        'im_guid',
        'im_modulo',
        'im_color',
        'im_item',
        'im_state',
        'im_total_visitas',
        'im_user',
    ];



    /**
     * Usuario que ve un item en especifico
     *
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @return Collection<User>
     */
    public function show_itemmodule(){
        return $this->hasOne(User::class,'id','im_user');
    }
}
