<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarListController extends Controller
{
    public function index(Request $request)
    {
        

        $data = DB::table('autoworld_CRUDs')->get();
        return view('car-list', ['data' => $data]);
    }
}
