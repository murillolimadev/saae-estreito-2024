@extends('home.layout.app')
@section('title', 'Opereção e manutenção')

@section('content')
    @include('home.layout.manutencao')
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-4">
                <h2>Diego Fernandes da Silva</h2>
                <span>Rua João Castelo, 703</span>
                <span>Segunda - sexta - 07:30h às 17:30h</span>
                <span>(99)9 9194-0969 <img src="{{ asset('home/img/wt.png') }}" width="20" alt=""></span>
                <span>E-mail: saaeestreitomaranhao@gmail.com</span>
            </div>
        </div>
    </div>
@endsection