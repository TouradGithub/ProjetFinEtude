<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\langFemme;
class Femme extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function demands()
    {
        return $this->hasMany(Demand::class, 'id_femme');
    }
    public function languages()
    {
        return $this->hasMany(langFemme::class, 'id_femme');
    }
}
