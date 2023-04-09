<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_commande',
        'id_categorie',
        'id_user',
        'date_commande',
        'montant',
        'statut',
        
    ];
}
