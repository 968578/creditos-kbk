<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debtor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cedula',
        'cargo',
        'business_id',
        'celula_id',
        'status_debtor_id',
        
    ];


    public function celula()
    {
        return $this->belongsTo(Celula::class, 'celula_id');
    }

    public function business()
    {
        return $this->belongsTo(Business::class, 'business_id');
    }

    public function status()
    {
        return $this->belongsTo(StatusDebtor::class, 'status_debtor_id');
    }

    public function accounts()
    {
        return $this->hasMany(Account::class, 'debtor_id');
    }
}
