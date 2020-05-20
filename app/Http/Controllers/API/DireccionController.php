<?php

namespace App\Http\Controllers\API;

use App\Direccion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Direccion::orderBy('created_at', 'DESC')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $direccion = $this->save(new Direccion, $request);
        return response()->json($direccion, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Direccion::findOrFail($id);
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
        $direccion = $this->save(Direccion::findOrFail($id), $request);
        return response()->json($direccion, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Direccion::destroy($id);
        return response()->json(null, 204);
    }

    private function save($direccion, $request)
    {
        $request->validate([
            'calle' => 'required',
            'colonia' => 'required',
            'cp' => 'required'
        ]);

        $direccion->fill([
            'calle' => $request->calle,
            'colonia' => $request->colonia,
            'cp' => $request->cp,
            'num_ext' => $request->num_ext,
            'num_int' => $request->num_int,
            'referencia' => $request->referencia
        ])->save();

        return $direccion;
    }
}
