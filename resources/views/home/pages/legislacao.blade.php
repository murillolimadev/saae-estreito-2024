@extends('home.layout.app')
@section('title', 'Legislação')

@section('content')
    @include('home.layout.legislacao')
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="position-relative d-inline text-primary ps-4">SAAE Estreito-MA</h6>
                <h2 class="mt-2">Legislação</h2>
            </div>
            <div class="row g-4" style="text-align: center">
                <img src="{{ asset('home/02.png') }}" alt="">
                
                <img src="{{ asset('home/01.png') }}" alt="">
                <a href="{{ url('Lei.pdf') }}" target="_blank">Salvar PDF</a>
            </div>
        </div>
    </div>
@endsection
