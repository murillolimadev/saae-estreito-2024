<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{ route('home.pages.index') }}" class="navbar-brand p-0">
            <h1 class="m-0" style="color: #036AA7;">
                {{-- <i class="fa fa-rss me-2"></i> --}}

                <img src="{{ asset('home/img/icon.png') }}" alt="">
                SAAE
                <span class="fs-5">Estreito-MA</span>
            </h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0" style="color: #036AA7 !important;">
                <a href="{{ route('home.pages.index') }}" class="nav-item nav-link">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">Institucional</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('home.pages.diretor.index') }}" class="dropdown-item">Diretor Geral</a>
                        <a href="{{ route('home.pages.estrutura') }}" class="dropdown-item"> Estrutura
                            organizacional</a>
                        <!-- <a href="testimonial.html" class="dropdown-item">Estrutura organizacional</a> -->
                        <!-- <a href="404.html" class="dropdown-item">404 Page</a> -->
                    </div>
                </div>
                <!-- <a href="{{ route('home.pages.sobre.index') }}" class="nav-item nav-link">Sobre</a> -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">Setores</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('home.pages.setores.administrativa') }}" class="dropdown-item">Assessoria
                            administrativa (Executiva pública)</a>
                        <!-- <a href="{{ route('home.pages.estrutura') }}" class="dropdown-item">Estrutura organizacional</a> -->
                        <a href="{{ route('home.pages.setores.contabil') }}" class="dropdown-item">Contábil</a>
                        <a href="{{ route('home.pages.setores.pessoal') }}" class="dropdown-item">Pessoal</a>
                        <a href="{{ route('home.pages.setores.financeiro') }}" class="dropdown-item">Financeiro</a>
                        <a href="{{ route('home.pages.setores.contas') }}" class="dropdown-item">Contas e Consumo</a>
                        <a href="{{ route('home.pages.setores.manutencao') }}" class="dropdown-item">Operação e
                            Manutenção</a>
                        <a href="{{ route('home.pages.setores.atendimento') }}" class="dropdown-item">Atendimento ao
                            público</a>
                        <a href="{{ route('home.pages.setores.procuradoria') }}" class="dropdown-item">Procuradoria</a>
                    </div>
                </div>
                <a href="{{ route('home.pages.legislacao') }}" class="nav-item nav-link">Legislação</a>
                <a href="{{ route('home.pages.noticias.index') }}" class="nav-item nav-link">Notícias</a>
                <a href="{{ route('home.pages.portarias.index') }}" class="nav-item nav-link">Portaria</a>
                <a href="{{ route('home.pages.licitacao.index') }}" class="nav-item nav-link">Licitações
                </a>
                <a href="{{ route('home.pages.contatos.index') }}" class="nav-item nav-link">Contatos</a>
            </div>
            <!-- <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal">
                <i class="fa fa-search"></i></butaton> -->
            <a href="http://177.53.118.12:5661/servicosweb/home.jsf" target="_blank"
                class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">2° via conta</a>
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->
