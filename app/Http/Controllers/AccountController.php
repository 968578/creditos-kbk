<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //

    public function show(Request $request, $debtor_id, $account_id)
    {
        $account = Account::find($account_id);
        // $debtor = Debtor::find($debtor_id);
        return view('layouts.details-account-page',[
            'account' => $account,
            
        ]);
    }
}
