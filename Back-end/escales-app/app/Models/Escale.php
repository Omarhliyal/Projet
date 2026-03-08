<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Escale extends Model
{
    // Fields that can be filled via Escale::create()
    protected $fillable = [
'ship_name',
'cargo',
'port',
'pilot_name',
'tugboats',
'machine_operator',
'equipment_used',
'services',
'arrival_date',
'departure_date',
'status'
];

}