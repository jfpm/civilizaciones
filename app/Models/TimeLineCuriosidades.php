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
                'date' => '2023-01-01',
                'title' => 'Evento 1',
                'description' => 'Descripción del evento 1.',
                'photo' => 'https://pixabay.com/get/gf549722fbddfe9eee0e93310402b573a4729aa7cdd90b30d865cca0ae104a16ceec2c219bef985ce48f447c3a489f8868dda28883be2d7d22fd65c8b290787dc_1280.jpg',
                'video' => 'https://www.youtube.com/embed/HMRyk9TrlU4',
                'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe
                        src="https://sketchfab.com/models/f4beed52dc76434bb0ceffcf74b914e1/embed"
                        title="Composición Egipto"
                        frameborder="0"
                        allowfullscreen
                        mozallowfullscreen="true"
                        webkitallowfullscreen="true"
                        allow="autoplay; fullscreen; xr-spatial-tracking"
                        xr-spatial-tracking
                        execution-while-out-of-viewport
                        execution-while-not-rendered
                        web-share
                        width="100%"
                        height="480"
                    > </iframe>
                    <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> <a
                            href="https://sketchfab.com/3d-models/composicion-egipto-f4beed52dc76434bb0ceffcf74b914e1?utm_medium=embed&utm_campaign=share-popup&utm_content=f4beed52dc76434bb0ceffcf74b914e1"
                            style="font-weight: bold; color: #1CAAD9;"
                            target="_blank"
                            rel="nofollow"
                        > Composición Egipto </a> by <a
                            href="https://sketchfab.com/egonzalez105?utm_medium=embed&utm_campaign=share-popup&utm_content=f4beed52dc76434bb0ceffcf74b914e1"
                            style="font-weight: bold; color: #1CAAD9;"
                            target="_blank"
                            rel="nofollow"
                        > egonzalez105 </a> on <a
                            href="https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=f4beed52dc76434bb0ceffcf74b914e1"
                            style="font-weight: bold; color: #1CAAD9;"
                            target="_blank"
                            rel="nofollow"
                        >Sketchfab</a></p>
                </div>'
            ],
            [
                'date' => '2023-01-11',
                'title' => 'Evento 1',
                'description' => 'Descripción del evento 1.',
                'photo' => 'https://pixabay.com/get/gd978f84479df585ecf22d64f5ac88d359df909cb32d04c12cac5013c28a3db213437c5c8a861b552aa2836d70443b94e_1280.jpg',
                'video' => 'ruta-del-video.mp4',
                'iframe' => '<iframe src="https://www.youtube.com/embed/XXXXXXXXXXX"></iframe>'
            ],
            [
                'date' => '2023-01-15',
                'title' => 'Evento 1',
                'description' => 'Descripción del evento 1.',
                'photo' => 'https://pixabay.com/get/g2facff3d5ae47a1d3ea24386c0d97bc85f2ebbe3a23cfcaaadfac9d48eabdf0bd544fb4a28edb8c28b36c124e2a3f195b654e8b3783b6da55c8962de84728061_1280.jpg',
                'video' => 'ruta-del-video.mp4',
                'iframe' => '<iframe src="https://www.youtube.com/embed/XXXXXXXXXXX"></iframe>'
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
