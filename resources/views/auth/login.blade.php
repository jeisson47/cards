@extends('layouts.guest')

@section('title', 'Login')

@section('content')

<section>
    <div class="page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="position-absolute w-40 top-0 start-0 h-100 d-md-block d-none">
              <div class="oblique-image position-absolute d-flex fixed-top ms-auto h-100 z-index-0 bg-cover me-n8" style="background-image:url('storage/assets/img/image-sign-up.jpg')">
                <div class="my-auto text-start max-width-350 ms-7">
                  <h1 class="mt-3 text-white font-weight-bolder">Iniciar <br> Sesión.</h1>
                </div>
                <div class="text-start position-absolute fixed-bottom ms-7">
                  <h6 class="text-white text-sm mb-5">Copyright © 2022 {{env('APP_NAME')}}.</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex flex-column mx-auto">
            <div class="card card-plain mt-8">
              <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-black text-dark display-6">Iniciar Sesión</h3>
                <p class="mb-0">Bienvenido de nuevo.</p>
              </div>
              <div class="card-body">
                <form role="form" method="POST" action="{{route('login')}}">

                  @csrf

                  <label>Correo electronico</label>
                  <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Correo electronico" aria-label="Email" aria-describedby="email-addon">
                  </div>
                  <label>Contraseña</label>
                  <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Contraseña" aria-label="Password" name="password" aria-describedby="password-addon">
                  </div>

                  @if ($errors->all())
                  <div class="text-center">
                      <p class="small text-danger">Los datos ingresados no coinciden con los registros.</p>
                  </div>
                  @endif
                  
                  <button class="w-100 btn btn-dark">Ingresar</button>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main> 
@endsection


