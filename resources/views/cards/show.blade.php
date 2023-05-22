<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/css/cards/global.css')}}">
    <title>{{$card->name_person}}</title>

    <style>
        :root{
            --bs-primary:{{$card->color_primary}};
            --bs-secondary:{{$card->color_secondary}};
        }
    </style>

    @if ($card->style == "1")

        @if ($card->background_color == 'dark')
            <link rel="stylesheet" href="{{asset('assets/css/cards/style1/dark.css')}}">
        @else
            <link rel="stylesheet" href="{{asset('assets/css/cards/style1/ligth.css')}}">
        @endif

        
    @endif

</head>
<body>

    <div class="d-flex w-100 vh-100 align-items-center justify-content-center">

        
            <div class="card shadow-sm" style="width: 18rem;">
                <img src="{{$card->front}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-title p-0 m-0 fs-5 fw-bold" style="color:{{$card->color_secondary}}">{{$card->name_person}}</p>
                  <p class="card-text" style="color:{{$card->color_primary}}">{{$card->type_person}}</p>
                
                  <p>{!! nl2br($card->more_information) !!}</p>
                
                  <div class="d-flex align-items-center justify-content-between">
                    <img src="{{$card->brand_logo}}" width="110px" alt="logo">

                    <div class="d-flex justify-content-end">
                        <a href="{{$card->location_map}}" target="_blanck" class="map"></a>
                        <a href="{{$card->calendar}}" target="_blanck" class="calendar"></a>
                    </div>
                    

                  </div>

                  <hr>

                  <div class="d-flex justify-content-end align-items-center">

                    @if ($card->facebook_link)

                        <a href="{{$card->facebook_link}}" target="_blank" class="facebook-link mx-1"></a>

                    @endif

                    @if ($card->youtube_link)

                        <a href="{{$card->youtube_link}}" target="_blanck" class="youtube-link mx-1"></a>

                    @endif

                    @if ($card->tiktok_link)

                        <a href="{{$card->tiktok_link}}" target="_blanck" class="tiktok-link mx-1"></a>

                    @endif

                    @if ($card->twitter_link)

                        <a href="{{$card->twitter_link}}" target="_blanck" class="twitter-link mx-1"></a>

                    @endif

                    @if ($card->instagram_link)

                    <a href="{{$card->instagram_link}}" target="_blanck" class="instagram-link mx-1"></a>

                    @endif

                    @if ($card->whatsApp_link)

                    <a href="https://wa.me/+57{{$card->whatsApp_link}}" target="_blank" class="whatsApp-link mx-1"></a>

                    @endif

                  </div>

                </div>
              </div>
        

    </div>

    
</body>
</html>