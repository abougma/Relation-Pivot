<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emargement extends Model
{

    protected $fillable = [
        'objet_type',
        'objet_id',
        'date_emargement',
        'statut_presence',
        'commenataire',
        'date_debut_com',
        'date_fin_com',
        'chemin_sign'
    ];

    public function seance()
    {
        return $this->belongsTo(Seance::class);
    }
}
