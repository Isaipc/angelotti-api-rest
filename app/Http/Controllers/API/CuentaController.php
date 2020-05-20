<?php

namespace App\Http\Controllers\API;

use App\Cuenta;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cuenta::orderBy('created_at', 'DESC')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuenta = $this->save(new Cuenta, $request);
        return response()->json($cuenta, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Cuenta::findOrFail($id);
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
        $cuenta = $this->save(Cuenta::findOrFail($id), $request);
        return response()->json($cuenta, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cuenta::destroy($id);
        return response()->json(null, 204);
    }

    private function save($cuenta, $request)
    {
        $request->validate([
            'correo' => 'required',
            'password' => 'required',
            'nombre' => 'required',
            'apellido' => 'required'
        ]);

        $cuenta->fill([
            'correo' => $request->correo,
            'password' => $request->password,
            'nombre' => $request->nombre,
            'apellido' =>$request->apellido
        ])->save();

        return $cuenta;
    }
}
