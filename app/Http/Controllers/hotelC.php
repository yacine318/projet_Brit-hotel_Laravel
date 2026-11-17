<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Chambre;
use App\Models\ChambreReservation;
use App\Models\Client;
use App\Models\Equipement;
use App\Models\EquipementHotel;
use App\Models\Hotel;
use App\Models\Photo;
use App\Models\Reservation;


class hotelC extends Controller
{
    public function index()
    {
        $lesHotels = Hotel::with('photos')->take(3)->get();
        $nbHotels = Hotel::count();
        return view('accueilV', compact('nbHotels', 'lesHotels'));
    }
    public function hotelall()
    {
        $lesHotels = Hotel::all();
      return view("hotelsallV", compact('lesHotels'));
    }

    public function clientSaisir()
    {
        return view('formnewcompteV');
    }

    public function clientCreer(request $request)
    {
        $client = new Client();
        $client->mail = $request->mail;
    $client->motpasse = Hash::make($request->password);
        $client->nom = $request->nom;
        $client->save();

        session([
            
            'client_nom' => $client->nom,
            'client_email' => $client->mail,
            'is_connected' => true
        ]);

        return redirect('/')->with('success', 'Bienvenue ! Votre compte a été créé.');
    }
}
