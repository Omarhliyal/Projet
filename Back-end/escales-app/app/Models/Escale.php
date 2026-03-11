<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Escale extends Model
{

    protected $fillable = [
        'ship_name',
        'cargo',
        'arrival_date',
        'departure_date',
        'status',
        'pilote_id',
        'machine_id',
        'quai_id',
        'service_id'
    ];

    public function pilote()
    {
        return $this->belongsTo(Pilote::class);
    }

    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }

    public function quai()
    {
        return $this->belongsTo(Quai::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
