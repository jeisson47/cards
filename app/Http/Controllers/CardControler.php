<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Companie;
use Illuminate\Http\Request;

class CardControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = Card::all();

        return view('cards.index',compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Companie::all();
        return view('cards.create',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nameCompany' => 'required|unique:companies,name|max:255',
            'status' => 'required|in:Inactive,Active',
            'style' => 'required',
            'color_primary' =>['regex:/^[A-Za-z0-9#]+$/','max:7'],
            'color_secondary' =>['regex:/^[A-Za-z0-9#]+$/','max:7'],
            'background' => 'in:dark,light',
            'color_background'=>['regex:/^[A-Za-z0-9#]+$/','max:7','required'],
            'front' => "required|image|max:2048|mimes:jpeg,png,jpg",
            'logo' => "required|image|max:2048|mimes:jpeg,png,jpg",
            'name_person' => 'required|max:250|regex:/^[\pL\s\d.,()&$#!¿?¡@_-]+$/u',
            'type_person' => 'nullable|max:250|regex:/^[\pL\s\d.,()&$#!¿?¡@_-]+$/u',
            'more_information' => 'max:250',
            'url_map' => 'url|max:250',
            'url_calendar' => 'url|max:250',
            'facebook_url' => 'nullable|url|max:250',
            'youtube_url' => 'nullable|url|max:250',
            'twitter_url' => 'nullable|url|max:250',
            'tiktok_url' => 'nullable|url|max:250',
            'instagram_url' => 'nullable|url|max:250',
            'whatsapp_url' => 'nullable|digits:10|numeric',
        ]);

        $card = new Card();

        $card->name_person = $request->name_person;
        $card->companies_id = $request->nameCompany;
        $card->style = $request->style;
        $card->color_primary = $request->color_primary;
        $card->color_secondary = $request->color_secondary;
        $card->status = $request->status;
        $card->background_color = $request->background;
        $card->color_background = $request->color_background;

        $file_front = $request->file('front');
        $path_front = $file_front->store('tarjetas/portada', 'public'); // Guardar la foto en la carpeta "photos" dentro de la carpeta "public"

        // Opcionalmente, puedes obtener la URL de la imagen almacenada
        $url_front = asset('storage/' . $path_front);

        $card->front = $url_front;
        $card->type_person = $request->type_person;
        $card->more_information = $request->more_information;

        $file_logo = $request->file('logo');
        $path_logo = $file_logo->store('tarjetas/logos', 'public'); // Guardar la foto en la carpeta "photos" dentro de la carpeta "public"

        // Opcionalmente, puedes obtener la URL de la imagen almacenada
        $url_logo = asset('storage/' . $path_logo);

        $card->brand_logo = $url_logo;
        $card->location_map = $request->url_map;
        $card->calendar = $request->url_calendar;

        $card->facebook_link = $request->facebook_url;     
        $card->youtube_link = $request->youtube_url;
        $card->twitter_link = $request->twitter_url;
        $card->instagram_link = $request->instagram_url;
        $card->tiktok_link = $request->tiktok_url;
        $card->whatsApp_link = $request->whatsapp_url;

        $card->save();

        return redirect()->route('card.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $company,string $id)
    {
        $company = Companie::where('slug',$company)->where('status','Active')->first();
        $card = Card::where('id',$id)->where('status','Active')->first();

        if(empty($company->id) || empty($card->id)){
            abort(404);
        }

        return view('cards.show',compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $card = Card::findOrFail($id);
        $companies = Companie::all();

        return view('cards.edit',compact('card','companies'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nameCompany' => 'required|unique:companies,name|max:255',
            'status' => 'required|in:Inactive,Active',
            'style' => 'required',
            'color_primary' =>['regex:/^[A-Za-z0-9#]+$/','max:7'],
            'color_secondary' =>['regex:/^[A-Za-z0-9#]+$/','max:7'],
            'background' => 'in:dark,light',
            'color_background'=>['regex:/^[A-Za-z0-9#]+$/','max:7','required'],
            'front' => "nullable|image|max:2048|mimes:jpeg,png,jpg",
            'logo' => "nullable|image|max:2048|mimes:jpeg,png,jpg",
            'name_person' => 'required|max:250|regex:/^[\pL\s\d.,()&$#!¿?¡@_-]+$/u',
            'type_person' => 'nullable|max:250|regex:/^[\pL\s\d.,()&$#!¿?¡@_-]+$/u',
            'more_information' => 'max:250',
            'url_map' => 'url|max:250',
            'url_calendar' => 'url|max:250',
            'facebook_url' => 'nullable|url|max:250',
            'youtube_url' => 'nullable|url|max:250',
            'twitter_url' => 'nullable|url|max:250',
            'tiktok_url' => 'nullable|url|max:250',
            'instagram_url' => 'nullable|url|max:250',
            'whatsapp_url' => 'nullable|digits:10|numeric',
        ]);


        $card = Card::findOrFail($id);

        $card->name_person = $request->name_person;
        $card->companies_id = $request->nameCompany;
        $card->style = $request->style;
        $card->color_primary = $request->color_primary;
        $card->color_secondary = $request->color_secondary;
        $card->status = $request->status;
        $card->background_color = $request->background;
        $card->color_background = $request->color_background;

        if ($request->hasFile('front')) {
        $file_front = $request->file('front');
        $path_front = $file_front->store('tarjetas/portada', 'public'); // Guardar la foto en la carpeta "photos" dentro de la carpeta "public"

        // Opcionalmente, puedes obtener la URL de la imagen almacenada
        $url_front = asset('storage/' . $path_front);

        $card->front = $url_front;
        }

        $card->type_person = $request->type_person;
        $card->more_information = $request->more_information;

        if ($request->hasFile('logo')) {

        $file_logo = $request->file('logo');
        $path_logo = $file_logo->store('tarjetas/logos', 'public'); // Guardar la foto en la carpeta "photos" dentro de la carpeta "public"

        // Opcionalmente, puedes obtener la URL de la imagen almacenada
        $url_logo = asset('storage/' . $path_logo);

        $card->brand_logo = $url_logo;
        }


        $card->location_map = $request->url_map;
        $card->calendar = $request->url_calendar;

        $card->facebook_link = $request->facebook_url;     
        $card->youtube_link = $request->youtube_url;
        $card->twitter_link = $request->twitter_url;
        $card->instagram_link = $request->instagram_url;
        $card->tiktok_link = $request->tiktok_url;
        $card->whatsApp_link = $request->whatsapp_url;

        $card->save();

        return redirect()->route('card.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $card = Card::findOrFail($id);

        $card->delete();

        return redirect()->route('card.index');
    }
}
