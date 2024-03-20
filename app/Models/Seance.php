<?php

namespace App\Models;

use App\Models\Pivot\SeanceEnseignantPivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Emargement;
use AjCastro\EagerLoadPivotRelations\EagerLoadPivotTrait;


class Seance extends Model
{
    use EagerLoadPivotTrait;

    protected $fillable = [
        'matiere_id',
        'intitule',
        'date_debut_seance',
        'date_fin_seance',
        'duration',
        'seance_id_externe'
    ];

    public function emargement()
    {
        return $this->hasOne(Emargement::class);
    }

}
