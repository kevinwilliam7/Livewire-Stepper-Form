<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ec_postalcode extends Model
{
    use HasFactory;
    protected $primaryKey = 'postal_id';
    protected $table = 'ec_postalcode';
}
