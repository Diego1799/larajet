<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
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
        $doctores = Doctor::all();
        return view("doctor.index")->with("doctores", $doctores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("doctor.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctores = new Doctor();
        $doctores->nombre = $request->get("nombre");
        $doctores->apellido = $request->get("apellido");
        $doctores->direccion = $request->get("direccion");
        $doctores->telefono = $request->get("telefono");
        $doctores->sangre = $request->get("sangre");
        $doctores->exp = $request->get("exp");
        $doctores->fechanac = $request->get("fechanac");

        $doctores->save();

        return redirect("/doctores");

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
        $doctor = Doctor::find($id);
        return view("doctor.edit")->with("doctor", $doctor);
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
        $doctor = Doctor::find($id);
        $doctor->nombre = $request->get("nombre");
        $doctor->apellido = $request->get("apellido");
        $doctor->direccion = $request->get("direccion");
        $doctor->telefono = $request->get("telefono");
        $doctor->sangre = $request->get("sangre");
        $doctor->exp = $request->get("exp");
        $doctor->fechanac = $request->get("fechanac");

        $doctor->save();

        return redirect("/doctores");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect("/doctores");
    }
}
