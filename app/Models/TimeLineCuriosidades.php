<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeLineCuriosidades extends Model
{
    use HasFactory;

    public static function showTimeLineCuriosidades()
    {
        $events = [
            [
                'date' => '332 a.C',
                'title' => 'Alejandro Magno conquista Egipto y funda la ciudad de Alejandría',
                'description' => 'En el año 332 a.C., el rey macedonio Alejandro Magno conquistó Egipto y estableció la dinastía ptolemaica, que gobernaría el país durante casi 300 años..',
                'photo' => 'curiosidadesImg/imagen.jpg',
                'video' => null,
                'iframe' => null
            ],
            [
                'date' => '525 a.C',
                'title' => 'Los persas toman el control de Egipto.',
                'description' => 'La conquista de Egipto por los persas: En el año 525 a.C., el Imperio Persa conquistó Egipto y estableció su dominio sobre la región durante varios siglos.',
                'photo' => 'curiosidadesImg/imagen.jpg',
                'video' => null,
                'iframe' => null
            ],
            // Agrega más eventos si es necesario
        ];

        return $events;
    }

}
