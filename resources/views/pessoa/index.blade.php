@extends('layout')
@section('content')
    <div class="container">
        <h1>Registro de associados</h1>

        <form action="{{ route('pessoas_busca') }}" method="POST" class="mb-3">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control" name="nome" placeholder="Buscar por nome da pessoa">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>
        @if ($pessoa->isEmpty())
            <div class="alert alert-info" role="alert">
                Nenhum registro encontrado.
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Numero da Casa</th>
                        <th scope="col">Bairro</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pessoa as $p)
                        <tr>
                            <td>{{ $p->nome}}</td>
                            <td>{{ $p->endereco}}</td>
                            <td>{{ $p->numero_casa}}</td>
                            <td>{{ $p->bairro}}</td>
                            <td>{{ $p->telefone}}</td>
                            <td class="d-flex">
                                <button class="btn btn-success btn-sm mr-2"
                                        onclick="openEditModal('{{ $p->id }}', '{{ $p->nome}}', '{{ $p->endereco}}', '{{ $p->numero_casa }}', '{{ $p->bairro }}', '{{ $p->telefone }}')">
                                    Editar
                                </button>

                                <form id="deleteForm" action="{{ route('excluir_pessoas', $p->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Tem certeza que deseja excluir')" type="submit" class="btn btn-danger btn-sm">Apagar</button>
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
                    <h5 class="modal-title" id="editModalLabel">Editar Pessoas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm" method="POST" action="">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome">
                        </div>
                        <div class="mb-3">
                            <label for="endereco" class="form-label">Endereço da pessoa</label>
                            <textarea type="text" class="form-control" id="endereco" name="endereco"></textarea>
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
        function openEditModal(id, nome, endereco, numero_casa, bairro, telefone) {
            $('#editModal').modal('show');
            $('#editForm').attr('action', '/pessoas/' + id);
            $('#nome').val(nome);
            $('#endereco').val(endereco);
            $('#bairro').val(bairro);
            $('#telefone').val(telefone);
        }
    </script>
@endsection
