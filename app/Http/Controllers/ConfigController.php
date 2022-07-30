<?php

namespace App\Http\Controllers;

use App\Models\Amount;
use App\Models\Business;
use App\Models\Celula;
use App\Models\StatusAccounts;
use App\Models\StatusDebtor;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {

        $amounts = Amount::all();
        $businesses = Business::all();
        $celulas = Celula::all();

        return view('layouts.config',[
            'businesses' => $businesses,
            'celulas' => $celulas,
            'amounts' => $amounts
        ]);
    }
}
