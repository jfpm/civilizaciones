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
            [
                'date' => '2023-01-15',
                'title' => 'Evento 1',
                'description' => 'Descripción del evento 1.',
                'photo' => 'https://pixabay.com/get/g2facff3d5ae47a1d3ea24386c0d97bc85f2ebbe3a23cfcaaadfac9d48eabdf0bd544fb4a28edb8c28b36c124e2a3f195b654e8b3783b6da55c8962de84728061_1280.jpg',
                'video' => 'ruta-del-video.mp4',
                'iframe' => '<iframe src="https://www.youtube.com/embed/XXXXXXXXXXX"></iframe>'
            ],

            // Agrega más eventos si es necesario
        ];

        return $events;
    }

}
