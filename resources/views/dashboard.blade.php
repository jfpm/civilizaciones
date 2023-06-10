
<x-app-layout>
    
    <div class="container">
        <div class="card-container">
            <div class="card">Tarjeta 1</div>
            <div class="card">Tarjeta 2</div>
            <div class="card">Tarjeta 3</div>
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
    height: 100vh;
}

.card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.card {
    width: 300px;
    height: 200px;
    margin: 10px;
    background-color: #e3e3e3;
}


</style>    
