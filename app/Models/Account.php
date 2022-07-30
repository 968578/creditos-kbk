<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'monto',
        'fecha_solicitud',
        'fecha_desembolso',
        'numero_cuotas',
        'valor_cuota',
        'fecha_aprobacion',
        'estado',
        'cuotas_pagadas',
        'debtor_id'
    ];

    public function debtor()
    {
        return $this->belongsTo(Debtor::class,'debtor_id');
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class, 'account_id');
    }

}
