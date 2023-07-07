<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeLineCultura extends Model
{
    use HasFactory;

    public static function showTimeLineCultura()
    {
        $events = [
            [
                'date' => 'CULTURA - GASTRONOMIA',
                'title' => 'GASTRONOMIA',
                'description' => 'La gastronomía en el antiguo Egipto era rica y diversa, 
                    reflejando la abundancia de ingredientes disponibles en la región. Los egipcios 
                    consumían una variedad de alimentos, incluyendo pan, cerveza, vegetales, frutas, 
                    carnes como el pescado y la carne de ave, así como lácteos y miel. Los platos se 
                    sazonaban con hierbas y especias, y se utilizaban técnicas de cocción como asar, 
                    hervir y cocinar al horno. La alimentación también estaba influenciada por la 
                    jerarquía social, con los nobles disfrutando de comidas más elaboradas y exóticas. 
                    La gastronomía egipcia no solo era una necesidad básica, sino también un reflejo de 
                    la cultura y la sociedad de la época.',
                'photo' => '/imagens_cultura/comida.png',
                'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe
                    src="https://sketchfab.com/models/b194548d37ac4e95a4e7cc3f1118e2b6/embed"
                    title="Casa egipcia"
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
                    height="200"
                    > </iframe>
                </div>'
            ],
            [
                'date' => 'CULTURA - GASTRONOMIA',
                'title' => 'PESCADO',
                'description' => 'El pescado era una parte importante 
                    de la gastronomía en el antiguo Egipto debido a la ubicación 
                    geográfica del país, que le proporcionaba acceso a ríos como 
                    el Nilo y al mar Mediterráneo.
                    Los egipcios consumían una amplia variedad de especies de peces,
                    incluyendo tilapia, anguila, perca del Nilo, múltiples especies de bagre y 
                    muchos más. Los peces capturados en el Nilo eran particularmente populares 
                    debido a su disponibilidad y frescura.',
                'photo' => '/imagens_cultura/peces.png',
                'video' => '',
                'iframe' => '></iframe>'
                
                
            ],
            [
                'date' => 'CULTURA - GASTRONOMIA',
                'title' => 'CULTIVO DE ALIMENTOS',
                'description' => 'La civilización egipcia se desarrolló en las orillas del río Nilo,
                    lo que proporcionaba suelos fértiles para el cultivo de una amplia variedad de alimentos.
                    Los egipcios cultivaban trigo, cebada, lentejas, hortalizas, dátiles, uvas y otros frutos.
                    El pan era el alimento básico en la dieta egipcia. Se elaboraba principalmente con trigo y 
                    cebada, y existían diferentes tipos de panes, como panes redondos, panes planos y panes con semillas.',
                'photo' => '/imagens_cultura/trigo.png',
                'video' => '',
                'iframe' => '<iframe src="https://sketchfab.com/models/d1ae09e3cb8343bc8790b15928452906/embed"></iframe>'
            ],
            [
                'date' => 'CULTURA - COMERCIO ',
                'title' => 'COMERCIO',
                'description' => 'El comercio en el antiguo Egipto fue una parte vital de su economía y sociedad. 
                    Los egipcios establecieron rutas comerciales terrestres y marítimas para intercambiar una amplia 
                    variedad de bienes, incluyendo productos agrícolas, textiles finos, joyas y objetos de lujo. El 
                    trueque y el uso de metales preciosos como moneda facilitaron el intercambio, y las ciudades 
                    principales, mercados locales y puertos fueron centros comerciales clave. Las relaciones 
                    comerciales se extendieron a Canaán, Fenicia, Mesopotamia, Nubia y el mundo griego, trayendo 
                    consigo productos exóticos y estimulando el crecimiento económico y la conexión cultural. 
                    El comercio en el antiguo Egipto fue esencial para la prosperidad y la influencia de la 
                    civilización egipcia.',
                'photo' => '/imagens_cultura/comercio.png',
                'video' => '',
                'iframe' => '></iframe>'
                

            ],

            [
                'date' => 'CULTURA -SOCIAL',
                'title' => 'JERARQUIA SOCIAL',
                'description' => 'La jerarquía social en el antiguo Egipto estaba estructurada de 
                    forma piramidal, reflejando la organización de la sociedad. En la cúspide se 
                    encontraba el faraón, considerado el gobernante supremo y divino. Justo debajo de 
                    él se situaban los miembros de la familia real y la nobleza, quienes gozaban de 
                    privilegios y riquezas.
                    A continuación estaban los altos funcionarios, sacerdotes y escribas, quienes desempeñaban 
                    roles importantes en el gobierno, la administración y la religión. Estos individuos tenían acceso
                    a educación y podían adquirir riqueza y estatus a lo largo de su carrera.

                    En un nivel inferior se encontraba la clase media compuesta por artesanos, comerciantes y campesinos
                    prósperos. Estos individuos tenían habilidades especializadas y gozaban de cierto nivel de 
                    estabilidad económica.
                    En la base de la pirámide social se encontraba la gran masa de la población, conformada por agricultores, 
                    trabajadores manuales y esclavos. Estos individuos tenían menos estatus y acceso a recursos, y su principal 
                    tarea era trabajar en la agricultura y en la construcción de monumentos y estructuras.
                    La jerarquía social estaba arraigada en la creencia de que cada individuo tenía un papel 
                    específico en la sociedad y en la importancia de mantener el equilibrio y la armonía. 
                    La movilidad social era posible, pero generalmente estaba limitada por el nacimiento y 
                    la ocupación de uno.
                    La jerarquía social en el antiguo Egipto no solo determinaba el estatus y los privilegios 
                    de las personas, sino que también influía en su estilo de vida, sus derechos legales y su 
                    participación en ceremonias religiosas y rituales.'
                ,
                'photo' => '/imagens_cultura/jerarquia.png',
                'video' => '',
                'iframe' => '></iframe>'
                
            ],

            [
                'date' => 'CULTURA - SOCIAL',
                'title' => '',
                'description' => ' En este emocionante video, exploraremos las 
                fascinantes clases sociales de la antigua civilización egipcia. 
                Sumérgete en el esplendor del antiguo Egipto mientras descubrimos 
                cómo se estructuraba y organizaba su sociedad.

                Acompáñanos en un viaje a través del tiempo mientras desentrañamos las jerarquías y estratos sociales que caracterizaron a esta enigmática civilizació',
                'video' => 'https://www.youtube.com/embed/Hsy3AxUHsH0',
                'iframe' => '<iframe src="https://sketchfab.com/models/1217d2e444aa49cf9eaa5ce679fc4ff4/embed"  
                    width="90%"
                    height="300"></iframe>'
                
            ],

            // Agrega más eventos si es necesario
        ];

        return $events;
    }
}
