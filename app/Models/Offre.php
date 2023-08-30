<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $fillable = ['Titre','Reference','Fichier','id','DateP','DateC','Contenu'];
    use HasFactory;
}
