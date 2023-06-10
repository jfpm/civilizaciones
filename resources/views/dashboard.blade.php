<x-app-layout>
    <div class="py-12" style="background-image: url('/img/fondo_principal.jpg'); background-position: center top; background-repeat: no-repeat; background-size: cover; height:700px">
        <center><h1 style="color: white;">CIVILIZACIONES EGIPCIAS</h1></center><br>
        <center><h2 style="color: white;">Distribución de Modulos del Sistema</h2></center>
        <div class="container">
            <div class="card-container">
                <div class="card">
                    <br><br>
                    <center>
                        <button class="round-button"></button>
                        <br><br>
                        <label style="color: white;">Visitas:</label>
                        <br><br><br>
                        <button class="boton-enlace" title="Ingresar al Modulo">Adoraciones</button>
                        <br><br>
                        <button onclick="openModal('modal1')" style="color: white;">Ver Más</button>
                    </center>
                </div>
                <div class="card">
                    <br><br>
                    <center>
                        <button class="round-button"></button>
                        <br><br>
                        <label style="color: white;">Visitas:</label>
                        <br><br><br>
                        <button class="boton-enlace" title="Ingresar al Modulo">Curiosidades</button>
                        <br><br>
                        <button onclick="openModal('modal2')" style="color: white;">Ver Más</button>
                    </center>
                </div>
                <div class="card">
                    <br><br>
                    <center>
                        <button class="round-button"></button>
                        <br><br>
                        <label style="color: white;">Visitas:</label>
                        <br><br><br>
                        <button class="boton-enlace" title="Ingresar al Modulo">Cultura General</button>
                        <br><br>
                        <button onclick="openModal('modal3')" style="color: white;">Ver Más</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <!-- Modales -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal1')">&times;</span>
            <center><h2 style="font-weight: bold;">BIENVENDIDOS AL MODULO 1</h2></center>
            <center><h2 style="font-weight: bold;">ADORACIONES DIVINAS</h2></center>
            <br>
            <p style="text-align: center; font-style: italic;" >
                La civilización egipcia tenía una fuerte tradición de adoración divina, y su religión era central en todos los aspectos de la vida egipcia. Los egipcios adoraban a una amplia variedad de dioses y diosas, cada uno con su propio dominio y propósito específico.
                El panteón egipcio estaba encabezado por dioses y diosas principales, como Ra, el dios del sol y la máxima deidad; Osiris, dios de la muerte y la resurrección; Isis, diosa de la magia y la fertilidad; y Horus, dios del cielo y el rey divino. Estos dioses y diosas eran considerados seres supremos y tenían una gran influencia sobre la vida cotidiana.
                Los egipcios creían que los dioses se manifestaban en diversos elementos de la naturaleza, como el sol, el río Nilo y los animales. Por lo tanto, se adoraba al sol como Ra y se consideraba que el Nilo era un regalo divino para la fertilidad de la tierra. Además, ciertos animales eran sagrados y se les asociaba con deidades específicas, como el buey Apis, relacionado con Ptah, el dios de la creación.
            </p>
            <br>
            <center>
                <button class="round-button">Ingreasr a Modulo</button>
            </center>
        </div>
    </div>

    <div id="modal2" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal2')">&times;</span>
            <center><h2 style="font-weight: bold;">BIENVENDIDOS AL MODULO 2</h2></center>
            <center><h2 style="font-weight: bold;">CURIOSIDADES</h2></center>
            <br>
            <p style="text-align: center; font-style: italic;" >
                La civilización egipcia es una de las más fascinantes y misteriosas de la historia antigua. Aquí tienes un resumen de algunas curiosidades sobre esta antigua cultura:
            </p>
            <br>
            <p style="text-align: center; font-style: italic;">
                1. Construcción de las pirámides: Las pirámides de Egipto son un testimonio asombroso de la habilidad arquitectónica de los antiguos egipcios. Aunque se desconoce exactamente cómo fueron construidas, se estima que se utilizaron bloques de piedra caliza y granito, transportados desde canteras distantes y levantados mediante rampas y sistemas de poleas.
            </p>
            <br>
            <p style="text-align: center; font-style: italic;">
                2. Importancia del Nilo: El río Nilo desempeñó un papel crucial en la civilización egipcia. Las inundaciones anuales del río dejaban una capa de limo fértil en las tierras circundantes, lo que permitía a los egipcios practicar la agricultura y cultivar cultivos abundantes.
            </p>
            <br>
            <center>
                <button class="round-button">Ingreasr a Modulo</button>
            </center>
        </div>
    </div>

    <div id="modal3" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal3')">&times;</span>
            <center><h2 style="font-weight: bold;">BIENVENDIDOS AL MODULO 3</h2></center>
            <center><h2 style="font-weight: bold;">CULTURA</h2></center>
            <br>
            <p style="text-align: center; font-style: italic;" >
                La civilización egipcia, una de las más antiguas del mundo, se desarrolló a lo largo del valle del río Nilo en el noreste de África durante más de 3,000 años. Su cultura dejó un legado duradero en áreas como la arquitectura, la religión, el arte y la escritura.
                La religión desempeñó un papel fundamental en la vida de los antiguos egipcios. Adoraban a numerosos dioses y diosas, y creían en la vida después de la muerte. Para asegurar una transición exitosa al más allá, los egipcios desarrollaron rituales y prácticas funerarias elaboradas, como la momificación, la construcción de tumbas y la colocación de objetos funerarios.
            </p>
            <br>
            <center>
                <button class="round-button">Ingreasr a Modulo</button>
            </center>
        </div>
    </div>
</x-app-layout>

<style>
    .round-button {
        border: none;
        border-radius: 45%;
        background-color: #e3e8eeb2;
        padding: 30px 30px;
        font-size: 16px;
        cursor: pointer;
    }

    .boton-enlace {
        border: none;
        border-radius: 7%;
        background-color: #e3e8eeb2;
        padding: 20px 70px;
        font-size: 16px;
        cursor: pointer;
    }

    .row {
        width: 100%;
        max-width: 500px;
        margin: 0 auto;
        padding: 10px;
        box-sizing: border-box;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 75vh;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .card {
        width: 250px;
        height: 350px;
        margin: 40px;
        background-color: #0e0e0779;
        border-radius: 15px;
        
    }

    /* Media query para dispositivos móviles */
    @media only screen and (max-width: 600px) {
        .container {
            flex-direction: column;
            align-items: stretch;
        }

        .my-div,
        .my-div-2,
        .my-div-3 {
            position: static;
            width: auto;
            height: auto;
            margin-top: 20px;
            left: auto;
        }
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        border-radius: 20px;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }
</style>

<script>
    // JavaScript para controlar la apertura y cierre del modal
    function openModal(modalId) {
        var modal = document.getElementById(modalId);
        modal.style.display = "block";
    }

    function closeModal(modalId) {
        var modal = document.getElementById(modalId);
        modal.style.display = "none";
    }

</script>
