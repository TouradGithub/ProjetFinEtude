<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Femme extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function demands()
    {
        return $this->hasMany(Demand::class, 'id_femme');
    }
}
