<?php

namespace App\Http\Controllers;

use App\Models\Ekolegij;
use Illuminate\Http\Request;

class EkolegijController extends Controller
{
    //

    public function ispisKolegija(){
        //Ispis koelgija sa studentima koji ga pohađaju
        return Ekolegij::with("studenti")->get();

        //Ispis svih kolegija bez studenata
        //return Ekolegij::all();
    }

    public function dodajKolegij($naziv,$link,$opis,$aktivan, $dostupan_do){
        $kol = new Ekolegij();
        $kol->naziv = $naziv;
        $kol->link = $link;
        $kol->opis = $opis;
        $kol->aktivan = $aktivan;
        $kol->dostupan_do = $dostupan_do;
        $kol->save();

       return "Dodan kolegij";
    }

    public function izbrisiKolegij($id){
        $kol =  Ekolegij::find($id);
        $kol->forceDelete();

        return "Kolegij je izbrisan";
    }

}
