@extends('layout')

@section('content')
    <div class="container">
        <h1>Registro de projetos</h1>

        <form action="{{ route('atendimentos_busca') }}" method="POST" class="mb-3">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control" name="nome_projeto" placeholder="Buscar por nome do projeto">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>

        </form>
        @if ($projeto->isEmpty())
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
                        <th scope="col">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projeto as $p)
                        <tr>
                            <td>{{ $p->nome_projeto}}</td>
                            <td>{{ $p->descricao_projeto}}</td>
                            <td class="d-flex">
                                <button class="btn btn-success btn-sm m-"
                                        onclick="openEditModal('{{ $p->id }}', '{{ $p->nome_projeto}}', '{{ $p->descricao_projeto}}')">
                                    Editar
                                </button>
                                <form class="ml-2" id="deleteForm{{ $p->id }}" action="{{ route('excluir_projetos', $p->id) }}"
                                      method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Apagar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    <!-- Modal -->
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
                            <label for="nome_projeto" class="form-label">Nome do projeto</label>
                            <input type="text" class="form-control" id="nome_projeto" name="nome_projeto">
                        </div>
                        <div class="mb-3">
                            <label for="descricao_projeto" class="form-label">Descrição do projeto</label>
                            <textarea class="form-control" id="descricao_projeto" name="descricao_projeto"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        function openEditModal(id, nome_projeto, descricao_projeto) {
            $('#editModal').modal('show');
            $('#editForm').attr('action', '/projetos/' + id);
            $('#nome_projeto').val(nome_projeto);
            $('#descricao_projeto').val(descricao_projeto);
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
