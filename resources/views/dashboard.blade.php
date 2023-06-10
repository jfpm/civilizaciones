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
                    <button class="boton-enlace">Adoraciones </button>
                </center>
            </div>
            <div class="card">
                <br><br>
                <center>
                    <button class="round-button"></button>
                    <br><br>
                    <label style="color: white;">Visitas:</label>
                    <br><br><br>
                    <button class="boton-enlace">Curiosidades</button>
                </center>
            </div>
            <div class="card">
                <br><br>
                <center>
                    <button class="round-button"></button>
                    <br><br>
                    <label style="color: white;">Visitas:</label>
                    <br><br><br>
                    <button class="boton-enlace">Cultura General</button>
                </center>
            </div>
        </div>
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
</style>