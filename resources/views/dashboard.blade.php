<x-app-layout>
    <div class="py-12"
        style="background-image: url('/img/fondo_principal.jpg'); background-position: center top; background-repeat: no-repeat; background-size: cover; min-height: 700px">
        <div class="py-8">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                <div class="mx-auto max-w-2xl sm:text-center">
                    <h1
                        class="text-3xl font-bold tracking-tight text-white text-grey-500 sm:text-5xl font-serif-egyptian">
                        {!! config('app.name', 'Laravel') !!}</h1> <br><br>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-[#0e0e07b8] shadow rounded-lg p-4">
                        <img class="w-full h-40 object-contain rounded-full mb-4" src="{{ asset('img/gatos.jpg') }}"
                            alt="Miembro del equipo 1">
                        <form method="GET" action="{{ route('adoraciones_divinas') }}">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3 w-full block">Adoraciones
                            </button>
                        </form>
                        <p class="text-white mt-3 text-center text-xl"><a onclick="openModal('modal1')"
                                href="#">Ver
                                Más</a></p>
                    </div>
                    <div class="bg-[#0e0e07b8] shadow rounded-lg p-4">
                        <img class="w-full h-40 object-contain rounded-full mb-4" src="{{ asset('img/nilo.jpg') }}"
                            alt="Miembro del equipo 2">                        
                        <form method="GET" action="{{ route('curiosidades') }}">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3 w-full block">Curiosidades
                            </button>
                        </form>
                        <p class="text-white mt-3 text-center text-xl"><a onclick="openModal('modal2')" href="#">
                                Ver Más</a>
                        </p>
                    </div>
                    <div class="bg-[#0e0e07b8] shadow rounded-lg p-4">
                        <img class="w-full h-40 object-contain rounded-full mb-4" src="{{ asset('img/sarcofago.png') }}"
                            alt="Miembro del equipo 3">
                        <form method="GET" action="{{ route('cultura') }}">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3 w-full block">Cultura
                                general
                            </button>
                        </form>
                        <p class="text-white mt-3 text-center text-xl"><a onclick="openModal('modal3')" href="#">
                                Ver Más</a>
                        </p>
                    </div>
                    <!-- Agrega más miembros del equipo aquí -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modales -->
    <!-- Modal -->
    <div id="modal1" class="modal hidden fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center overflow-auto">
        <div class="modal-content bg-white p-4 rounded-lg">
            <span class="modal-close" onclick="closeModal('modal1')">&times;</span>
            <!-- Contenido del modal -->
            <h2 class="text-lg font-bold mb-2">ADORACIONES DIVINAS</h2>
            <p class="font-serif-egyptian">La civilización egipcia tenía una fuerte tradición de adoración divina, y su religión era central en
                todos los aspectos de la vida egipcia. Los egipcios adoraban a una amplia variedad de dioses y diosas,
                cada uno con su propio dominio y propósito específico.
                El panteón egipcio estaba encabezado por dioses y diosas principales, como Ra, el dios del sol y la
                máxima deidad; Osiris, dios de la muerte y la resurrección; Isis, diosa de la magia y la fertilidad; y
                Horus, dios del cielo y el rey divino. Estos dioses y diosas eran considerados seres supremos y tenían
                una gran influencia sobre la vida cotidiana.
                Los egipcios creían que los dioses se manifestaban en diversos elementos de la naturaleza, como el sol,
                el río Nilo y los animales. Por lo tanto, se adoraba al sol como Ra y se consideraba que el Nilo era un
                regalo divino para la fertilidad de la tierra. Además, ciertos animales eran sagrados y se les asociaba
                con deidades específicas, como el buey Apis, relacionado con Ptah, el dios de la creación..</p>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4"
                onclick="closeModal('modal1')">Cerrar</button>
        </div>
    </div>

    <div id="modal2" class="modal hidden fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center">
        <div class=" modal-content bg-white p-4 rounded-lg">
            <span class="modal-close" onclick="closeModal('modal2')">&times;</span>
            <!-- Contenido del modal -->
            <h2 class="text-lg font-bold mb-2">CURIOSIDADES</h2>
            <p>La civilización egipcia es una de las más fascinantes y misteriosas de la historia antigua. Aquí tienes un resumen de algunas curiosidades sobre esta antigua cultura: <br><br>  
                1. Construcción de las pirámides: Las pirámides de Egipto son un testimonio asombroso de la habilidad arquitectónica de los antiguos egipcios. Aunque se desconoce exactamente cómo fueron construidas, se estima que se utilizaron bloques de piedra caliza y granito, transportados desde canteras distantes y levantados mediante rampas y sistemas de poleas. <br><br>
                2. Importancia del Nilo: El río Nilo desempeñó un papel crucial en la civilización egipcia. Las inundaciones anuales del río dejaban una capa de limo fértil en las tierras circundantes, lo que permitía a los egipcios practicar la agricultura y cultivar cultivos abundantes.
            </p>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4"
                onclick="closeModal('modal2')">Cerrar</button>
        </div>
    </div>

    <div id="modal3" class="modal hidden fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center">
        <div class="modal-content bg-white p-4 rounded-lg">
            <span class="modal-close" onclick="closeModal('modal3')">&times;</span>
            <!-- Contenido del modal -->
            <h2 class="text-lg font-bold mb-2">CULTURA</h2>
            <p>La civilización egipcia, una de las más antiguas del mundo, se desarrolló a lo largo del valle del río Nilo en el noreste de África durante más de 3,000 años. Su cultura dejó un legado duradero en áreas como la arquitectura, la religión, el arte y la escritura. <br><br>
                La religión desempeñó un papel fundamental en la vida de los antiguos egipcios. Adoraban a numerosos dioses y diosas, y creían en la vida después de la muerte. Para asegurar una transición exitosa al más allá, los egipcios desarrollaron rituales y prácticas funerarias elaboradas, como la momificación, la construcción de tumbas y la colocación de objetos funerarios.</p>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4"
                onclick="closeModal('modal3')">Cerrar</button>
        </div>
    </div>

    <script>
        function openModal(modalId) {
            var modal = document.getElementById(modalId);
            modal.classList.remove('hidden');
        }

        function closeModal(modalId) {
            var modal = document.getElementById(modalId);
            modal.classList.add('hidden');
        }
    </script>
</x-app-layout>