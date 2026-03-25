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
        'vedette_id',
        'equipe_vedette_id',
        'remorque_id',
        'equipe_remorque_id',
        'quai_id',
        'prestation_id',
    ];

    public function pilote() {
        return $this->belongsTo(Pilote::class, 'pilote_id');
    }

    public function vedette() {
        return $this->belongsTo(Vedette::class, 'vedette_id');
    }

    public function equipeVedette() {
        return $this->belongsTo(EquipeVedette::class, 'equipe_vedette_id');
    }

    public function remorque() {
        return $this->belongsTo(Remorque::class, 'remorque_id');
    }

    public function equipeRemorque() {
        return $this->belongsTo(EquipeRemorque::class, 'equipe_remorque_id');
    }

    public function quai() {
        return $this->belongsTo(Quai::class, 'quai_id');
    }

    public function prestation() {
        return $this->belongsTo(Prestation::class, 'prestation_id');
    }
}
