<!-- 
    Este outro arquivo eh a pagina de acoes ja realizadas pelos estudantes do CTI em prol do ensino da robotica, estao situadas, a principio, nos anos de 2022 e 2023.
 -->

<!-- CHAMADA DA DIV FIXED -->
@section('titulo', 'Ações')
@include('layout._menu')
    <div id="titulo_acoes">
        <div class="texto_acoes">
            <h1>Projetos sociais</h1>
            <p>O Colégio Técnico Industrial “Prof. Isaac Portal Roldán” sempre busca expandir seus projetos para além da escola. Logo, a robótica, dirigida pela professora doutora Katia Livia Zambon, é sempre levada a outras escolas de Bauru, com intuito de compartilhar conhecimentos. As imagens mostram esses momentos únicos de interação social :)</p>
            <p>Além disso, é importante pontuar que a visitação em escolas do estado de SP e o posterior desenvolvimento dessa plataforma foram motivados a partir do Projeto de Extensão do Prograd Unesp Presente, com intuito social, realizado de abril de 2022 a abril de 2023, mas as visitações seguiram seu curso em decorrência dos esforços da professora Kátia e seus alunos na robótica, além desse TCC.</p>
        </div>
        <img src="{!! asset('img/Wave.svg') !!}" id="wave_acoes" alt="">
    </div>


    <div class="envolve__slider">
        <section class="swiper mySwiper">
            <div class="swiper-wrapper">
            <div class="card swiper-slide">
                <div class="card__image">
                <img src="{!! asset('img/social/feira.jpg') !!}" alt=" Imagem de feira de ciências Bauru">
                </div>

                <div class="card__content">
                <span class="card__title">Semana da Ciência de Bauru - 2022</span>
                <span class="card__name">Apresentação do robô mBot</span>
                <p class="card__text">O robô em questão tem um sensor infravermelho que foi programado no mBlock (linguagem de blocos baseada em Scratch) para seguir uma linha preta.</p>
                    <!-- <button class="card-btn">View More</button> -->
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card__image">
                <img src="{!! asset('img/social/ctifeira.jpg') !!}" alt=" Imagem de feira no CTI">
                </div>

                <div class="card__content">
                <span class="card__title">Intervalo com robótica CTI</span>
                <span class="card__name">Apresentação aos ingressantes do Colégio</span>
                <p class="card__text">Na foto, aparece o jogo "Operando com Makey Makey" criado durante um projeto de extensão, é programado em blocos pelo Scratch.</p>
                    <!-- <button class="card-btn">View More</button> -->
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card__image">
                <img src="{!! asset('img/social/ada.jpg') !!}" alt=" Imagem de aula na escola Ada Cariani">
                </div>

                <div class="card__content">
                <span class="card__title">Aula introdutória de robótica - 2022</span>
                <span class="card__name">Realizada na E.E. Ada Cariani Avalone Profª.</span>
                <p class="card__text">Nesse dia, foi oferecida uma aula introdutória de programação em Arduino, com auxílio dos notebooks do estado de SP e kits Arduino do CTI.</p>
                    <!-- <button class="card-btn">View More</button> -->
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card__image">
                <img src="{!! asset('img/social/zuiani.jpg') !!}" alt=" Imagem de apresentação na Escola Luiz Zuiani">
                </div>

                <div class="card__content">
                <span class="card__title">Apresentação de protótipos de robótica</span>
                <span class="card__name">Realizada na Escola Luiz Zuiani Dr EE EJA</span>
                <p class="card__text">Foi um dia em que a professora Katia Livia (responsável pela robótica no CTI) foi conhecer os equipamentos que as escolas do estado de SP dispõe, aproveitando a opurtunidade para apresentar à escola alguns protótipos feitos no CTI.</p>
                    <!-- <button class="card-btn">View More</button> -->
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card__image">
                <img src="{!! asset('img/social/morais.jpg') !!}" alt=" Imagem de apresentação na Escola Morais Pacheco">
                </div>

                <div class="card__content">
                <span class="card__title">Apresentação de protótipos de robótica</span>
                <span class="card__name">Realizada na EE Prof. Morais Pacheco</span>
                <p class="card__text">Visita para apresentação de projetos de robótica, em que foi feito um rodízio de estudantes do Morais Pacheco, que passaram por todos os stands ali presentes. Foi uma apresentação relacionada ao PIBID na área de Física e a TV Unesp foi convidada para gravar o evento. </p>
                    <!-- <button class="card-btn">View More</button> -->
                </div>
            </div>

            </div>
        </section>
    </div>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 300,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
 



  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    


<!-- CHAMADA DA DIV FOOTER -->
@include('layout._footer')

</div> <!--FIM MAE-->
</body>
</html>