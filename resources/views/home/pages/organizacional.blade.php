@extends('home.layout.app')
@section('title', 'Estrutura organizacional')
@section('content')
    @include('home.layout.organizacional')

    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="section-title position-relative mb-4 pb-2">
                        <!-- <h6 class="position-relative text-primary ps-4">About Us</h6> -->
                        <h5 class="mt-2">
                            I - GABINETE DO DIRETOR GERAL
                        </h5>
                        <h5>
                            II - ASSESSORIA ADMINISTRATIVA
                        </h5>
                        <h5>III - SETOR CONTÁBIL</h5>
                        <h5>IV - SETOR PESSOAL</h5>
                        <h5>V - SETOR DE CONTAS E CONSUMO</h5>
                        <h5>VI - SETOR FINANCEIRO</h5>
                        <h5>VII - SETOR DE ATENDIMENTO AO PÚBLICO</h5>
                        <h5>VIII - SETOR DE OPERAÇÃO E MANUTENÇÃO</h5>
                        <h5>IX - PROCURADORIA</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection