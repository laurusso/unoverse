<!-- CHAMADA DA DIV FIXED -->
@include('layout._menu')
    <div class="engloba-texto">
        <div class="texto-devs">
            <h1>desenvolvedores</h1>
            <p>Esses são os sofredores, afinal, ninguém gosta de arduino :(</p>
        </div>
        <div class="card-roxo">
        <img src="{!! asset('img/devs/laura.jpg') !!}">
        </div>
    </div>
    
    <div class="engloba-pessoas">
            <div class="card-azul">
                <img src="{!! asset('img/devs/nicole.jpg') !!}">
                <h2>Nicole</h2>
            </div>

            <div class="card-azul">
                <img src="{!! asset('img/devs/paula.jpg') !!}">
                <h2>Paula</h2>
            </div>

            <div class="card-azul">
                <img src="{!! asset('img/devs/evellyn.jpg') !!}">
                <h2>Evellyn</h2>
            </div>
            <div class="card-amarelo">
                <img src="{!! asset('img/devs/pedro.jpg') !!}">
                <h2>Pedro</h2>
            </div>
            <div class="card-amarelo">
                <img src="{!! asset('img/devs/eloisa.jpg') !!}">
                <h2>Eloísa</h2>
            </div>
            <div class="card-amarelo">
                <img src="{!! asset('img/devs/deborah.jpg') !!}">
                <h2>Deborah</h2>
            </div>
    </div>
    
    


<!-- CHAMADA DA DIV FOOTER -->
@include('layout._footer')


