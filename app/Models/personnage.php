<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personnage extends Model
{
    use HasFactory;

    protected $primaryKey = 'personnage_id';

    protected $fillable = ['pseudo', 'pv', 'race_id', 'armure_id', 'classe_id', 'specialisation_id', 'proprietaire'];

    public function armure(){
        return $this->hasOne(armure::class, 'armure_id', 'armure_id');
    }

    public function race(){
        return $this->hasOne(race::class, 'race_id', 'race_id');
    }

    public function classe(){
        return $this->hasOne(classe::class, 'classe_id', 'classe_id');
    }

    public function specialisation(){
        return $this->hasOne(specialisation::class, 'specialisation_id', 'specialisation_id');
    }
}
