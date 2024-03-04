<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// Model: Movie (singolare in PascalCase) -> Nome della tabella: movies (minuscolo, in snake case, al plurale)
// questo è un comportamento di default che possiamo sovrascivere (documentazione -> eloquent -> table names) -> protected $table = 'nome_tabella';

class Movie extends Model
{
    use HasFactory;
}
