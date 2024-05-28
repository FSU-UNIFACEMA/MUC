@extends('layout')
@section('title', 'Registros de atendimentos')
@section('content')
    <div class="container">
        <h1>Registro de atendimentos</h1>

        <form action="{{ route('atendimentos_busca') }}" method="POST" class="mb-3">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control" name="nome_atendido" placeholder="Buscar por nome do atendido">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>
        @if ($atendimentos->isEmpty())
            <div class="alert alert-info" role="alert">
                Nenhum registro encontrado.
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">CNS</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Data Nascimento</th>
                        <th scope="col">RG</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Data agendamento</th>
                        <th scope="col">Data atendimento</th>
                        <th scope="col">Hora atendimento</th>
                        <th scope="col">Profissional</th>
                        <th scope="col">Assunto</th>
                        <th scope="col">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($atendimentos as $p)
                        <tr>
                            <td>{{ $p->nome}}</td>
                            <td>{{ $p->cns}}</td>
                            <td>{{ $p->endereco}}</td>
                            <td>{{ $p->data_nascimento}}</td>
                            <td>{{ $p->rg}}</td>
                            <td>{{ $p->cpf}}</td>
                            <td>{{ $p->telefone}}</td>
                            <td>{{ $p->data_agendamento}}</td>
                            <td>{{ $p->data_atendimento}}</td>
                            <td>{{ $p->hora_atendimento}}</td>
                            <td>{{ $p->profissional}}</td>
                            <td>{{ $p->assunto}}</td>
                            <td>
                                <form id="deleteForm{{ $p->id }}" action="{{ route('atendimentos_excluir', $p->id) }}"
                                      method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-dark btn-sm">Apagar</button>
                                </form>
                                <button class="btn btn-secondary btn-sm"
                                        onclick="openEditModal('{{ $p->id }}', '{{ $p->nome }}', '{{ $p->cns }}', '{{ $p->endereco }}', '{{ $p->data_nascimento }}', '{{ $p->rg }}', '{{ $p->cpf }}', '{{ $p->telefone }}', '{{ $p->data_agendamento }}', '{{ $p->data_atendimento }}', '{{ $p->hora_atendimento }}', '{{ $p->profissional }}', '{{ $p->assunto }}')">
                                    Editar
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
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Atendimento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm" method="POST" action="">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome do atendido</label>
                            <input type="text" class="form-control" id="nome" name="nome">
                        </div>
                        <div class="mb-3">
                            <label for="cns" class="form-label">Número do CNS</label>
                            <textarea class="form-control" id="cns" name="cns"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="endereco" name="endereco">
                        </div>
                        <div class="mb-3">
                            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                            <input type="text" class="form-control" id="data_nascimento" name="data_nascimento">
                        </div>
                        <div class="mb-3">
                            <label for="rg" class="form-label">RG</label>
                            <input type="text" class="form-control" id="rg" name="rg">
                        </div>
                        <div class="mb-3">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf">
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone">
                        </div>
                        <div class="mb-3">
                            <label for="data_agendamento" class="form-label">Data de Agendamento</label>
                            <input type="text" class="form-control" id="data_agendamento" name="data_agendamento">
                        </div>
                        <div class="mb-3">
                            <label for="data_atendimento" class="form-label">Data do Atendimento</label>
                            <input type="text" class="form-control" id="data_atendimento" name="data_atendimento">
                        </div>
                        <div class="mb-3">
                            <label for="hora_atendimento" class="form-label">Hora do Atendimento</label>
                            <input type="text" class="form-control" id="hora_atendimento" name="hora_atendimento">
                        </div>
                        <div class="mb-3">
                            <label for="profissional" class="form-label">Profissional</label>
                            <input type="text" class="form-control" id="profissional" name="profissional">
                        </div>
                        <div class="mb-3">
                            <label for="assunto" class="form-label">Assunto</label>
                            <input type="text" class="form-control" id="assunto" name="assunto">
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openEditModal(id, nome, cns, endereco, data_nascimento, rg, cpf, telefone, data_agendamento, data_atendimento, hora_atendimento, profissional, assunto) {
            $('#editModal').modal('show');
            $('#editForm').attr('action', '/atendimentos/' + id);
            $('#nome').val(nome);
            $('#cns').val(cns);
            $('#endereco').val(endereco);
            $('#data_nascimento').val(data_nascimento);
            $('#rg').val(rg);
            $('#cpf').val(cpf);
            $('#telefone').val(telefone);
            $('#data_agendamento').val(data_agendamento);
            $('#data_atendimento').val(data_atendimento);
            $('#hora_atendimento').val(hora_atendimento);
            $('#profissional').val(profissional);
            $('#assunto').val(assunto);
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@endsection
