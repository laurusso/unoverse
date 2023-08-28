
@section('titulo', 'Módulos')
@include('layout._menu')


 <div class="conteudo">

    <div class="btn">

    <span class="material-symbols-outlined">
menu
</span>
    </div>

<nav class="sidebar">
       <div class="text"> Side Menu </div>
        <ul >
            <li><a   href="#">Item 1</a></li>
            <li><a class="item-btn" href="#">Item 2 <span class="material-symbols-outlined first">
stat_minus_1
</span>  
<!-- cada class de subtopico tem que ter nome diferente -->
</a>
                <ul class="item-show">
                    <li><a href="#">Subitem 1</a></li>
                    <li><a href="#">Subitem 2</a></li>
                </ul>
            </li>
            <li><a  href="#">Item 3</a></li>
        </ul>
    </div>


    <script>
        $('.btn').click(function(){
            $(this).toggleClass("click");
        })

        $('.item-btn').click(function(){
            $('nav ul .item-show').toggleClass("show");
            $('nav ul .first-show').toggleClass("rotate");
        });
        $('.serv-btn').click(function(){
            $('nav ul .serv-show').toggleClass("show1");
        });

        $('nav ul li').click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        });
        </script>
    
</div> 

<!-- 
<div class="conteudo">
    <nav class="menu-lateral"> 
        <div class="titulo">Conteudo<span class="material-symbols-outlined">close</span></div>
        <ul>
            <li class="sub-itens"> <a href="#">Aula <span class="material-symbols-outlined">
stat_minus_1
</span> </a> </li>
                <ul class="sub-link">
                <li> <a   href="#">suv </a> </li>
                <li> <a  href="#">sub </a> </li>
                </ul>
            <li> <a href="#">Aula1 </a> </li>
            <li> <a href="#">Aula 23</a> </li>


        </ul>
    </nav> 
    <script  src="{{ asset('js/menu.js') }} " type="text/javascript"></script>
     <script type="text/javascript" src=""></script> -->
    <!-- <span class="material-symbols-outlined">
    menu
</span> 
</div> -->
<!-- CHAMADA DA DIV FOOTER -->
 @include('layout._footer') 


</body>
</html> 