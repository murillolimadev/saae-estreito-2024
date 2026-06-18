@extends('home.layout.app')
@section('title', 'Diretor Geral')
@section('content')
    @include('home.layout.diretor')

    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-5">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="section-title position-relative mb-4 pb-2">
                        <!-- <h6 class="position-relative text-primary ps-4">About Us</h6> -->
                        <h2 class="mt-2">Claudiney Caetano das Chagas</h2>
                    </div>
                    <p class="mb-4">
                        O Diretor-Geral do Serviço Autônomo de Água e Esgoto (SAAE) possui experiência na área empresarial,
                        a qual contribui para uma gestão pautada na eficiência administrativa, responsabilidade na aplicação
                        dos recursos públicos e compromisso com a qualidade dos serviços prestados à população.
                    </p>
                    <p class="mb-4">
                        À frente da Autarquia, conduz ações voltadas à melhoria contínua do abastecimento de água e do
                        esgotamento sanitário, priorizando a modernização, a organização administrativa e a excelência no
                        atendimento aos usuários.
                    </p>

                    <!-- <div class="d-flex align-items-center mt-4">
                                                    <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                                                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                                                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                                                    <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                                                </div> -->
                </div>
                <div class="col-lg-5">
                    <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{ asset('home/img/claudiney.png') }}"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
                </div>
            </div>
        </div>
    </div>
@endsection