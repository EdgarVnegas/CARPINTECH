<?php

namespace App\Http\Controllers;

use App\Models\Transporte;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class TransporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['transportes']=Transporte::paginate(5);
        return view('transporte.index', $datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('transporte.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */     
    public function store(Request $request)  
    {
        // $datosTransporte = request()->all();

        $campos=[

            'Tipo' => 'required|string|max:100',
            'Marca' => 'required|string|max:100',
            'Placa' => 'required|string|max:100',
            'NIV' => 'required|string|max:100',


        ];
        $mensaje=[

            'required' => 'El :attribute es requerido',
            'Placa.required'=> 'La placa es requerida'

        ];

      

        $this->validate($request, $campos, $mensaje);


        $datosTransporte = request()->except('_token');


        Transporte::insert($datosTransporte);

         //return response()->json($datosTransporte);

         return redirect('transporte')->with('mensaje', 'Transporte agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transporte  $transporte
     * @return \Illuminate\Http\Response
     */
    public function show(Transporte $transporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transporte  $transporte
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $transporte=Transporte::findOrFail($id);
        return view('transporte.edit', compact('transporte') );

        $transporte=Transporte::findOrFail($id);
        return view('transporte.edit', compact('transporte') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transporte  $transporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $campos=[


            'Tipo' => 'required|string|max:100',
            'Marca' => 'required|string|max:100',
            'NIV' => 'required|string|max:100',

        

        ];
        $mensaje=[

            'required' => 'El :attribute es requerido',
          

        ];



        $this->validate($request, $campos, $mensaje);

        //
        $datosTransporte = request()->except(['_token', '_method'] );


        Transporte::where('id','=',$id)->update($datosTransporte);
        $transporte=Transporte::findOrFail($id);
        // return view('transporte.edit', compact('transporte') );

        return redirect('transporte')->with('mensaje', 'Transporte modificado');

        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transporte  $transporte
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //

        $transporte=Transporte::findOrFail($id);

        Transporte::destroy($id);

   
        return redirect('transporte')->with('mensaje', 'Transporte eliminado');
    }
}
