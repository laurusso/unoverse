
@section('titulo', 'Módulos')
@include('layout._menu')


<!-- <div class="conteudo">

<div class="sidebar">
        <h2>Menu</h2>
        <ul id="mainMenu">
            <li><a href="#">Item 1</a></li>
            <li><a href="#">Item 2</a>
                <ul class="subMenu">
                    <li><a href="#">Subitem 1</a></li>
                    <li><a href="#">Subitem 2</a></li>
                </ul>
            </li>
            <li><a href="#">Item 3</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Main Content</h2>
    </div>
    <script src="script.js"></script>

</div> -->

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