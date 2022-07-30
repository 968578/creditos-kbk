<?php

namespace App\Http\Controllers;

use App\Models\Celula;
use App\Models\Debtor;
use App\Models\Business;
use Illuminate\Http\Request;

class DebtorController extends Controller
{
    public function index()
    {

        $debtors = Debtor::All();

        return view('layouts.debtors-page',[
            'debtors' => $debtors
        ]);
    }

    public function create()
    {

        $businesses = Business::all();
        $celulas =Celula::all();

        return view('layouts.add-debtor',[
            'businesses' => $businesses,
            'celulas' => $celulas
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required','min:5','max:200'],
            'cedula'=> ['required', 'unique:debtors'],
            'cargo' =>['required'],
            'business_id' =>['required'],
            'celula_id' =>['required'],
            'status_debtor_id' => ['nullable'],
            
        ]);

        Debtor::create([
            'name' => $request->name,
            'cedula' => $request->cedula,
            'cargo' => $request->cargo,
            'business_id' => $request->business_id,
            'celula_id' => $request->celula_id,
            'status_debtor_id' => 3

        ]);

        return back()->with('mesaggeConfirm','Deudor Agregado Exito');
    }

    public function show(Request $request , Debtor $debtor)
    {
        $businesses = Business::all();
        $celulas = Celula::all();
        
        return  view('layouts.details-debtor-page',[
            'debtor' => $debtor,
            'businesses' => $businesses,
            'celulas' => $celulas

        ]);
    }

    public function edit(Request $request, Debtor $debtor )
    {

        $this->validate($request,[
            'name' => ['required','min:5','max:200'],
            'cedula'=> ['required', 'unique:debtors,cedula,' . $debtor->cedula . ',cedula'],
            'cargo' =>['required'],
            'business_id' =>['required'],
            'celula_id' =>['required'],
            'status_debtor_id' => ['nullable'],
            
        ]);

        $oldDebtor = Debtor::find($debtor->id);

        $oldDebtor->name = $request->name;
        $oldDebtor->cedula = $request->cedula;
        $oldDebtor->cargo = $request->cargo;
        $oldDebtor->business_id = $request->business_id;
        $oldDebtor->celula_id = $request->celula_id;

        $oldDebtor->save();

        return back()->with('mesaggeConfirm','Actualizado con exito');
    }


}
