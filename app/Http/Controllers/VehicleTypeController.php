<?php

namespace App\Http\Controllers;

use App\VehicleType;
use Illuminate\Http\Request;

class VehicleTypeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(VehicleType $types, $id)
    {
        $type = $types->whereName($id)->first();
        return view('vehicles.index', compact('type'));
    }
}
