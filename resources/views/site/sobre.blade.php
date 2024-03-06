@extends('layout.layout')

@section('conteudo')
    {{-- TESTE PARA OS ICONES --}}

    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('assets/logo/favicon.png') }}">

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="{{ asset('icon/css/font-awesome.min.css') }}">

    <!--flat icon css-->
    <link rel="stylesheet" href="{{ asset('icon/css/flaticon.css') }}">

    <!--animate.css-->
    <link rel="stylesheet" href="{{ asset('icon/css/animate.css') }}">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="{{ asset('icon/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/css/owl.theme.default.min.css') }}">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{ asset('icon/css/bootstrap.min.css') }}">

    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ asset('icon/css/bootsnav.css') }}">

    <!--style.css-->
    <link rel="stylesheet" href="{{ asset('icon/css/style.css') }}">

    <!--responsive.css-->
    <link rel="stylesheet" href="{{ asset('icon/css/responsive.css') }}">

    {{-- CSS do titulo da sessão de perguntas --}}
    <link rel="stylesheet" href="{{ asset('icon/css/quest.css') }}">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />


    <style>
        .h3-gaby {
            /* font-family: var(--minha-font2); */
            font-weight: bold;
            font-size: 30px;
            letter-spacing: 1px;
        }

        .p-gaby {
            font-size: 20px;
            font-family: var(--minha-font2);
            text-align: justify
        }
    </style>

    <style>
        /* FLOR PULSAR */
        .pulse {
            margin: 10px;
            width: 60px;
            height: 22px;
            border-radius: 50%;
            box-shadow: 0 0 0 rgba(204, 169, 44, 0.4);
            animation: pulse 2s infinite;
        }

        .pulse:hover {
            animation: none;
        }

        @-webkit-keyframes pulse {
            0% {
                -webkit-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0.4);
            }

            70% {
                -webkit-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
            }

            100% {
                -webkit-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
            }
        }

        @keyframes pulse {
            0% {
                -moz-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0.4);
                box-shadow: 0 0 0 0 rgba(204, 169, 44, 0.4);
            }

            70% {
                -moz-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
                box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
            }

            100% {
                -moz-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
                box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
            }
        }
    </style>

    {{-- Back --}}
    <div class="fables-testimonial fables-after-overlay fables-about-caption py-5 bg-rules"
        style="background-image: url({{ asset('assets/img-gaby/backgroud-about.svg') }})">
        <div class="container">
            <div class="row">
                <div class="position-relative z-index col-12 col-md-8 offset-md-2 text-center wow zoomIn"
                    data-wow-duration="2s">
                    <h3 class="white-color mb-3 font-25 font-weight-bold h3-gaby">
                        Conheça nossa história!
                    </h3>
                    <p class="font-weight-light fables-third-text-color p-gaby">
                        Convidamos você a se juntar nesse jardim de lembranças. Deixe-nos cuidar para que você saiba mais
                        como foi essa jornada para chegarmos até aqui, enquanto você permite florescer em toda a sua beleza
                        única.
                    </p>

                    <div>
                        <img class="pulse" src="{{ asset('assets/img-gaby/flor3.svg') }}" alt="">
                    </div>



                </div>
            </div>
        </div>
    </div>


    <!--education start -->
    <section id="education" class="education">
        <div class="section-heading text-center" style="background: #f9fbfd">
            <h2>Jornada</h2>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="education-horizontal-timeline">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single-horizontal-timeline">
                            <div class="experience-time">
                                <h2>2015 - 2017</h2>
                                <h3><span class="cor-unica">Criação:</span> As Primeiras Raízes</h3>
                            </div><!--/.experience-time-->
                            <div class="timeline-horizontal-border">
                                {{-- <i class="fa fa-circle" aria-hidden="true"></i> --}}
                                {{-- <ion-icon width="20" height="20" name="flower-outline"></ion-icon> --}}
                                <ion-icon class="ion-icon" name="flower-outline" style="font-size: ;"></ion-icon>
                                <span class="single-timeline-horizontal"></span>
                            </div>
                            <div class="timeline">
                                <div class="timeline-content">
                                    <h4 class="titlee">
                                        Primeira unidade
                                    </h4>
                                    <h5> São Paulo, SP</h5>
                                    <p class="description">
                                        Há alguns anos atrás, em um pequeno espaço impregnado de sonhos e fragrâncias de
                                        flores, Helena Flores plantou a semente de uma ideia. Com o apoio de uma equipe
                                        dedicada, o Leflower começou a enraizar suas primeiras raízes na comunidade. A visão
                                        de Helena atraiu clientes em busca de algo mais do que um corte de cabelo ou uma
                                        manicure; eles buscavam uma experiência onde pudessem se sentir especiais e celebrar
                                        sua própria singularidade.
                                    </p>
                                </div><!--/.timeline-content-->
                            </div><!--/.timeline-->
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-horizontal-timeline">
                            <div class="experience-time">
                                <h2>2018 - 2021</h2>
                                <h3><span class="cor-unica">Vivencia: </span> Florescendo em Experiência</h3>
                            </div><!--/.experience-time-->
                            <div class="timeline-horizontal-border">
                                {{-- <i class="fa fa-circle" aria-hidden="true"></i> --}}
                                <ion-icon class="ion-icon" name="flower-outline" style="font-size: ;"></ion-icon>
                                <span class="single-timeline-horizontal"></span>
                            </div>
                            <div class="timeline">
                                <div class="timeline-content">
                                    <h4 class="title" data-count="3">+0 unidades</h4>

                                    <h5> São Paulo, SP</h5>
                                    <p class="description">
                                        Ao longo dos anos, o Leflower expandiu sua gama de serviços e aprimorou suas
                                        técnicas. A equipe, liderada pela paixão e visão de Helena, tornou-se especialista
                                        não apenas em beleza, mas em criar um ambiente acolhedor e acolhedor. O Leflower não
                                        era mais apenas um salão; era um espaço onde as pessoas vinham não apenas para ficar
                                        bonitas, mas para se sentirem bonitas.
                                    </p>
                                </div><!--/.timeline-content-->
                            </div><!--/.timeline-->
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-horizontal-timeline">
                            <div class="experience-time">
                                <h2>2022 - 2024</h2>
                                <h3><span class="cor-unica">Atual:</span> Florescendo Hoje </h3>
                            </div><!--/.experience-time-->
                            <div class="timeline-horizontal-border">
                                {{-- <i class="fa fa-circle" aria-hidden="true"></i> --}}
                                <ion-icon class="ion-icon" name="flower-outline" style="font-size: ;"></ion-icon>
                                <span
                                    class="single-timeline-horizontal spacial-horizontal-line
                                "></span>
                            </div>
                            <div class="timeline">
                                <div class="timeline-content">
                                    <h4 class="title" data-count="10">+0 unidades</h4>

                                    <h5>São Paulo, SP</h5>
                                    <p class="description">
                                        Hoje, o Leflower é mais do que um salão de beleza; é um ícone de beleza,
                                        autenticidade e cuidado. A visão de Helena tornou-se um legado, e cada cliente que
                                        entra no Leflower é parte dessa jornada floral. Estamos comprometidos em continuar a
                                        cultivar beleza, individualidade e sustentabilidade enquanto embarcamos no próximo
                                        capítulo desta emocionante jornada. Obrigado por fazer parte desta história floral
                                        conosco!
                                    </p>
                                </div><!--/.timeline-content-->
                            </div><!--/.timeline-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Perguntas frequentes --}}
    <section class="margin" data-aos="fade-up">
        <div class="separadora">

            <div class='masthead-image' id='master-container' style="border-radius: 2px">
                <div class='content center'>
                    <h1 id='master'>
                        <div>Respondendo</div>
                        <div id='master-container-scroller'>
                            <div class='master-container-scroller_item'>
                                <a class='cta-link' href='#'>Perguntas</a>.
                            </div>
                            <div class='master-container-scroller_item'>
                                <a class='cta-link' href='#'>Curiosidades</a>.
                            </div>
                            <div class='master-container-scroller_item'>
                                <a class='cta-link' href='#'>Segredos</a>.
                            </div>
                        </div>
                        <div>Sobre o nosso salão.</div>
                    </h1>
                </div>
            </div>

            <style>
                @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');

                * {
                    margin: 0;
                    padding: 0;
                }

                body {
                    font-family: 'Lato', sans-serif;
                }

                .containerr {
                    width: 50%;
                    margin: 0 auto;
                    padding: 0 0 50px 10px
                }



                .containerr h1 {
                    font-size: 25px;
                    color: var(--salmao-salao);
                    text-align: center;
                    margin-bottom: 40px;
                    margin-top: 10px
                }

                /* Estilos para dispositivos não responsivos */


                .accordion {
                    width: 100%;
                    padding: 0 5px;
                    border: 2px solid #59848e;
                    cursor: pointer;
                    display: flex;
                    margin: 10px 0;
                    justify-content: space-between;
                    align-items: center;
                    padding: 10px;
                    border-radius: 30px;

                }

                .accordion i {
                    color: #59848e;
                    transition: all .5s ease-in;
                }

                .accordion .fa-minus {
                    display: none;
                }

                .active,
                .accordion:hover {
                    background-color: #59848e;
                    color: white;
                    transition: all .5s ease-in;
                    border: 2px solid #dddddd;
                }

                .active .fa-minus {
                    display: block;
                }

                .active .fa-plus {
                    display: none;
                }

                .accordion h5 {
                    font-size: 20px;
                    margin: 0;
                    color: #001733;
                    padding-left: 5px;
                }

                .active i,
                .active h5,
                .accordion:hover i,
                .accordion:hover h5 {
                    color: white;
                }

                .panal p {
                    color: #000;
                    font-size: 15px
                }

                .panal {
                    padding: 0 15px;
                    border-left: 1px solid #59848e;
                    margin-left: 25px;
                    font-size: 14px;
                    text-align: justify;
                    overflow: hidden;
                    transition: all .5s ease-in;
                    max-height: 0;
                }

                @media (max-width: 570px) {
                    .containerr {
                        width: 100%;
                        margin: 0 auto;
                        padding: 5px 20px
                    }
                }
            </style>
            <div class="containerr">
                <h1>Perguntas Frequentes</h1>
                <div class="accordion" data-aos="fade-left">
                    <h5> Qual é o segredo para alcançar um cabelo saudável e vibrante?</h5>
                    <i class="fas fa-minus"></i>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="panal">
                    <p>Além dos tratamentos de alta qualidade, incentivamos nossos clientes a manterem uma rotina de
                        cuidados em casa. A hidratação regular e o uso de produtos recomendados pelos nossos especialistas
                        contribuem para um cabelo deslumbrante.</p>
                </div>

                <div class="accordion" data-aos="fade-left">
                    <h5>O que inspira as últimas tendências de cortes e cores no LeFlower?</h5>
                    <i class="fas fa-minus"></i>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="panal">
                    <p>A inspiração para nossas tendências provém de uma combinação de influências globais, moda
                        contemporânea e, mais importante, da individualidade de cada cliente. Estamos sempre atualizados
                        para oferecer o que há de mais moderno e personalizado.</p>
                </div>

                <div class="accordion" data-aos="fade-left">
                    <h5>Quais serviços exclusivos o LeFlower oferece para seus clientes?</h5>
                    <i class="fas fa-minus"></i>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="panal">
                    <p>Além LeFlower, oferecemos uma variedade de serviços para atender às suas necessidades de beleza,
                        incluindo cortes e colorações excepcionais, tratamentos de spa capilar exclusivos, além de serviços
                        especializados em unhas, barba masculina e design de sobrancelhas. Estamos comprometidos em
                        proporcionar uma experiência completa de cuidados pessoais.</p>
                </div>

                <div class="accordion" data-aos="fade-left">
                    <h5>Existe algum segredo para manter a durabilidade e o brilho das colorações?</h5>
                    <i class="fas fa-minus"></i>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="panal">
                    <p>Sim, um dos nossos segredos é a utilização de produtos de coloração de alta qualidade e técnicas
                        especializadas. Além disso, oferecemos dicas personalizadas aos nossos clientes para a manutenção em
                        casa, garantindo que a cor permaneça vibrante por mais tempo. </p>
                </div>

                <div class="accordion" data-aos="fade-left">
                    <h5>Qual é a história por trás do nome "LeFlower"?</h5>
                    <i class="fas fa-minus"></i>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="panal">
                    <p>O nome "LeFlower" foi escolhido para refletir nossa abordagem única para a beleza, combinando a
                        elegância de "Le" com a beleza e delicadeza simbolizada pelas flores. Queríamos criar um espaço que
                        não apenas transformasse a aparência, mas também celebrasse a singularidade e a feminilidade,
                        inspirando-se na beleza efêmera das flores.</p>
                </div>
            </div>
            <script>
                var acordion = document.getElementsByClassName('accordion');

                var i;
                var len = acordion.length;
                for (i = 0; i < len; i++) {
                    acordion[i].addEventListener('click', function() {
                        this.classList.toggle('active');
                        var panal = this.nextElementSibling;
                        if (panal.style.maxHeight) {
                            panal.style.maxHeight = null;
                        } else {
                            panal.style.maxHeight = panal.scrollHeight + 'px';
                        }
                    })
                }
            </script>

    </section>










    <!--profiles start -->
    <section id="profiles" class="profiles" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        <div class="profiles-details">
            <div class="section-heading text-center">
                <h2>PARCEIROS</h2>
            </div>
            <div class="container">
                <div class="profiles-content" style="width: 100%">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="single-profile">
                                <div class="profile-txt">
                                    <img src="../assets/img-gaby/loreal.svg" alt="">

                                    <div class="profile-icon-name">Paris</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <img src="../assets/img-gaby/loreal.svg" alt="">
                                        <div class="profile-icon-name">Paris</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-sm-3">
                            <div class="single-profile">
                                <div class="profile-txt">
                                    <img src="../assets/img-gaby/layer1.svg" alt="">
                                    {{-- <a href=""><i class="flaticon-dribbble"></i></a> --}}
                                    <div class="profile-icon-name">Creme</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <img src="../assets/img-gaby/layer1.svg" alt="">
                                        {{-- <a href=""><i class="flaticon-dribbble"></i></a> --}}
                                        <div class="profile-icon-name">Creme</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-profile">
                                <div class="profile-txt">
                                    <img src="../assets/img-gaby/sep.svg" alt="">
                                    {{-- <a href=""><i class="flaticon-behance-logo"></i></a> --}}
                                    <div class="profile-icon-name">Beauty</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <img src="../assets/img-gaby/sep.svg" alt="">
                                        {{-- <a href=""><i class="flaticon-behance-logo"></i></a> --}}
                                        <div class="profile-icon-name">Beauty</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-profile profile-no-border">
                                <div class="profile-txt">
                                    <img src="../assets/img-gaby/labriza.svg" alt="">
                                    {{-- <a href=""><i class="flaticon-github-logo"></i></a> --}}
                                    <div class="profile-icon-name">Comestics</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <img src="../assets/img-gaby/labriza.svg" alt="">
                                        {{-- <a href=""><i class="flaticon-github-logo"></i></a> --}}
                                        <div class="profile-icon-name">Comestics</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-border"></div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="single-profile">
                                <div class="profile-txt">
                                    <img src="../assets/img-gaby/group.svg" alt="">
                                    {{-- <a href=""><i class="flaticon-flickr-website-logo-silhouette"></i></a> --}}
                                    <div class="profile-icon-name">Group</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <img src="../assets/img-gaby/group.svg" alt="">
                                        {{-- <a href=""><i class="flaticon-flickr-website-logo-silhouette"></i></a> --}}
                                        <div class="profile-icon-name">Group</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-profile">
                                <div class="profile-txt">
                                    <img src="../assets/img-gaby/risque.svg" alt="">
                                    {{-- <a href=""><i class="flaticon-smug"></i></a> --}}
                                    <div class="profile-icon-name">Tá nas suas mãos</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <img src="../assets/img-gaby/risque.svg" alt="">
                                        {{-- <a href=""><i class="flaticon-smug"></i></a> --}}
                                        <div class="profile-icon-name">Tá nas suas mãos</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-profile">
                                <div class="profile-txt">
                                    <img src="../assets/img-gaby/barba.svg" alt="">
                                    {{-- <a href=""><i class="flaticon-squarespace-logo"></i></a> --}}
                                    <div class="profile-icon-name">Men's beard care products</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <img src="../assets/img-gaby/barba.svg" alt="">
                                        {{-- <a href=""><i class="flaticon-squarespace-logo"></i></a> --}}
                                        <div class="profile-icon-name">Men's beard care products</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-profile profile-no-border">
                                <div class="profile-txt">
                                    <img src="../assets/img-gaby/tangle.svg" alt="">

                                    {{-- <a href=""><i class="flaticon-bitbucket-logotype-camera-lens-in-perspective"></i></a> --}}
                                    <div class="profile-icon-name">Você só precisa da escova certa</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <img src="../assets/img-gaby/tangle.svg" alt="">
                                        {{-- <a href=""><i class="flaticon-bitbucket-logotype-camera-lens-in-perspective"></i></a> --}}
                                        <div class="profile-icon-name">Você só precisa da escova certa…</div>
                                    </div>
                                    </>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Teste fonts --}}
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

        <!--bootstrap.min.js-->
        <script src="{{ asset('icon/js/bootstrap.min.js') }}"></script>

        <!-- bootsnav js -->
        <script src="{{ asset('icon/js/bootsnav.js') }}"></script>

        <!-- jquery.sticky.js -->
        <script src="{{ asset('icon/js/jquery.sticky.js') }}"></script>

        <!-- for progress bar start-->

        <!-- progressbar js -->
        <script src="{{ asset('icon/js/progressbar.js') }}"></script>
        <!-- appear js -->


        {{-- Começo scripts gaby --}}
        <!-- DEPENDENCIA jQuery 3.6.0 COontador JORNADA -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            // Verifica se o dispositivo é responsivo (por exemplo, largura da tela menor que 768 pixels)
            if (window.innerWidth <= 768) {
                // Remove a classe "aos-animate" que é usada pelo AOS para animações
                document.querySelectorAll('.accordion').forEach(function(element) {
                    element.classList.remove('aos-animate');
                });
            }
        </script>

        <script>
            $(function() {
                $('.title').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');

                    $({
                        countNum: $this.text()
                    }).animate({
                        countNum: countTo
                    }, {
                        duration: 8000,
                        easing: 'linear',
                        step: function() {
                            $this.text('+' + Math.floor(this.countNum) + ' unidades');
                        },
                        complete: function() {
                            $this.text('+' + this.countNum + ' unidades');
                            //alert('finished');
                        }
                    });
                });
            });
        </script>
    @endsection
