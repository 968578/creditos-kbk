<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusDebtor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function debtors()
    {
        return $this->hasMany(Debtor::class, 'status_debtor_id');
    }
}
