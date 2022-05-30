<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['ventas']=Venta::paginate(5);
        return view('venta.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('venta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[

            'CodigoVenta' => 'required|string|max:100',
            'ProductosVendidos' => 'required|string|max:100',
            'TotalVenta' => 'required|string|max:100',
            'Fecha' => 'required|string|max:100',


        ];
        $mensaje=[

            'required' => 'El :attribute es requerido',
            'CodigoVenta.required'=> 'El codigo de venta es requerido'

        ];

        $this->validate($request, $campos, $mensaje);


        $datosVenta = request()->except('_token');



        Venta::insert($datosVenta);



         //return response()->json($datosVenta);

         return redirect('venta')->with('mensaje', 'Venta agregada con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $venta=Venta::findOrFail($id);
        return view('venta.edit', compact('venta') );

        $venta=Venta::findOrFail($id);
        return view('venta.edit', compact('venta') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[

            'CodigoVenta' => 'required|string|max:100',
            'ProductosVendidos' => 'required|string|max:100',
            'TotalVenta' => 'required|string|max:100',
            'Fecha' => 'required|string|max:100',

        

        ];
        $mensaje=[

            'required' => 'El :attribute es requerido',
          

        ];



        $this->validate($request, $campos, $mensaje);

        //
        $datosVenta = request()->except(['_token', '_method'] );



        Venta::where('id','=',$id)->update($datosVenta);
        $venta=Venta::findOrFail($id);
        // return view('venta.edit', compact('venta') );

        return redirect('venta')->with('mensaje', 'Venta modificada');

        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $venta=Venta::findOrFail($id);

        Venta::destroy($id);

        return redirect('venta')->with('mensaje', 'Venta eliminada');
    }
}

