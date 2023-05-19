@extends('layouts.auth')

@section('title', 'Crear Compañia')

@section('content')

<main class="container">


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Compañia</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Si elimina la compañia, las tarjetas asociadas a esta no se prodran ver.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <form action="{{route('companies.destroy',$company->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Si, Borrar</button>
            </form>
              
            </div>
          </div>
        </div>
      </div>

    <div class="d-flex align-items-center justify-content-center py-3">
        <div class="bg-white p-3 rounded shadow col-6">

            <div class="text-end">
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Borrar
                  </button>
            </div>

            <form method="POST" action="{{route('companies.update',$company->id)}}">
                @method('PATCH')
                @csrf

                        <div class="form-group">
                            <label for="nameCompany">Nombre de la empresa</label>
                            <input type="text" class="form-control" name="nameCompany" value="{{$company->name}}" id="nameCompany"
                                placeholder="Ej: Renault">

                            @error('nameCompany')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="status">Estado</label>
                            <select class="form-control" id="status" name="status">
                              <option value="Active" @selected($company->status === "Active") >Activo</option>
                              <option value="Inactive" @selected($company->status === "Inactive")>Inactivo</option>
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
