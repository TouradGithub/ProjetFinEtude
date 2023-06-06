<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Femme;
use App\Models\User;
class Demand extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function femme()
    {
        return $this->belongsTo(Femme::class, 'id_femme');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
