<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Pago;
use Illuminate\Http\Request;

class PagosController extends Controller
{

    public function index()
    {
        $accounts = Account::all();
        return view('layouts.pagos-masivos-page', [
            'accounts' => $accounts,
        ]);
    }

    
}
