<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['bodegas']=Bodega::paginate(5);
        return view('bodega.index', $datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bodega.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */     
    public function store(Request $request)  
    {
        // $datosBodega = request()->all();

        $campos=[

            'Calle' => 'required|string|max:100',
            'Colonia' => 'required|string|max:100',
            'CP' => 'required|string|max:100',
            'Responsable' => 'required|string|max:100',


        ];
        $mensaje=[

            'required' => 'El :attribute es requerido',
            'Responsable.required'=> 'El responsable es requerido'

        ];

      

        $this->validate($request, $campos, $mensaje);


        $datosBodega = request()->except('_token');


        Bodega::insert($datosBodega);

         //return response()->json($datosBodega);

         return redirect('bodega')->with('mensaje', 'Bodega agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function show(Bodega $bodega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $bodega=Bodega::findOrFail($id);
        return view('bodega.edit', compact('bodega') );

        $bodega=Bodega::findOrFail($id);
        return view('bodega.edit', compact('bodega') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $campos=[


            'Calle' => 'required|string|max:100',
            'Colonia' => 'required|string|max:100',
            'CP' => 'required|string|max:100',

        

        ];
        $mensaje=[

            'required' => 'El :attribute es requerido',
          

        ];



        $this->validate($request, $campos, $mensaje);

        //
        $datosBodega = request()->except(['_token', '_method'] );


        Bodega::where('id','=',$id)->update($datosBodega);
        $bodega=Bodega::findOrFail($id);
        // return view('bodega.edit', compact('bodega') );

        return redirect('bodega')->with('mensaje', 'Bodega modificado');

        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //

        $bodega=Bodega::findOrFail($id);

        Bodega::destroy($id);

   
        return redirect('bodega')->with('mensaje', 'Bodega eliminado');
    }
}
