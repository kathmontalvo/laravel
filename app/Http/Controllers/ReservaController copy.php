<?php

namespace App\Http\Controllers;
use App\{ReservaQuestion, Reservas};
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // querys select | where => get()

        $reservas = Reservas::orderby('id','DESC')->get();
        
        return view('welcome',compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // return $request->all();
            $r = new ReservaQuestion();
            // $r->id_reserva = $request->reserva;
            $r->dni = $request->dni;
            $r->dni_number = $request->number_dni;
            $r->salud = $request->salud;
            $r->salud_respuesta = $request->respuesta_salud;
            $r->alimentacion_respuesta = $request->alimentacion;
            $r->calzado_respuesta = $request->calzado;
            $r->transporte_respuesta = $request->transporte;
            $r->save();
            return response()->json([
                'message' => 'Success',
                'status' => 200
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'fail',
                'error' => $e->getMessage(),
                'line' => $e->getLine()
                
            ]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
