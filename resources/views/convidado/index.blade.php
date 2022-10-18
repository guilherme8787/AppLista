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
                            Editar convidado
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Convidado</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr><td>ID</td><td>{{ $convidado['id'] }}</td></tr>
                                <tr><td>name</td><td>{{ $convidado['name'] }}</td></tr>
                                <tr><td>company</td><td>{{ $convidado['company'] }}</td></tr>
                                <tr><td>title</td><td>{{ $convidado['title'] }}</td></tr>
                                <tr><td>email</td><td>{{ $convidado['email'] }}</td></tr>
                                <tr><td>telefone</td><td>{{ $convidado['telefone'] }}</td></tr>
                                <tr><td>linkedin</td><td>{{ $convidado['linkedin'] }}</td></tr>
                                <tr><td>data_palestra</td><td>{{ $convidado['data_palestra'] }}</td></tr>
                                <tr><td>hora_palestra</td><td>{{ $convidado['hora_palestra'] }}</td></tr>
                                <tr><td>plenario_ou_modulo</td><td>{{ $convidado['plenario_ou_modulo'] }}</td></tr>
                                <tr><td>qual_o_painel</td><td>{{ $convidado['qual_o_painel'] }}</td></tr>
                                <tr><td>categoria</td><td>{{ $convidado['categoria'] }}</td></tr>
                                <tr><td>status</td><td>{{ $convidado['status'] }}</td></tr>
                                <tr><td>modelo_de_participacao</td><td>{{ $convidado['modelo_de_participacao'] }}</td></tr>
                                <tr><td>cupom</td><td>{{ $convidado['cupom'] }}</td></tr>
                                <tr><td>created_at</td><td>{{ $convidado['created_at'] }}</td></tr>
                                <tr><td>updated_at</td><td>{{ $convidado['updated_at'] }}</td></tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Modal editar convidado -->
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
