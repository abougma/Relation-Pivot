<?php

use App\Models\Emargement;
use App\Models\Enseignant;
use App\Models\Seance;
use App\Models\SeanceEnseignant;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/toto', function (){

    $dataEnseignants = Enseignant::with('seances.pivot.emargement')->find(2);
    dd($dataEnseignants);

});
