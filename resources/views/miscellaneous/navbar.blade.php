<nav class="navbar navbar-expand-lg navbar-purple px-3 bg-primary">
    <a class="navbar-brand text-white" href="{{route('principal')}}">MUC</a>
    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Pessoas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('pessoas_index')}}">Registro de associados</a>
                    <a class="dropdown-item" href="{{route('pessoas_create')}}">Novo associado</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Projetos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('projetos_index')}}">Projetos cadastrados</a>
                    <a class="dropdown-item" href="{{route('projetos_create')}}">Novo projeto</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('projeto_pessoa_registro')}}">Incluir associado a um
                        projeto</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Atendimentos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('atendimentos_index')}}">Atendimentos realizados</a>
                    <a class="dropdown-item" href="{{route('atendimentos_create')}}">Novo atendimento</a>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Configurações
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('user_index')}}">Lista de usuários</a>
                    <a class="dropdown-item" href="{{route('user_create')}}">Novo usuário</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('sobre')}}">Sobre</a>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Sair
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>

</nav>
