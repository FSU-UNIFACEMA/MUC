@extends('layout')

@section('title', 'Registro de usuários')

@section('content')

    <!-- Conteúdo -->
    <div class="container">
        <h1>Registro de usuários</h1>

        <form action="{{ route('user_busca') }}" method="POST" class="mb-3">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control" name="nome_projeto" placeholder="Buscar por nome do projeto">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>
        @if ($user->isEmpty())
            <div class="alert alert-info" role="alert">
                Nenhum registro encontrado.
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Senha</th>
                        <th scope="col">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $u)
                        <tr>
                            <td>{{ $u->name}}</td>
                            <td>{{ $u->email}}</td>
                            <td type="password">***********</td>
                            <td>
                                <form id="deleteForm" action="{{ route('user_excluir', $u->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-dark btn-sm">Apagar</button>
                                </form>
                                <button class="btn btn-secondary btn-sm"
                                        onclick="openEditModal('{{ $u->id }}', '{{ $u->name}}', '{{ $u->email}}')">Editar
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    <!-- Modal -->
    <
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Projeto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm" method="POST" action="">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome do projeto</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Descrição do projeto</label>
                            <textarea type="text" class="form-control" id="email" name="email"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function openEditModal(id, name, email) {
            $('#editModal').modal('show');
            $('#editForm').attr('action', '/user/' + id);
            $('#name').val(name);
            $('#email').val(email);
        }
    </script>

    <!-- Footer -->
    @include('miscellaneous.footer')

    <!-- Adicione o Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
