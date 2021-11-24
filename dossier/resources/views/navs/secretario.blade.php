@section('nav-topo')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Dossier</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/secretario">Arquivos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Cadastros
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('cadastroAluno')}}">Aluno</a></li>
                        <li><a class="dropdown-item" href="{{route('cadastroSecretario')}}">Secretario</a></li>
                        <li><a class="dropdown-item" href="{{route('cadastroProfessor')}}">Professor</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('usuarioList')}}">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="localhost:8000">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endsection

@section('nav-esquerda')
esquerda
@endsection