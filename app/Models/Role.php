<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $primarykey = 'id';

    protected $fillable = [
        'nombre_rol', 
        'descripcion', 
    ];

    /**
     * Relacion con los  datos que se tiene de Role  
     * con la tabla User
     * 
     * @author Yilver Julian Tello <yilver.tello@correounivalle.edu.co>
     * @return Collection<User>
     */
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
