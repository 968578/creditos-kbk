<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = [
        'monto',
        'account_id',
        'fecha_pago',
        
    ];


    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
}
