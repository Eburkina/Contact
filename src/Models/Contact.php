<?php

namespace Eservice\Contact\Models;

use Eservice\Contact\Http\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    use UsesUuid;

    protected $primaryKey = 'uuid';

    protected $fillable = [

        'libelle',
        'lieu',
        'liem_map',
        'email',
        'adresse',
        'telephone',
       
    ];
}
