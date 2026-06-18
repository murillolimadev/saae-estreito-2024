@extends('home.layout.app')
@section('title', 'Estrutura organizacional')
@section('content')
    @include('home.layout.estrutura')

    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="section-title position-relative mb-4 pb-2">
                        <!-- <h6 class="position-relative text-primary ps-4">About Us</h6> -->
                        <!-- <h2 class="mt-2">Estrutura organizacional</h2> -->
                    </div>
                    <!-- <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet
                        diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita
                        duo justo et tempor eirmod magna dolore erat amet</p> -->
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>I Gabinete do Diretor Geral</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>II Assessoria Administrativa
                            </h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>III - Setor Contábil</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>IV - Setor Pessoal</h6>

                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>V Setor Contas e Consumo</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>VI Setor Financeiro</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>VII Setor Atendimento ao Público
                            </h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>VIII Setor Operação e
                                Manuntenção</h6>
                        </div>
                    </div>
                    <!-- <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div> -->
                </div>
               
            </div>
        </div>
    </div>
@endsection