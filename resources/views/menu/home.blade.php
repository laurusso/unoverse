        <!-- CHAMADA DA DIV FIXED -->
        @include('layout._menu')

            <!-- Slideshow container -->
            <div class="container-slide">
                <div class="slides">
                    <input type="radio"  name="slide" id="slide1">
                    <input type="radio"   name="slide" id="slide2">
                    <input type="radio"   name="slide" id="slide3">

                    <div class="slide s1">
                        <img src="{!! asset('img/katia.jpeg') !!}">
                    </div>

                    <div class="slide">
                        <img src="{!! asset('img/um.jpg') !!}">
                    </div>

                    <div class="slide">
                        <img src="{!! asset('img/uno.png') !!}">
                    </div>

                </div>

                <div class="navigation">
                    <label class="dot" for="slide1"></label>
                    <label class="dot" for="slide2"></label>
                    <label class="dot" for="slide3"></label>    
                </div> 

            </div><!--acaba slider -->
        <div class="conteudo-home">
            AAAAAAAAAAA
        </div>
        <!-- CHAMADA DA DIV FOOTER -->
        @include('layout._footer')

    </div> <!--FIM MAE-->
</body>
</html>