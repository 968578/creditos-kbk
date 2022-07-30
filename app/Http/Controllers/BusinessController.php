<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function store(Request $request)
    {

        $this->validate($request,[
            'nameBusiness' => ['required', 'max:200'],
        ]);
        
        Business::create([
            'name' => $request->nameBusiness,
        ]);

        return redirect()->route('config');

    }
}
