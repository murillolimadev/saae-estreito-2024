<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SetoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function administrativa()
    {
        return view('home.pages.setores.administrativa');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function contabil()
    {
        return view('home.pages.setores.contabil');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function pessoal()
    {
        return view('home.pages.setores.pessoal');
    }

    /**
     * Display the specified resource.
     */
    public function manutencao()
    {
        return view('home.pages.setores.manutencao');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function contas()
    {
        return view('home.pages.setores.contas');

    }

    /**
     * Update the specified resource in storage.
     */
    public function atendimento()
    {
        return view('home.pages.setores.atendimento');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function procuradoria()
    {
        return view('home.pages.setores.procuradoria');

    }

    public function financeiro()
    {
        return view('home.pages.setores.financeiro');

    }

}
