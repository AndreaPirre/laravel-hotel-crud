<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configurazione extends Model
{
    protected $table = 'configurazioni';

    protected $fillable = [

        "title",
        "description"
    ];
}
