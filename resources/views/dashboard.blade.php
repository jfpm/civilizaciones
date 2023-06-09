
<x-app-layout>
    <div class="py-12" style="background-image: url('/img/fondo_principal.jpg'); background-position: center top; background-repeat: no-repeat; background-size: cover; height:700px">    
        <center><h1 style="color: white;">CIVILIZACIONES EGIPCIAS</h1></center><br>
        <center><h2 style="color: white;">Distribución de Modulos del Sistema</h2></center>
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 my-div">
                    <br><br>
                    <center>
                        <button class="round-button"></button>
                        <br><br>
                        <label style="color: white;">Visitas:</label>
                        <br><br><br>
                        <button class="boton-enlace"></button>
                    </center>
                </div>
                <div class="col-xs-12 col-sm-4 my-div-2">
                    <br><br>
                    <center>
                        <button class="round-button"></button>
                        <br><br>
                        <label style="color: white;">Visitas:</label>
                        <br><br><br>
                        <button class="boton-enlace"></button>
                    </center>
                </div>
                <div class="col-xs-12 col-sm-4 my-div-3">
                    <br><br>
                    <center>
                        <button class="round-button"></button>
                        <br><br>
                        <label style="color: white;">Visitas:</label>
                        <br><br><br>
                        <button class="boton-enlace"></button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    .my-div {
        background-color:#0e0e0779;
        width: 20%;
        height: 370px;
        position: fixed;
        left: 150px;
        border-radius: 15px;
    }

    .my-div-2 {
        background-color:#0e0e0779;
        width: 20%;
        height: 370px;
        position: fixed;
        left: 570px;
        border-radius: 15px;
    }

    .my-div-3 {
        background-color:#0e0e0779;
        width: 20%;
        height: 370px;
        position: fixed;
        left: 1000px;
        border-radius: 15px;
    }

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
        padding: 30px 90px;
        font-size: 16px;
        cursor: pointer; 
    }
</style>    
