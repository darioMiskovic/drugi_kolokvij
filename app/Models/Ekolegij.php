<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekolegij extends Model
{
    public $table = "ekolegij";
    use HasFactory;

    protected $fillable =["naziv","link","opis","aktivan","dostupan_do"];

    public function studenti(){
        return $this->belongsToMany(Student::class,"upisani_studenti","ekolegij_id","studenti_id");
    }


}
