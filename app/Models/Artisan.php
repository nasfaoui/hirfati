<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Artisan extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'id_artiste',
        'id_user',
        'nom',
        'description',
        'photo_de_profil',
        'tarif_horaire',
        'disponibilite',
        'ville',
        'email',
        'password',
    ];

   

    //protected $primaryKey = 'id_artiste';

}
