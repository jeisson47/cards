@extends('layouts.auth')

@section('title', 'Crear Compañia')

@section('content')

<main class="container">

    <div class="d-flex align-items-center justify-content-center py-3">
        <div class="bg-white p-3 rounded shadow col-6">
            <form method="POST" action="{{route('companies.store')}}">

                @csrf

                        <div class="form-group">
                            <label for="nameCompany">Nombre de la empresa</label>
                            <input type="text" class="form-control" name="nameCompany" id="nameCompany"
                                placeholder="Ej: Renault">

                            @error('nameCompany')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="status">Estado</label>
                            <select class="form-control" id="status" name="status">
                              <option value="Active">Activo</option>
                              <option value="Inactive">Inactivo</option>
                            </select>
                            @error('status')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>

                        <button class="btn btn-dark w-100">Crear</button>
            </form>
        </div>
    </div>



</main>

@endsection
