<?php

namespace App\Models;

use App\Models\Pivot\SeanceEnseignantPivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use AjCastro\EagerLoadPivotRelations\EagerLoadPivotTrait;

class Enseignant extends Model
{

    use EagerLoadPivotTrait;
    protected $fillable = [
        'antenne_id',
        'nom',
        'prenom',
        'email',
        'enseignant_id_externe'
    ];
    public function seances()
    {
        return $this->belongsToMany(Seance::class, 'seance_enseignant')
                    ->using(SeanceEnseignantPivot::class)
                    ->withPivot('emargement_id');
    }
}
