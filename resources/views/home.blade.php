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
                                <th scope="col">Name<th>
                                <th scope="col">Company<th>
                                <th scope="col">Title<th>
                                <th scope="col">E-mail<th>
                                <th scope="col">Telefone<th>
                                <th scope="col">Linkedin<th>
                                <th scope="col">Data palestra<th>
                                <th scope="col">Hora palestra<th>
                                <th scope="col">Plenario ou modulo<th>
                                <th scope="col">Qual o painel<th>
                                <th scope="col">Categoria<th>
                                <th scope="col">Status<th>
                                <th scope="col">Modelo de participacao<th>
                                <th scope="col">Cupom<th>
                                <th scope="col">Created_at<th>
                                <th scope="col">Updated_at<th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($itens as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td scope="col">{{ $item->name }}<td>
                                        <td scope="col">{{ $item->company }}<td>
                                        <td scope="col">{{ $item->title }}<td>
                                        <td scope="col">{{ $item->email }}<td>
                                        <td scope="col">{{ $item->telefone }}<td>
                                        <td scope="col">{{ $item->linkedin }}<td>
                                        <td scope="col">{{ $item->data_palestra }}<td>
                                        <td scope="col">{{ $item->hora_palestra }}<td>
                                        <td scope="col">{{ $item->plenario_ou_modulo }}<td>
                                        <td scope="col">{{ $item->qual_o_painel }}<td>
                                        <td scope="col">{{ $item->categoria }}<td>
                                        <td scope="col">{{ $item->status }}<td>
                                        <td scope="col">{{ $item->modelo_de_participacao }}<td>
                                        <td scope="col">{{ $item->cupom }}<td>
                                        <td scope="col">{{ $item->created_at }}<td>
                                        <td scope="col">{{ $item->updated_at }}<td>
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
          <h5 class="modal-title" id="novoConvidadoLabel">Modal title</h5>
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
