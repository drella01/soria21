<?php

namespace App\Http\Controllers;

use App\Vehicle;
use App\VehicleType;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = VehicleType::all();
        return view('vehicles.form', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*if($request->has('file')){
            $rules=[];
            foreach($request->file as $file){
                $rules = array('file'=>'mimes:pdf,png,jpeg,jpg,gif|max:2000');
                $validator = Validator::make(array('file' => $file), $rules);
                if($validator->fails())
                {
                    return redirect()->back()->withErrors($validator)->withInput();
                }
                $path = 'files/refund_attached';
                $response = Storage::makeDirectory($path);
                $filename = $file->getClientOriginalName();
                $path = Storage::putFileAs($path, $file, $filename);
                $refundfile = RefundFile::create(['path'=>$path]);
                $refund->files()->save($refundfile);
            }
        }*/
        dd(count(request()->file));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
}
