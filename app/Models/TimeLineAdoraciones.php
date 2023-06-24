<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeLineAdoraciones extends Model
{
    use HasFactory;

    public static function showTimeLineAdoraciones()
    {
        $events = [
            [
                'date' => 'c. 5500-3100 a.C.',
                'title' => 'Período Predinástico',
                'description' => 'Durante esta fase temprana de la civilización egipcia, se desarrollaron las bases de su religión. Se adoraban diversos dioses y espíritus asociados con la naturaleza y los elementos. El Período Predinástico de la civilización egipcia, que abarcó aproximadamente desde el 5500 a.C. hasta el 3100 a.C., se sentaron las bases de la religión egipcia. En esta fase temprana, los egipcios adoraban una variedad de dioses y espíritus que estaban estrechamente relacionados con la naturaleza y los elementos.

                La religión en el Período Predinástico era animista, lo que significa que creían que los objetos naturales y las fuerzas de la naturaleza tenían espíritus o deidades asociadas a ellos. Los egipcios adoraban a estos espíritus como manifestaciones divinas y buscaban su protección y bendiciones.',
                'video' => 'https://www.youtube.com/embed/387v0uCc6Ro',
                'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe title="Ancient Egypt Pack" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="600" height="440" src="https://sketchfab.com/models/a04604cf286242819f01b16395f23cd0/embed"> </iframe> </div>'
            ],
            [
                'date' => '',
                'title' => 'Culto a Ra',
                'description' => 'Ra era el dios solar supremo y una de las deidades más importantes en el panteón egipcio. Se le representaba como un hombre con cabeza de halcón o como un disco solar. Ra era considerado el creador del universo y se le atribuía el ciclo diario del sol, donde viajaba por el cielo durante el día y descendía al inframundo por la noche.',
                //'photo' => 'https://pixabay.com/get/gd978f84479df585ecf22d64f5ac88d359df909cb32d04c12cac5013c28a3db213437c5c8a861b552aa2836d70443b94e_1280.jpg',
                //'photo' => 'https://www.peakpx.com/es/hd-wallpaper-desktop-glktz',
                'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe title="Estatua Dios Re-Horakhty - CAIXAFORUM´21" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="600" height="440" src="https://sketchfab.com/models/bfe1c197e39348d089c26cd09ca098c6/embed"> </iframe> </div>'
            ],
            [
                'date' => '',
                'title' => 'Osiris',
                'description' => 'Osiris era el dios de la vida después de la muerte y el juicio final. Era el rey del inframundo y juez de las almas. Se le representaba como un hombre momificado o como un faraón con una corona blanca y un cayado. Osiris también simbolizaba la fertilidad y el renacimiento.',
                //'photo' => 'https://pixabay.com/get/g2facff3d5ae47a1d3ea24386c0d97bc85f2ebbe3a23cfcaaadfac9d48eabdf0bd544fb4a28edb8c28b36c124e2a3f195b654e8b3783b6da55c8962de84728061_1280.jpg',
                'video' => 'https://www.youtube.com/embed/TaSqsdkiLbQ',
                'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe title="Statue of Osiris" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="610" height="460" src="https://sketchfab.com/models/34d551e720074888ad3efc2e429f4ac7/embed"> </iframe> </div>'    
                
            ],
            [
                'date' => '',
                'title' => 'Construcción de los templos de Karnak',
                'description' => 'Los faraones egipcios, como Amenhotep III y Ramsés II, construyeron enormes templos en Karnak dedicados a Amón-Ra, Mut y Khonsu. Estos templos eran centros de adoración y rituales religiosos.',
                //'photo' => 'https://pixabay.com/get/g2facff3d5ae47a1d3ea24386c0d97bc85f2ebbe3a23cfcaaadfac9d48eabdf0bd544fb4a28edb8c28b36c124e2a3f195b654e8b3783b6da55c8962de84728061_1280.jpg',
                'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe title="Esfinge en el templo de Amon-Ra en Luxor" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="600" height="440" src="https://sketchfab.com/models/dbdd434b2f16490188292128660d4751/embed"> </iframe> </div>',
                //'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe title="Hapi el escriba (D. XIX)" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/2f44599345c8479591b7a6e2a1d72299/embed"> </iframe> </div>'    
                
            ],
            [
                'date' => '',
                'title' => 'Isis',
                'description' => 'Isis era la diosa de la maternidad, la magia y la protección. Era la esposa y hermana de Osiris, y madre de Horus. Se le representaba como una mujer con un trono o como una mujer con alas extendidas. Isis era adorada como una poderosa diosa protectora y se le atribuían poderes curativos.',
                //'photo' => 'https://pixabay.com/get/g2facff3d5ae47a1d3ea24386c0d97bc85f2ebbe3a23cfcaaadfac9d48eabdf0bd544fb4a28edb8c28b36c124e2a3f195b654e8b3783b6da55c8962de84728061_1280.jpg',
                'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe title="Isis y Horus" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="600" height="440" src="https://sketchfab.com/models/7c1b8a2ffd09464dad211b7f16dfc2a5/embed"> </iframe> </div>',
                //'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe title="Hapi el escriba (D. XIX)" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/2f44599345c8479591b7a6e2a1d72299/embed"> </iframe> </div>'    
                
            ],
            [
                'date' => '',
                'title' => 'Horus',
                'description' => 'Horus era el dios del cielo y la realeza. Era hijo de Osiris e Isis y se le representaba como un hombre con cabeza de halcón. Horus también era considerado el patrón de los faraones y se creía que encarnaban su espíritu y autoridad divina.',
                //'photo' => 'https://pixabay.com/get/g2facff3d5ae47a1d3ea24386c0d97bc85f2ebbe3a23cfcaaadfac9d48eabdf0bd544fb4a28edb8c28b36c124e2a3f195b654e8b3783b6da55c8962de84728061_1280.jpg',
                'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe title="Estatuilla de Horus" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="600" height="440" src="https://sketchfab.com/models/4ee1f67cb71e42798c280766c26d04b2/embed"> </iframe> </div>',
                //'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe title="Hapi el escriba (D. XIX)" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/2f44599345c8479591b7a6e2a1d72299/embed"> </iframe> </div>'    
                
            ],
            [
                'date' => '',
                'title' => 'Amón',
                'description' => ' Amón era el dios supremo durante el Imperio Nuevo. Era el dios de la fertilidad y la creación, y se le asociaba con el sol y el aire. Se le representaba como un hombre con cabeza de carnero o como un hombre con una corona alta y dos plumas. Amón también se fusionó con Ra y se adoraba como Amón-Ra.',
                //'photo' => 'https://pixabay.com/get/g2facff3d5ae47a1d3ea24386c0d97bc85f2ebbe3a23cfcaaadfac9d48eabdf0bd544fb4a28edb8c28b36c124e2a3f195b654e8b3783b6da55c8962de84728061_1280.jpg',
                'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe title="Relieve parietal de Amón y Mut" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="600" height="440" src="https://sketchfab.com/models/e492708aa33e46fca850653ad653a2f9/embed"> </iframe> </div>',
                //'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe title="Hapi el escriba (D. XIX)" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/2f44599345c8479591b7a6e2a1d72299/embed"> </iframe> </div>'    
                
            ],
            [
                'date' => '',
                'title' => 'Hathor',
                'description' => ' Hathor era la diosa del amor, la música, la danza y la alegría. Se le representaba como una mujer con cuernos de vaca o como una mujer con un disco solar entre los cuernos. Hathor también tenía un aspecto materno y protector, y se la consideraba la patrona de las mujeres y las madres.',
                //'photo' => 'https://pixabay.com/get/g2facff3d5ae47a1d3ea24386c0d97bc85f2ebbe3a23cfcaaadfac9d48eabdf0bd544fb4a28edb8c28b36c124e2a3f195b654e8b3783b6da55c8962de84728061_1280.jpg',
                'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe title="Hathor Cow Head - GILDED HEAD OF HATHOR" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="610" height="440" src="https://sketchfab.com/models/5c746d02e1bb470e83ffc7dc0c0300b7/embed"> </iframe> </div>',    
                'video' => 'https://www.youtube.com/embed/haYGnbxFnmA'
            ],
            [
                'date' => '',
                'title' => 'Anubis',
                'description' => 'Anubis era el dios de la muerte y el embalsamamiento. Era representado como un hombre con cabeza de chacal. Anubis desempeñaba un papel crucial en el proceso de momificación y guiaba a las almas en su tránsito hacia el más allá. También se le atribuía la protección de las tumbas y los cementerios.',
                //'photo' => 'https://pixabay.com/get/g2facff3d5ae47a1d3ea24386c0d97bc85f2ebbe3a23cfcaaadfac9d48eabdf0bd544fb4a28edb8c28b36c124e2a3f195b654e8b3783b6da55c8962de84728061_1280.jpg',
                'iframe' => '<iframe src="https://clara.io/embed/cb86336e-09f2-4e58-9909-55f0322e2d5b?renderer=webgl" width="800" height="600" allowfullscreen></iframe>',    
                'video' => 'https://www.youtube.com/embed/112m7CUKzAA'
            ],
            [
                'date' => '',
                'title' => 'Culto a Animales',
                'description' => 'En la civilización egipcia, se adoraban y consideraban sagrados varios animales. Estos animales tenían una conexión especial con los dioses y desempeñaban roles importantes en la mitología y la vida cotidiana de los antiguos egipcios. Algunos de los animales más adorados en la civilización egipcia incluyen:',
                //'photo' => 'https://pixabay.com/get/g2facff3d5ae47a1d3ea24386c0d97bc85f2ebbe3a23cfcaaadfac9d48eabdf0bd544fb4a28edb8c28b36c124e2a3f195b654e8b3783b6da55c8962de84728061_1280.jpg',
                //'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe title="Hapi el escriba (D. XIX)" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/2f44599345c8479591b7a6e2a1d72299/embed"> </iframe> </div>'    
                'video' => 'https://www.youtube.com/embed/DQZ_T5uBFU0'
            ],
            [
                'date' => '',
                'title' => 'El Gato',
                'description' => ' Los gatos eran altamente venerados en el antiguo Egipto. Eran asociados con la diosa Bastet, la protectora del hogar y la fertilidad. Los egipcios consideraban a los gatos sagrados y los trataban con gran respeto.',
                //'photo' => 'https://pixabay.com/get/g2facff3d5ae47a1d3ea24386c0d97bc85f2ebbe3a23cfcaaadfac9d48eabdf0bd544fb4a28edb8c28b36c124e2a3f195b654e8b3783b6da55c8962de84728061_1280.jpg',
                'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe title="The Gayer-Anderson cat" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="610" height="460" src="https://sketchfab.com/models/0caec73829904e5986e31ae377d1bb60/embed"> </iframe> </div>'    
                //'video' => 'https://www.youtube.com/watch?v=112m7CUKzAA'
            ],
            [
                'date' => '',
                'title' => 'El escarabajo',
                'description' => 'El escarabajo sagrado, conocido como escarabajo jepri, era un símbolo de renacimiento y resurrección. Se creía que el escarabajo era un símbolo de Khepri, el dios del sol naciente.',
                'photo' => '/adoracionesImg/escarabajo.jpg',
                //'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe title="Hapi el escriba (D. XIX)" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/2f44599345c8479591b7a6e2a1d72299/embed"> </iframe> </div>'    
                //'video' => 'https://www.youtube.com/watch?v=112m7CUKzAA'
            ],
            [
                'date' => '',
                'title' => 'La vaca',
                'description' => 'La diosa Hathor, asociada con la música, el amor, la maternidad y la fertilidad, era representada como una vaca o como una mujer con cabeza de vaca. Las vacas eran consideradas animales sagrados y se les rendía culto en los templos.',
                //'photo' => 'https://pixabay.com/get/g2facff3d5ae47a1d3ea24386c0d97bc85f2ebbe3a23cfcaaadfac9d48eabdf0bd544fb4a28edb8c28b36c124e2a3f195b654e8b3783b6da55c8962de84728061_1280.jpg',
                'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe title="Carved Wooden Head of the Goddess Hathor" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="610" height="460" src="https://sketchfab.com/models/f9841cc68b784714b9f86879ef09d82b/embed"> </iframe> </div>'    
                //'video' => 'https://www.youtube.com/watch?v=112m7CUKzAA'
            ],
            [
                'date' => '',
                'title' => 'DATO IMPORANTE',
                'description' => 'Durante el reinado del faraón Ajenatón, aproximadamente en el siglo XIV a.C., se produjo un cambio drástico en la religión egipcia. Ajenatón abandonó el culto tradicional a los dioses politeístas y estableció el culto exclusivo al dios Atón, el disco solar. Esta nueva religión se conoce como el monoteísmo de Ajenatón o el culto a Atón.
                
                Ajenatón promovió la idea de que Atón era la única deidad verdadera y que debía ser adorada como el único dios supremo. Se construyó una nueva ciudad llamada Aketatón (hoy conocida como Amarna) como centro religioso y político del culto a Atón. Se realizaron cambios en los rituales y se eliminaron los templos dedicados a otros dioses.
                
                Este cambio religioso tuvo un impacto significativo en la sociedad egipcia. La adoración exclusiva a Atón llevó a la supresión de los antiguos dioses y sacerdotes, lo que generó resistencia y conflictos dentro del país. Después de la muerte de Ajenatón, su sucesor Tutankamón revirtió la reforma religiosa y restableció el culto tradicional a los dioses.
                
                Aunque el culto a Atón fue efímero en términos históricos, su importancia radica en el intento de establecer un sistema religioso monoteísta en una cultura políteísta arraigada. Además, el cambio religioso de Ajenatón tuvo un impacto en la evolución del arte y la representación artística, ya que se introdujeron nuevas formas y estilos en la iconografía egipcia durante ese período.',
                //'photo' => 'https://pixabay.com/get/g2facff3d5ae47a1d3ea24386c0d97bc85f2ebbe3a23cfcaaadfac9d48eabdf0bd544fb4a28edb8c28b36c124e2a3f195b654e8b3783b6da55c8962de84728061_1280.jpg',
                //'iframe' => '<div class="sketchfab-embed-wrapper"> <iframe title="Hapi el escriba (D. XIX)" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/2f44599345c8479591b7a6e2a1d72299/embed"> </iframe> </div>'    
                'video' => 'https://www.youtube.com/embed/NQsJFeE8w7M',
                'photo' => '/adoracionesImg/faraonAkenaton.jpg',
            ],
            // Agrega más eventos si es necesario
        ];

        return $events;
    }
}
