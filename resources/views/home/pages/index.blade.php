@extends('home.layout.app')
@section('title', 'Home')
@section('content')
    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated zoomIn">Prefeitura e SAAE</h1>
                    <p class="text-white pb-3 animated zoomIn">Levando qualidade de vida à população de
                        Estreito-MA
                    </p>
                    <a href="{{ route('home.pages.licitacao.index') }}"
                        class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">
                        Licitações e contratos
                    </a>
                    <a href="{{ route('home.pages.contatos.index') }}"
                        class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contatos</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid" src="{{ asset('home/img/hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <!-- <h6 class="position-relative d-inline text-primary ps-4">Atendimento</h6> -->
                <h2 class="mt-2">Atendimentos e Serviços</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-shower fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Interrupção no Abastecimento de Água</h5>
                        <p>Comunique ocorrência de interrupção no fornecimento de água em sua unidade consumidora.</p>
                        <a class="btn px-3 mt-auto mx-auto"
                            href="https://api.whatsapp.com/send?phone=5599991940969&text=Oi!" target="_blank">Registrar
                            ocorrência</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            {{-- <i class="fa fa-home fa-2x"></i> --}}
                            <i class="fa fa-align-justify fa-2x" aria-hidden="true"></i>
                        </div>
                        <h5 class="mb-3">Emissão de 2° via de Fatura</h5>
                        <p>Consulte débito e emita a segunda via da fatura mediante informação da unidade consumidora.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="http://177.53.118.12:5661/servicosweb/home.jsf"
                            target="_blank">Acessar serviço</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s"
                    style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-edit fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Licitações e Contratos</h5>
                        <p>Utilize o filtro de pesquisa para localizar a licitação</p>
                        <a class="btn px-3 mt-auto mx-auto" href="{{ route('home.pages.licitacao.index') }}">Acessar
                            serviço</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-file fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Declaração Anual de Quitação de Débito</h5>
                        <p>Emita e consulte a declaração anual de quitação de débito da unidade consumidora.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">Emitir Declaração</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            {{-- <i class="fa fa-text fa-2x"></i> --}}
                            {{-- <i class="fa fa-check-square-o" aria-hidden="true"></i> --}}
                            <i class="fa fa-building fa-2x" aria-hidden="true"></i>
                        </div>
                        <h5 class="mb-3">Transparência</h5>
                        <p>Portal da Transparência e Acesso à Informação.</p>
                        <a class="btn px-3 mt-auto mx-auto"
                            href="http://barrosoptr.dcfiorilli.com.br:5656/SCPIWEB_SAAEESTREITO/" target="_blank">Acessar
                            portal</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s"
                    style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            {{-- <i class="fa fa-home fa-2x"></i> --}}
                            <i class="fa fa-ship fa-2x" aria-hidden="true"></i>
                        </div>
                        <h5 class="mb-3">Comunicação de vazamento</h5>
                        <p>Registre ocorrência de vazamento de água para providências técnicas.</p>
                        <a class="btn px-3 mt-auto mx-auto"
                            href="https://api.whatsapp.com/send?phone=5599991940969&text=Oi!" target="_blank">Registrar
                            ocorrência</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="position-relative d-inline text-primary ps-4">Notícias</h6>
                <h2 class="mt-2">Mantenha-se atualizado</h2>
            </div>
            <div class="row g-4">
                @foreach ($noticias as $item)
                    <div class="col-lg-4 col-md-6"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="image-noticia">
                                <a href="{{ route('home.pages.noticias.view', $item->slug) }}">
                                    <img src="{{ asset('upload/noticias/' . $item->image) }}"
                                        style="width: 200px; height: 180px;" alt="">
                                </a>
                            </div>
                            <a href="{{ route('home.pages.noticias.view', $item->slug) }}">
                                <h5 style="margin-top: 15px;">{{ $item->title }}</h5>
                            </a>
                            <a href="{{ route('home.pages.noticias.view', $item->slug) }}">
                                <p>{{ $item->desc }}</p>
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
