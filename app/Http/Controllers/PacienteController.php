<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;


class PacienteController extends Controller
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
        $pacientes = Paciente::all();
        return view("paciente.index")->with("pacientes", $pacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("paciente.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pacientes = new Paciente();
        $pacientes->nombre = $request->get("nombre");
        $pacientes->apellido = $request->get("apellido");
        $pacientes->eps = $request->get("eps");
        $pacientes->direccion = $request->get("direccion");
        $pacientes->nombreacom = $request->get("nombreacom");
        $pacientes->telefonoacom = $request->get("telefonoacom");
        $pacientes->antecedentes = $request->get("antecedentes");
        $pacientes->motivo = $request->get("motivo");
        $pacientes->diagnostico = $request->get("diagnostico");

        $pacientes->save();

        return redirect("/pacientes");
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
        $paciente = Paciente::find($id);
        return view("paciente.edit")->with("paciente", $paciente);
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
        $paciente = Paciente::find($id);
        $paciente->nombre = $request->get("nombre");
        $paciente->apellido = $request->get("apellido");
        $paciente->eps = $request->get("eps");
        $paciente->direccion = $request->get("direccion");
        $paciente->nombreacom = $request->get("nombreacom");
        $paciente->telefonoacom = $request->get("telefonoacom");
        $paciente->antecedentes = $request->get("antecedentes");
        $paciente->motivo = $request->get("motivo");
        $paciente->diagnostico = $request->get("diagnostico");

        $paciente->save();

        return redirect("/pacientes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = Paciente::find($id);
        $paciente->delete();
        return redirect("/pacientes");
    }
}
