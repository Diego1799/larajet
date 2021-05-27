<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;

class HospitalController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitales = Hospital::all();
        return view("hospital.index")->with("hospitales", $hospitales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("hospital.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cantidad = Hospital::all()->count();
        if ($cantidad < 1) {
            $hospitales = new Hospital();
            $hospitales->nombre = $request->get("nombre");
            $hospitales->direccion = $request->get("direccion");
            $hospitales->telefono = $request->get("telefono");
            $hospitales->ciudad = $request->get("ciudad");
            $hospitales->save();
            return redirect('/hospitales');
        } else {
            return redirect('/hospitales');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospital = Hospital::find($id);
        return view("hospital.edit")->with("hospital", $hospital);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hospital = Hospital::find($id);
        $hospital->nombre = $request->get("nombre");
        $hospital->direccion = $request->get("direccion");
        $hospital->telefono = $request->get("telefono");
        $hospital->ciudad = $request->get("ciudad");

        $hospital->save();

        return redirect("/hospitales");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hospital = Hospital::find($id);
        $hospital->delete();
        return redirect("/hospitales");
    }
}
