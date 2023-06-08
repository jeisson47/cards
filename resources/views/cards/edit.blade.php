@extends('layouts.auth')

@section('title', 'Editar Tarjeta')

@section('content')

<main class="container">

    <div class="d-flex align-items-center justify-content-center py-3">
        <div class="bg-white p-3 rounded shadow col-md-6 col-12">

            <div class="text-end">
                <form method="POST" action="{{route('card.destroy',$card->id)}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Borrar</button>
                </form>
            </div>


            <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
            aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Horarios</h5>
                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fa-regular fa-circle-xmark"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">


                        <div class="d-flex flex-column  justify-content-center">

                            <form action="" class="form-h">
                                <div class="row">
                                    <div class="col-md-2 col-12">
                                        <div class="form-check">
                                            <input class="form-check-input check-day" @checked($schedules->lunes and $schedules->lunes->state === "enable") type="checkbox" value=""
                                                id="check-lunes">
                                            <label class="form-check-label" for="check-lunes">Lunes</label>
                                        </div>
                                    </div>
                                    <div class="col-md col-6">
                                        <input type="time" disabled name="" id="since-lunes"
                                            class="form-control" placeholder="" value="{{$schedules->lunes->desde}}" aria-describedby="helpId">
                                    </div>
                                    <div class="col-md col-6">
                                        <input type="time" disabled name="" id="until-lunes"
                                            class="form-control" placeholder="" value="{{$schedules->lunes->hasta}}" aria-describedby="helpId">
                                    </div>
                                    <div class="col-md col-12 my-2">
                                        <button class="btn btn-ligth" type="submit"><i
                                                class="fa-regular fa-floppy-disk"></i></button>
                                    </div>
                                </div>
                            </form>


                            <form action="" class="form-h">
                                <div class="row">
                                    <div class="col-md-2 col-12">
                                        <div class="form-check">
                                            <input class="form-check-input check-day" @checked($schedules->martes and $schedules->martes->state === "enable")  type="checkbox" value=""
                                                id="check-martes">
                                            <label class="form-check-label" for="check-martes">
                                                Martes
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md col-6">
                                        <input type="time" disabled name="" id="since-martes"
                                            class="form-control" placeholder="" value="{{$schedules->martes->desde}}" aria-describedby="helpId">
                                    </div>
                                    <div class="col-md col-6">
                                        <input type="time" disabled name="" id="until-martes"
                                            class="form-control" placeholder="" value="{{$schedules->martes->hasta}}" aria-describedby="helpId">
                                    </div>
                                    <div class="col-md col-12 my-2">
                                        <button class="btn btn-ligth" type="submit"><i
                                                class="fa-regular fa-floppy-disk"></i></button>
                                    </div>
                                </div>
                            </form>

                            <form action="" class="form-h">
                                <div class="row">
                                    <div class="col-md-2 col-12">
                                        <div class="form-check">
                                            <input class="form-check-input check-day" type="checkbox"
                                                value="" id="check-miercoles" @checked($schedules->miercoles and $schedules->miercoles->state === "enable")>
                                            <label class="form-check-label" for="check-miercoles">
                                                Miercoles
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md col-6">
                                        <input type="time" disabled name="" id="since-miercoles"
                                            class="form-control" placeholder=""
                                            aria-describedby="helpId" value="{{$schedules->miercoles->desde}}">
                                    </div>
                                    <div class="col-md col-6">
                                        <input type="time" disabled name="" id="until-miercoles"
                                            class="form-control" placeholder=""
                                            aria-describedby="helpId" value="{{$schedules->miercoles->hasta}}">
                                    </div>
                                    <div class="col-md col-12 my-2">
                                        <button class="btn btn-ligth" type="submit"><i
                                            class="fa-regular fa-floppy-disk"></i></button>
                                    </div>
                                </div>
                            </form>

                            <form action="" class="form-h">
                                <div class="row">
                                    <div class="col-md-2 col-12">
                                        <div class="form-check">
                                            <input class="form-check-input check-day" type="checkbox"
                                                value="" id="check-jueves" @checked($schedules->jueves and $schedules->jueves->state === "enable")>
                                            <label class="form-check-label" for="check-jueves">
                                                Jueves
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md col-6">
                                        <input type="time" disabled name="" id="since-jueves"
                                        class="form-control" placeholder=""
                                        aria-describedby="helpId" value="{{$schedules->jueves->desde}}">
                                    </div>
                                    <div class="col-md col-6">
                                        <input type="time" disabled name="" id="until-jueves"
                                        class="form-control" placeholder=""
                                        aria-describedby="helpId" value="{{$schedules->jueves->hasta}}">
                                    </div>
                                    <div class="col-md col-12 my-2">
                                        <button class="btn btn-ligth" type="submit"><i
                                            class="fa-regular fa-floppy-disk"></i></button>
                                    </div>
                                </div>
                            </form>

                            <form action="" class="form-h">
                                <div class="row">
                                    <div class="col-md-2 col-12">
                                        <div class="form-check">
                                            <input class="form-check-input check-day" type="checkbox"
                                                value="" id="check-viernes" @checked($schedules->viernes and $schedules->viernes->state === "enable")>
                                            <label class="form-check-label" for="check-viernes">
                                                Viernes
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md col-6">
                                        <input type="time" disabled name="" id="since-viernes"
                                        class="form-control" placeholder=""
                                        aria-describedby="helpId" value="{{$schedules->viernes->desde}}">
                                    </div>
                                    <div class="col-md col-6">
                                        <input type="time" disabled name="" id="until-viernes"
                                            class="form-control" placeholder=""
                                            aria-describedby="helpId" value="{{$schedules->viernes->hasta}}">
                                    </div>
                                    <div class="col-md col-12 my-2">
                                        <button class="btn btn-ligth" type="submit"><i
                                            class="fa-regular fa-floppy-disk"></i></button>
                                    </div>
                                </div>
                            </form>

                            <form action="" class="form-h">
                                <div class="row">
                                    <div class="col-md-2 col-12">
                                        <div class="form-check">
                                            <input class="form-check-input check-day" type="checkbox"
                                                value="" id="check-sabado" @checked($schedules->sabado and $schedules->sabado->state === "enable")>
                                            <label class="form-check-label" for="check-sabado">
                                                Sabado
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md col-6">
                                        <input type="time" disabled name="" id="since-sabado"
                                        class="form-control" placeholder=""
                                        aria-describedby="helpId" value="{{$schedules->sabado->desde}}">
                                    </div>
                                    <div class="col-md col-6">
                                        <input type="time" disabled name="" id="until-sabado"
                                        class="form-control" placeholder=""
                                        aria-describedby="helpId" value="{{$schedules->sabado->hasta}}">
                                    </div>
                                    <div class="col-md col-12 my-2">
                                        <button class="btn btn-ligth" type="submit"><i
                                            class="fa-regular fa-floppy-disk"></i></button>
                                    </div>
                                </div>
                            </form>

                            <form action="" class="form-h">
                                <div class="row">
                                    <div class="col-md-2 col-12">
                                        <div class="form-check">
                                            <input class="form-check-input check-day" type="checkbox"
                                                value="" id="check-domingo" @checked($schedules->domingo and $schedules->domingo->state === "enable")>
                                            <label class="form-check-label" for="check-domingo">
                                                Domingo
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md col-6">
                                        <input type="time" disabled name="" id="since-domingo"
                                        class="form-control" placeholder=""
                                        aria-describedby="helpId" value="{{$schedules->domingo->desde}}">
                                    </div>
                                    <div class="col-md col-6">
                                        <input type="time" disabled name="" id="until-domingo"
                                        class="form-control" placeholder="" value="{{$schedules->domingo->hasta}}"
                                        aria-describedby="helpId">
                                    </div>
                                    <div class="col-md col-12 my-2">
                                        <button class="btn btn-ligth" type="submit"><i
                                            class="fa-regular fa-floppy-disk"></i></button>
                                    </div>
                                </div>
                            </form>
                        
                        </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>


            <form method="POST" action="{{route('card.update',$card->id)}}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nameCompany">Empresa</label>
                    <select class="form-select" name="nameCompany" id="nameCompany" aria-label="Default select example">
                        <option selected>Seleccione una empresa</option>
                        @forelse ($companies as $company)
                        <option value="{{$company->id}}" @selected($card->companies_id == $company->id)
                            >{{$company->name}}</option>
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

                        <option value="1" @selected($card->style == 1) >Style 1</option>

                    </select>

                    @error('style')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-6">
                        <label for="color_primary" class="form-label">Color 1</label>
                        <input type="color" name="color_primary" class="form-control form-control-color"
                            id="color_primary" value="{{$card->color_primary}}" title="Choose your color">

                        @error('color_primary')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="color_secondary" class="form-label">Color 2</label>
                        <input type="color" class="form-control form-control-color" name="color_secondary"
                            id="color_secondary" value="{{$card->color_secondary}}" title="Choose your color">

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
                                <option value="light" @selected($card->background_color == "light")>Blanco</option>
                                <option value="dark" @selected($card->background_color == "dark")>Negro</option>
                            </select>
                            @error('background')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="color_background" class="form-label">Color de fondo</label>
                        <input type="color" name="color_background" class="form-control form-control-color"
                            id="color_background" value="{{$card->color_background}}" title="Choose your color">

                        @error('color_background')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <!--  Modal trigger button  -->
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
                    Configurar Horarios
                </button>



                <script>
                    var idCard = {{$card->id}}

                </script>

                <script>
                    $('.check-day').click(function () {
                        if ($(this).is(':checked')) {
                            var id = $(this).attr('id');
                            id = id.replace(/^check-/, '');

                            $('#since-' + id).removeAttr('disabled');
                            $('#until-' + id).removeAttr('disabled');
                            // Aquí puedes realizar las acciones que deseas cuando el checkbox es seleccionado con un clic
                        } else {
                            var id = $(this).attr('id');
                            id = id.replace(/^check-/, '');

                            $('#since-' + id).prop('disabled', true);
                            $('#until-' + id).prop('disabled', true);

                            if ($('#days-active').val().includes(id)) {

                                var expresionRegular = new RegExp(id + ".*?,");
                                var resultado = $('#days-active').val().replace(expresionRegular, '');
                                $('#days-active').val(resultado);
                            }
                        }
                    });

                </script>

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
                    <input class="form-control" type="text" name="name_person" value="{{$card->name_person}}"
                        id="name_person">

                    @error('name_person')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="type_person">Tipo de persona</label>
                    <input class="form-control" type="text" name="type_person" value="{{$card->type_person}}"
                        id="type_person">

                    @error('type_person')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="more_information">Información adicional</label>
                    <textarea class="form-control" name="more_information" id="more_information"
                        rows="5">{{$card->more_information}}</textarea>

                    @error('more_information')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="url_map">Url mapa</label>
                    <input class="form-control" type="text" name="url_map" value="{{$card->location_map}}" id="url_map">

                    @error('url_map')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="url_calendar">Url calendar</label>
                    <input class="form-control" type="text" name="url_calendar" value="{{$card->calendar}}"
                        id="url_calendar">

                    @error('url_calendar')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="url_map">Facebook Url</label>
                    <input class="form-control" type="text" name="facebook_url" value="{{$card->facebook_link}}"
                        id="facebook_url">

                    @error('facebook_url')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="twitter_url">Twitter Url</label>
                    <input class="form-control" type="text" name="twitter_url" value="{{$card->twitter_link}}"
                        id="twitter_url">

                    @error('twitter_url')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="youtube_url">YouTube Url</label>
                    <input class="form-control" type="text" name="youtube_url" value="{{$card->youtube_link}}"
                        id="youtube_url">

                    @error('youtube_url')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tiktok_url">TitTok Url</label>
                    <input class="form-control" type="text" name="tiktok_url" value="{{$card->tiktok_link}}"
                        id="tiktok_url">

                    @error('tiktok_url')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="instagram_url">Instagram Url</label>
                    <input class="form-control" type="text" name="instagram_url" value="{{$card->instagram_link}}"
                        id="instagram_url">

                    @error('instagram_url')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="whatsapp_url">WhatsApp numero</label>
                    <input class="form-control" type="number" name="whatsapp_url" value="{{$card->whatsApp_link}}"
                        id="whatsapp_url">
                    <p class="small">Número de telefono sin espacios ni signos</p>

                    @error('whatsapp_url')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status">Estado</label>
                    <select class="form-control" id="status" name="status">
                        <option value="Active" @selected($card->status === "Active" )>Activo</option>
                        <option value="Inactive" @selected($card->status === "Inactive" )>Inactivo</option>
                    </select>
                    @error('status')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-dark w-100">Editar</button>
            </form>
        </div>
    </div>

    <script src="{{asset('assets/js/cards.js')}}"></script>

</main>

@endsection
