<?php

namespace App\Http\Controllers\API;

use App\Platillo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlatilloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Platillo::orderBy('created_at', 'DESC')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $platillo = $this->save(new Platillo, $request);
        return response()->json($platillo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Platillo::findOrFail($id);
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
        $platillo = $this->save(Platillo::findOrFail($id), $request);
        return response()->json($platillo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Platillo::destroy($id);
        return response()->json(null, 204);
    }

    private function save($platillo, $request)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'imagen' => 'required',
            'platillo_id' => 'required'
        ]);

        $platillo->fill([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'imagen' => $request->imagen,
            'platillo_id' => $request->platillo_id
        ])->save();
        return $platillo;
    }
}
