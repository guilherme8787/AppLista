@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#novoConvidado">
                        Novo convidado
                    </button>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Convidados</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#<th>
                                <th scope="col">Nome<th>
                                <th scope="col">Empresa<th>
                                <th scope="col">E-mail<th>
                                <th scope="col">Telefone<th>
                                <th scope="col">Linkedin<th>
                                <th scope="col">Status<th>
                                <th scope="col">Atualizado em<th>
                                <th scope="col">Ações<th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($itens as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->name }}<td>
                                        <td>{{ $item->company }}<td>
                                        <td>{{ $item->email }}<td>
                                        <td>{{ $item->telefone }}<td>
                                        <td>{{ $item->linkedin }}<td>
                                        <td>{{ $item->status }}<td>
                                        <td>{{ $item->updated_at }}<td>
                                        <td><a href="{{ route('ver-convidado', $item->id) }}" class="btn btn-primary btn-sm">Ver</a><td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<!-- Modal novo convidado -->
<div class="modal fade" id="novoConvidado" tabindex="-1" aria-labelledby="novoConvidadoLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="novoConvidadoLabel">Novo convidado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ route('novo-convidado') }}">
                @csrf

                <span>(*) - itens obrigatórios.</span>
                <div class="mb-3">
                    <label for="nameInput" class="form-label">Nome completo*</label>
                    <input class="form-control" type="text" name="name" id="nameInput" required>
                </div>
                <div class="mb-3">
                    <label for="companyInput" class="form-label">Empresa*</label>
                    <input class="form-control" type="text" name="company" id="companyInput">
                </div>
                <div class="mb-3">
                    <label for="titleInput" class="form-label">Cargo</label>
                    <input class="form-control" type="text" name="title" id="titleInput">
                </div>
                <div class="mb-3">
                    <label for="emailInput" class="form-label">E-mail*</label>
                    <input class="form-control" type="text" name="email" id="emailInput">
                </div>
                <div class="mb-3">
                    <label for="telefoneInput" class="form-label">Telefone</label>
                    <input class="form-control" type="text" name="telefone" id="telefoneInput">
                </div>
                <div class="mb-3">
                    <label for="linkedinInput" class="form-label">Linkedin</label>
                    <input class="form-control" type="text" name="linkedin" id="linkedinInput">
                </div>
                <div class="mb-3">
                    <label for="data_palestraInput" class="form-label">Data da palestra*</label>
                    <input class="form-control" type="date" name="data_palestra" id="data_palestraInput">
                </div>
                <div class="mb-3">
                    <label for="hora_palestraInput" class="form-label">Hora da palestra*</label>
                    <input class="form-control" type="time" name="hora_palestra" id="hora_palestraInput">
                </div>
                <div class="mb-3">
                    <label for="plenario_ou_moduloInput" class="form-label">Plenário ou módulo*</label>
                    <select class="form-select" aria-label="Selecione" id="plenario_ou_moduloInput" name="plenario_ou_modulo">
                        <option selected>Selecione</option>
                        <option value="Plenário">Plenário</option>
                        <option value="Módulo">Módulo</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="qual_o_painelInput" class="form-label">Qual o painel*</label>
                    <input class="form-control" type="text" id="qual_o_painelInput" name="qual_o_painel">
                </div>
                <div class="mb-3">
                    <label for="categoriaInput" class="form-label">Categoria</label>
                    <select class="form-select" aria-label="Selecione" id="categoriaInput" name="categoria">
                        <option selected>Selecione</option>
                        <option value="Painelista">Painelista</option>
                        <option value="Moderador">Moderador</option>
                        <option value="Painelista e Moderador">Painelista e Moderador</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="modelo_de_participacaoInput" class="form-label">Modelo de participacao</label>
                    <select class="form-select" aria-label="Selecione" name="modelo_de_participacao" id="modelo_de_participacaoInput">
                        <option selected>Selecione</option>
                        <option value="Presencial">Presencial</option>
                        <option value="Online">Online</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="cupomInput" class="form-label">cupom</label>
                    <input class="form-control" type="text" name="cupom" id="cupomInput">
                </div>

                <input type="submit" class="btn btn-primary" style="float: right;" value="Convidar">
            </form>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection
