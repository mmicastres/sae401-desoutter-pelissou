<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateurs extends Model
{
    use HasFactory;

    public $timestamps = FALSE;
    public $incrementing = False;

    protected $primaryKey = 'pseudo';

    protected $keyType = 'string';
}
