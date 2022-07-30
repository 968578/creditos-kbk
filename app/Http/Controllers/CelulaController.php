<?php

namespace App\Http\Controllers;

use App\Models\Celula;
use Illuminate\Http\Request;

class CelulaController extends Controller
{
    //
    public function store(Request $request)
    {

        $this->validate($request,[
            'nameCelula' => ['required', 'max:200']
        ]);

        Celula::create([
            'name' => $request->nameCelula,
        ]);
        
        return redirect()->route('config');
    }
}
