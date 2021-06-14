<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = "studenti";

    protected $fillable =["ime_prezime","broj_indeksa","datum_rodjenja","spol"];

    public function ekolegiji(){
        return $this->belongsToMany(Ekolegij::class,"upisani_studenti","ekolegij_id","studenti_id");
    }

    use HasFactory;
}
