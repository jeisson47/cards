@extends('layouts.auth')

@section('title', 'Crear Tarjeta')

@section('content')

<main class="container">

    <div class="d-flex align-items-center justify-content-center py-3">
        <div class="bg-white p-3 rounded shadow col-md-6 col-12">
            <form method="POST" action="{{route('card.store')}}" enctype="multipart/form-data">

                @csrf
                        <div class="form-group">
                            <label for="nameCompany">Empresa</label>
                            <select class="form-select" name="nameCompany" id="nameCompany" aria-label="Default select example">
                                <option selected>Seleccione una empresa</option>
                                @forelse ($companies as $company)
                                <option value="{{$company->id}}">{{$company->name}}</option>
                                @empty
                                    
                                @endforelse
                              </select>

                            @error('nameCompany')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="style">Estilo</label>
                            <select class="form-select" aria-label="Default select example" id="style" name="style">
                                <option selected>Seleccione una estilo</option>
                                
                                <option value="1">Style 1</option>

                              </select>

                            @error('style')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-6">
                                <label for="color_primary" class="form-label">Color 1</label>
                                <input type="color" name="color_primary" class="form-control form-control-color" id="color_primary" value="#563d7c" title="Choose your color">
    
                                @error('color_primary')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="color_secondary" class="form-label">Color 2</label>
                                <input type="color" class="form-control form-control-color" name="color_secondary" id="color_secondary" value="#563d7c" title="Choose your color">
    
                                @error('color_secondary')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="background">Color de iconos</label>
                                    <select class="form-control" id="background" name="background">
                                      <option value="light">Blanco</option>
                                      <option value="dark">Negro</option>
                                    </select>
                                    @error('background')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="color_background" class="form-label">Color de fondo</label>
                                <input type="color" name="color_background" class="form-control form-control-color" id="color_background" value="#563d7c" title="Choose your color">
    
                                @error('color_background')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <p class="fw-bold">Configura los horarios cuando crees la tarjeta</p>

                        <div class="form-group">
                            <label for="front">Foto de portada</label>
                            <input class="form-control" type="file" name="front" id="front" accept=".jpg,.png,.jpeg">
                            
                            @error('front')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <input class="form-control" type="file" name="logo" id="logo">
                            
                            @error('logo')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name_person">Nombre de la persona</label>
                            <input class="form-control" type="text" name="name_person" id="name_person">
                            
                            @error('name_person')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="type_person">Tipo de persona</label>
                            <input class="form-control" type="text" name="type_person" id="type_person">
                            
                            @error('type_person')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="more_information">Información adicional</label>
                            <textarea class="form-control" name="more_information" id="more_information" rows="5"></textarea>
                            
                            @error('more_information')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="url_map">Url mapa</label>
                            <input class="form-control" type="text" name="url_map" id="url_map">
                            
                            @error('url_map')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="url_calendar">Url calendar</label>
                            <input class="form-control" type="text" name="url_calendar" id="url_calendar">
                            
                            @error('url_calendar')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="url_map">Facebook Url</label>
                            <input class="form-control" type="text" name="facebook_url" id="facebook_url">
                            
                            @error('facebook_url')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="twitter_url">Twitter Url</label>
                            <input class="form-control" type="text" name="twitter_url" id="twitter_url">
                            
                            @error('twitter_url')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="youtube_url">YouTube Url</label>
                            <input class="form-control" type="text" name="youtube_url" id="youtube_url">
                            
                            @error('youtube_url')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tiktok_url">TitTok Url</label>
                            <input class="form-control" type="text" name="tiktok_url" id="tiktok_url">
                            
                            @error('tiktok_url')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="instagram_url">Instagram Url</label>
                            <input class="form-control" type="text" name="instagram_url" id="instagram_url">
                            
                            @error('instagram_url')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="whatsapp_url">WhatsApp numero</label>
                            <input class="form-control" type="number" name="whatsapp_url" id="whatsapp_url">
                            <p class="small">Número de telefono sin espacios ni signos</p>
                            
                            @error('whatsapp_url')
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
