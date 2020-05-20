<?php

namespace App\Http\Controllers\API;

use App\Pedido;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pedido::orderBy('created_at', 'DESC')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedido = $this->save(new Pedido, $request);
        return response()->json($pedido, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Pedido::findOrFail($id);
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
        $pedido = $this->save(Pedido::findOrFail($id), $request);
        return response()->json($pedido, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pedido::destroy($id);
        return response()->json(null, 204);
    }

    private function save($pedido, $request)
    {
        $request->validate([
            'platillo_id' => 'required',
            'direccion_id' => 'required',
            'cuenta_id' => 'required',
            'total'  => 'required'
        ]);

        $pedido->fill([
            'platillo_id' => $request->platillo_id,
            'direccion_id' => $request->direccion_id,
            'cuenta_id' => $request->cuenta_id,
            'total'  => $request->total
        ])->save();
    }
}
