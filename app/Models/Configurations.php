<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
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
    public static function generateToken()
    {
        //devolver mensaje si existe, para confirmar en el vue
        $token = strtoupper(substr(Str::uuid()->toString(), 0, 18));

        return $token;
    }

    /**
     * Metodo para saber si respondio una encueta o no
     *
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @return Collection<User>
     */
    public static function validateSurvey($encuesta)
    {
        //devolver mensaje si existe, para confirmar en el vue
        $date = false;
        $consul = false;

        if ($encuesta == "Curiosidades") {
            $consul = EvaluacionCuriosidades::where('ec_user', Auth::user()->id)->first();
        } else if ($encuesta == "Culturales") {
            $consul = EvaluacionCultura::where('ecl_user', Auth::user()->id)->first();
        } else if ($encuesta == "Adoraciones") {
            $consul = EvaluacionAdoraciones::where('ea_user', Auth::user()->id)->first();
        } else {
            $date = false;
        }

        if (isset($consul) && $consul) {
            $date = true;
        }

        return $date;
    }

    /**
     * Metodo que permite crear los diferentes item que se pueden consultar en el modulo de curiosidades
     *
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @return ItemsModules
     */
    public static function generateItemCuriosidades()
    {
        //crear los diferentes items que va a tener el modulo por cada usuario en casa que no tenga creado los item
        $validate = ItemsModules::where('im_modulo', 'Curiosidades')->where('im_user', Auth::user()->id)->first();

        //si no trae registro entonces ingresa y crea
        if (!$validate) {

            //devolver mensaje si existe, para confirmar en el vue
            $token = strtoupper(substr(Str::uuid()->toString(), 0, 10));
            ItemsModules::create([
                'im_guid' => $token,
                'im_modulo' => 'Curiosidades',
                'im_color' => 'bg-blue',
                'im_item' => 'Culto a los gatos',
                'im_descripcion' => 'En el antiguo Egipto, los gatos eran venerados en gran medida debido a su conexión con la diosa Bastet, la deidad felina asociada con la protección, la fertilidad y la alegría. Bastet, representada con cabeza de leona o gata, era adorada y considerada una diosa benévola que otorgaba prosperidad y salud a aquellos que la honraban adecuadamente.',
                'im_img' => 'curiosidadesImg/gatos.jpg',
                'im_video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/vkWXg_HNUqc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'im_frame' => '',
                'im_total_visitas' => 0,
                'im_user' => Auth::user()->id,
            ]);

            //devolver mensaje si existe, para confirmar en el vue
            $token1 = strtoupper(substr(Str::uuid()->toString(), 0, 10));
            ItemsModules::create([
                'im_guid' => $token1,
                'im_modulo' => 'Curiosidades',
                'im_color' => 'bg-blue',
                'im_item' => 'Invención del mortero',
                'im_descripcion' => 'La invención del mortero en el antiguo Egipto marcó un hito significativo en el desarrollo de la arquitectura y la construcción. El mortero, una mezcla de arena, cal y agua, desempeñó un papel crucial en la creación de los monumentos y las estructuras duraderas por las que los egipcios son conocidos en todo el mundo.',
                'im_img' => 'curiosidadesImg/gatos.jpg',
                'im_video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/rCwuyGgUW6g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'im_frame' => '',
                'im_total_visitas' => 0,
                'im_user' => Auth::user()->id,
            ]);

            //devolver mensaje si existe, para confirmar en el vue
            /* $token3 = strtoupper(substr(Str::uuid()->toString(), 0, 10));
            ItemsModules::create([
                'im_guid' => $token3,
                'im_modulo' => 'Curiosidades',
                'im_color' => 'bg-blue',
                'im_item' => 'Momificación',
                'im_descripcion' => '',
                'im_img' => '',
                'im_video' => '',
                'im_frame' => '',
                'im_total_visitas' => 0,
                'im_user' => Auth::user()->id,
            ]); */
        }
    }

    public static function generateItemAdoraciones()
    {
        //crear los diferentes items que va a tener el modulo por cada usuario en casa que no tenga creado los item
        $validate = ItemsModules::where('im_modulo', 'Adoraciones')->where('im_user', Auth::user()->id)->first();
        //dd($validate);
        //si no trae registro entonces ingresa y crea
        if (!$validate) {
            //devolver mensaje si existe, para confirmar en el vue
            $token = strtoupper(substr(Str::uuid()->toString(), 0, 10));
            ItemsModules::create([
                'im_guid' => $token,
                'im_modulo' => 'Adoraciones',
                'im_color' => 'bg-blue',
                'im_item' => 'Período Predinástico',
                'im_descripcion' => 'Durante esta fase temprana de la civilización egipcia, se desarrollaron las bases de su religión. Se adoraban diversos dioses y espíritus asociados con la naturaleza y los elementos. El Período Predinástico de la civilización egipcia, que abarcó aproximadamente desde el 5500 a.C. hasta el 3100 a.C., se sentaron las bases de la religión egipcia. En esta fase temprana, los egipcios adoraban una variedad de dioses y espíritus que estaban estrechamente relacionados con la naturaleza y los elementos.

                La religión en el Período Predinástico era animista, lo que significa que creían que los objetos naturales y las fuerzas de la naturaleza tenían espíritus o deidades asociadas a ellos. Los egipcios adoraban a estos espíritus como manifestaciones divinas y buscaban su protección y bendiciones.',
                'im_img' => '',
                'im_video' => 'https://www.youtube.com/embed/387v0uCc6Ro',
                'im_frame' => '<iframe title="Ancient Egypt Pack" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="600" height="440" src="https://sketchfab.com/models/a04604cf286242819f01b16395f23cd0/embed"> </iframe>',
                'im_total_visitas' => 0,
                'im_user' => Auth::user()->id,
            ]);

            //devolver mensaje si existe, para confirmar en el vue
            $token = strtoupper(substr(Str::uuid()->toString(), 0, 10));
            ItemsModules::create([
                'im_guid' => $token,
                'im_modulo' => 'Adoraciones',
                'im_color' => 'bg-blue',
                'im_item' => 'Culto a Ra',
                'im_descripcion' => 'Ra era el dios solar supremo y una de las deidades más importantes en el panteón egipcio. Se le representaba como un hombre con cabeza de halcón o como un disco solar. Ra era considerado el creador del universo y se le atribuía el ciclo diario del sol, donde viajaba por el cielo durante el día y descendía al inframundo por la noche.',
                'im_img' => '',
                'im_video' => '',
                'im_frame' => '<iframe title="Estatua Dios Re-Horakhty - CAIXAFORUM´21" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="600" height="440" src="https://sketchfab.com/models/bfe1c197e39348d089c26cd09ca098c6/embed"> </iframe>',
                'im_total_visitas' => 0,
                'im_user' => Auth::user()->id,
            ]);

            //devolver mensaje si existe, para confirmar en el vue
            $token = strtoupper(substr(Str::uuid()->toString(), 0, 10));
            ItemsModules::create([
                'im_guid' => $token,
                'im_modulo' => 'Adoraciones',
                'im_color' => 'bg-blue',
                'im_item' => 'Osiris',
                'im_descripcion' => 'Osiris era el dios de la vida después de la muerte y el juicio final. Era el rey del inframundo y juez de las almas. Se le representaba como un hombre momificado o como un faraón con una corona blanca y un cayado. Osiris también simbolizaba la fertilidad y el renacimiento.',
                'im_img' => '',
                'im_video' => 'https://www.youtube.com/embed/TaSqsdkiLbQ',
                'im_frame' => '<iframe title="Statue of Osiris" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="610" height="460" src="https://sketchfab.com/models/34d551e720074888ad3efc2e429f4ac7/embed"> </iframe>',
                'im_total_visitas' => 0,
                'im_user' => Auth::user()->id,
            ]);

            //devolver mensaje si existe, para confirmar en el vue
            $token = strtoupper(substr(Str::uuid()->toString(), 0, 10));
            ItemsModules::create([
                'im_guid' => $token,
                'im_modulo' => 'Adoraciones',
                'im_color' => 'bg-blue',
                'im_item' => 'Construcción de los templos de Karnak',
                'im_descripcion' => 'Los faraones egipcios, como Amenhotep III y Ramsés II, construyeron enormes templos en Karnak dedicados a Amón-Ra, Mut y Khonsu. Estos templos eran centros de adoración y rituales religiosos.',
                'im_img' => '',
                'im_video' => '',
                'im_frame' => '<iframe title="Esfinge en el templo de Amon-Ra en Luxor" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="600" height="440" src="https://sketchfab.com/models/dbdd434b2f16490188292128660d4751/embed"> </iframe>',
                'im_total_visitas' => 0,
                'im_user' => Auth::user()->id,
            ]);

            //devolver mensaje si existe, para confirmar en el vue
            $token = strtoupper(substr(Str::uuid()->toString(), 0, 10));
            ItemsModules::create([
                'im_guid' => $token,
                'im_modulo' => 'Adoraciones',
                'im_color' => 'bg-blue',
                'im_item' => 'Isis',
                'im_descripcion' => 'Isis era la diosa de la maternidad, la magia y la protección. Era la esposa y hermana de Osiris, y madre de Horus. Se le representaba como una mujer con un trono o como una mujer con alas extendidas. Isis era adorada como una poderosa diosa protectora y se le atribuían poderes curativos.',
                'im_img' => '',
                'im_video' => '',
                'im_frame' => '<iframe title="Isis y Horus" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="600" height="440" src="https://sketchfab.com/models/7c1b8a2ffd09464dad211b7f16dfc2a5/embed"> </iframe>',
                'im_total_visitas' => 0,
                'im_user' => Auth::user()->id,
            ]);

            //devolver mensaje si existe, para confirmar en el vue
            $token = strtoupper(substr(Str::uuid()->toString(), 0, 10));
            ItemsModules::create([
                'im_guid' => $token,
                'im_modulo' => 'Adoraciones',
                'im_color' => 'bg-blue',
                'im_item' => 'Horus',
                'im_descripcion' => 'Horus era el dios del cielo y la realeza. Era hijo de Osiris e Isis y se le representaba como un hombre con cabeza de halcón. Horus también era considerado el patrón de los faraones y se creía que encarnaban su espíritu y autoridad divina.',
                'im_img' => '',
                'im_video' => '',
                'im_frame' => '<iframe title="Estatuilla de Horus" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="600" height="440" src="https://sketchfab.com/models/4ee1f67cb71e42798c280766c26d04b2/embed"> </iframe>',
                'im_total_visitas' => 0,
                'im_user' => Auth::user()->id,
            ]);

            //devolver mensaje si existe, para confirmar en el vue
            $token = strtoupper(substr(Str::uuid()->toString(), 0, 10));
            ItemsModules::create([
                'im_guid' => $token,
                'im_modulo' => 'Adoraciones',
                'im_color' => 'bg-blue',
                'im_item' => 'Amón',
                'im_descripcion' => 'Amón era el dios supremo durante el Imperio Nuevo. Era el dios de la fertilidad y la creación, y se le asociaba con el sol y el aire. Se le representaba como un hombre con cabeza de carnero o como un hombre con una corona alta y dos plumas. Amón también se fusionó con Ra y se adoraba como Amón-Ra.',
                'im_img' => '',
                'im_video' => '',
                'im_frame' => '<iframe title="Relieve parietal de Amón y Mut" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="600" height="440" src="https://sketchfab.com/models/e492708aa33e46fca850653ad653a2f9/embed"> </iframe>',
                'im_total_visitas' => 0,
                'im_user' => Auth::user()->id,
            ]);

            //devolver mensaje si existe, para confirmar en el vue
            $token = strtoupper(substr(Str::uuid()->toString(), 0, 10));
            ItemsModules::create([
                'im_guid' => $token,
                'im_modulo' => 'Adoraciones',
                'im_color' => 'bg-blue',
                'im_item' => 'Hathor',
                'im_descripcion' => 'Hathor era la diosa del amor, la música, la danza y la alegría. Se le representaba como una mujer con cuernos de vaca o como una mujer con un disco solar entre los cuernos. Hathor también tenía un aspecto materno y protector, y se la consideraba la patrona de las mujeres y las madres.',
                'im_img' => '',
                'im_video' => 'https://www.youtube.com/embed/haYGnbxFnmA',
                'im_frame' => '<iframe title="Hathor Cow Head - GILDED HEAD OF HATHOR" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="610" height="440" src="https://sketchfab.com/models/5c746d02e1bb470e83ffc7dc0c0300b7/embed"> </iframe>',
                'im_total_visitas' => 0,
                'im_user' => Auth::user()->id,
            ]);

            //devolver mensaje si existe, para confirmar en el vue
            $token = strtoupper(substr(Str::uuid()->toString(), 0, 10));
            ItemsModules::create([
                'im_guid' => $token,
                'im_modulo' => 'Adoraciones',
                'im_color' => 'bg-blue',
                'im_item' => 'Anubis',
                'im_descripcion' => 'Anubis era el dios de la muerte y el embalsamamiento. Era representado como un hombre con cabeza de chacal. Anubis desempeñaba un papel crucial en el proceso de momificación y guiaba a las almas en su tránsito hacia el más allá. También se le atribuía la protección de las tumbas y los cementerios.',
                'im_img' => '',
                'im_video' => 'https://www.youtube.com/embed/112m7CUKzAA',
                'im_frame' => '<iframe src="https://clara.io/embed/cb86336e-09f2-4e58-9909-55f0322e2d5b?renderer=webgl" width="800" height="600" allowfullscreen></iframe>',
                'im_total_visitas' => 0,
                'im_user' => Auth::user()->id,
            ]);

            //devolver mensaje si existe, para confirmar en el vue
            $token = strtoupper(substr(Str::uuid()->toString(), 0, 10));
            ItemsModules::create([
                'im_guid' => $token,
                'im_modulo' => 'Adoraciones',
                'im_color' => 'bg-blue',
                'im_item' => 'Culto a Animales',
                'im_descripcion' => 'En la civilización egipcia, se adoraban y consideraban sagrados varios animales. Estos animales tenían una conexión especial con los dioses y desempeñaban roles importantes en la mitología y la vida cotidiana de los antiguos egipcios. Algunos de los animales más adorados en la civilización egipcia incluyen:',
                'im_img' => '',
                'im_video' => 'https://www.youtube.com/embed/DQZ_T5uBFU0',
                'im_frame' => '',
                'im_total_visitas' => 0,
                'im_user' => Auth::user()->id,
            ]);

            //devolver mensaje si existe, para confirmar en el vue
            $token = strtoupper(substr(Str::uuid()->toString(), 0, 10));
            ItemsModules::create([
                'im_guid' => $token,
                'im_modulo' => 'Adoraciones',
                'im_color' => 'bg-blue',
                'im_item' => 'Culto a Animales',
                'im_descripcion' => 'En la civilización egipcia, se adoraban y consideraban sagrados varios animales. Estos animales tenían una conexión especial con los dioses y desempeñaban roles importantes en la mitología y la vida cotidiana de los antiguos egipcios. Algunos de los animales más adorados en la civilización egipcia incluyen:',
                'im_img' => '',
                'im_video' => 'https://www.youtube.com/embed/DQZ_T5uBFU0',
                'im_frame' => '',
                'im_total_visitas' => 0,
                'im_user' => Auth::user()->id,
            ]);

            //devolver mensaje si existe, para confirmar en el vue
            $token = strtoupper(substr(Str::uuid()->toString(), 0, 10));
            ItemsModules::create([
                'im_guid' => $token,
                'im_modulo' => 'Adoraciones',
                'im_color' => 'bg-blue',
                'im_item' => 'DATO IMPORANTE',
                'im_descripcion' => 'Durante el reinado del faraón Ajenatón, aproximadamente en el siglo XIV a.C., se produjo un cambio drástico en la religión egipcia. Ajenatón abandonó el culto tradicional a los dioses politeístas y estableció el culto exclusivo al dios Atón, el disco solar. Esta nueva religión se conoce como el monoteísmo de Ajenatón o el culto a Atón.
                
                Ajenatón promovió la idea de que Atón era la única deidad verdadera y que debía ser adorada como el único dios supremo. Se construyó una nueva ciudad llamada Aketatón (hoy conocida como Amarna) como centro religioso y político del culto a Atón. Se realizaron cambios en los rituales y se eliminaron los templos dedicados a otros dioses.
                
                Este cambio religioso tuvo un impacto significativo en la sociedad egipcia. La adoración exclusiva a Atón llevó a la supresión de los antiguos dioses y sacerdotes, lo que generó resistencia y conflictos dentro del país. Después de la muerte de Ajenatón, su sucesor Tutankamón revirtió la reforma religiosa y restableció el culto tradicional a los dioses.
                
                Aunque el culto a Atón fue efímero en términos históricos, su importancia radica en el intento de establecer un sistema religioso monoteísta en una cultura políteísta arraigada. Además, el cambio religioso de Ajenatón tuvo un impacto en la evolución del arte y la representación artística, ya que se introdujeron nuevas formas y estilos en la iconografía egipcia durante ese período.',
                'im_img' => '/adoracionesImg/faraonAkenaton.jpg',
                'im_video' => 'https://www.youtube.com/embed/NQsJFeE8w7M',
                'im_frame' => '',
                'im_total_visitas' => 0,
                'im_user' => Auth::user()->id,
            ]);
        }
    }
}
