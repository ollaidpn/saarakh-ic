<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackOffieController extends Controller
{
    public function dashboard(){
        return view('BackOffice.Pages.dashboard');
    }

    public function systemInfos(){
        $infosSystem = DB::table('infos_systems')->find(1);
        return view ('BackOffice.Pages.systemInfos', [
            'infosSystem'=> $infosSystem,
            ]);
    }

    public function messages(){
        return view('BackOffice.Pages.messages');
    }
}
