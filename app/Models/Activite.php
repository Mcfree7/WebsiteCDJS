<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    protected $fillable = ['Titre','Date','Contenu','Image','id','Categorie','Status'];
    use HasFactory;
}
