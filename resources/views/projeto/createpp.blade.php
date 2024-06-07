@extends('layout')

@section('tile', 'Registro de associados')
@section('content')

    <!-- Conteúdo -->
    <div class="container">
        <h1>Registro de associados</h1>

        <form action="{{ route('projeto_pessoa_busca') }}" method="POST" class="mb-3">
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
                        <th scope="col">Telefone</th>
                        <th scope="col">Projeto</th>
                        <th scope="col">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pessoa as $p)
                        <tr>
                            <td>{{ $p->nome }}</td>
                            <td>{{ $p->endereco }}</td>
                            <td>{{ $p->telefone }}</td>
                            <td>
                                @foreach($p->projetos as $projeto)
                                    {{ $projeto->nome_projeto }}<br>
                                @endforeach
                            </td>
                            <td class="d-flex">
                                <button onclick="openEditModal('{{$p->id}}')" type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal">
                                    Incluir projeto
                                </button>

                                <form method="POST" action="{{route('projeto_pessoa_excluir', $p->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Tem certeza que deseja apagar?')" type="submit" class="btn btn-danger ml-3">
                                        Remover projeto
                                    </button>
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
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Aluno</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm" method="POST" action="{{ route('projeto_pessoa_update', $p->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="projeto" class="form-label">Projetos</label>
                            <input type="hidden" id="id" name="id" hidden>
                            <select class="form-control" id="projeto" name="projeto[]" multiple>
                                @foreach($projetos as $proj)
                                    <option value="{{ $proj->id }}" {{ $p->projetos->contains($proj) ? 'selected' : '' }}>
                                        {{ $proj->nome_projeto }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openEditModal(id) {
            $('#id').val(id);
        }
    </script>

@endsection

