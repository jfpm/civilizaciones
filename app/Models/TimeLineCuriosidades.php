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
                'photo' => null,
                'video' => 'https://www.youtube.com/embed/Zbl7Ob6fhz0',
                'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe title="Alejandro Magno V - 255 Alexander the Great" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/1a924e110f4e4a1dbdc5d474d6b00fe9/embed" width="100%"
                    height="550"> </iframe> <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> <a href="https://sketchfab.com/3d-models/alejandro-magno-v-255-alexander-the-great-1a924e110f4e4a1dbdc5d474d6b00fe9?utm_medium=embed&utm_campaign=share-popup&utm_content=1a924e110f4e4a1dbdc5d474d6b00fe9" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> Alejandro Magno V - 255 Alexander the Great </a> by <a href="https://sketchfab.com/NestorMarques?utm_medium=embed&utm_campaign=share-popup&utm_content=1a924e110f4e4a1dbdc5d474d6b00fe9" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> Néstor F. Marqués </a> on <a href="https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=1a924e110f4e4a1dbdc5d474d6b00fe9" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;">Sketchfab</a></p></div>'
            ],
            [
                'date' => '323 a.C',
                'title' => 'Muerte de Alejandro Magno. Ptolomeo I se convierte en el primer faraón de la dinastía ptolemaica.',
                'description' => 'Alejandro Magno murió el 13 de junio de 323 a.C. en Babilonia, cuando se encontraba en el palacio de Nabucodonosor II 1. Ptolomeo I Sóter fue uno de los generales de Alejandro Magno y uno de los tres diádocos que se disputaron el control de su extenso imperio ',
                'photo' => null,
                'video' => 'https://www.youtube.com/embed/IcxXIk0a-Fc',
                'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe title="ALEXANDER THE GREAT - BRITISH MUSEUM" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/5a496592be8a4e58bd1dfc0ac7c6ae46/embed"> </iframe> <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> <a href="https://sketchfab.com/3d-models/alexander-the-great-british-museum-5a496592be8a4e58bd1dfc0ac7c6ae46?utm_medium=embed&utm_campaign=share-popup&utm_content=5a496592be8a4e58bd1dfc0ac7c6ae46" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> ALEXANDER THE GREAT - BRITISH MUSEUM </a> by <a href="https://sketchfab.com/juanbrualla?utm_medium=embed&utm_campaign=share-popup&utm_content=5a496592be8a4e58bd1dfc0ac7c6ae46" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> Arqueomodel3D </a> on <a href="https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=5a496592be8a4e58bd1dfc0ac7c6ae46" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;">Sketchfab</a></p></div>'
            ],
            [
                'date' => '525 a.C',
                'title' => 'Los persas toman el control de Egipto.',
                'description' => 'La conquista de Egipto por los persas: En el año 525 a.C., el Imperio Persa conquistó Egipto y estableció su dominio sobre la región durante varios siglos.',
                'photo' => 'curiosidadesImg/imagen.jpg',
                'video' => 'https://www.youtube.com/embed/Hdnv-PSOjtE',
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
