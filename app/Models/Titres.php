<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titres extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    public $incrementing = False;

    protected $primaryKey = 'id_titre';

    protected $keyType = 'int';
}
