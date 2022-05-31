<?php

namespace App\Http\Controllers;

use App\Models\Herramienta;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class HerramientaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['herramientas']=Herramienta::paginate(5);
        return view('herramienta.index', $datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('herramienta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */     
    public function store(Request $request)  
    {
        // $datosHerramienta = request()->all();

        $campos=[

            'Nombre' => 'required|string|max:100',
            'Tipo' => 'required|string|max:100',
            'Codigo' => 'required|string|max:100',
            'Marca' => 'required|string|max:100',


        ];
        $mensaje=[

            'required' => 'El :attribute es requerido',
            'Codigo.required'=> 'El codigo es requerido'

        ];

      

        $this->validate($request, $campos, $mensaje);


        $datosHerramienta = request()->except('_token');


        Herramienta::insert($datosHerramienta);

         //return response()->json($datosHerramienta);

         return redirect('herramienta')->with('mensaje', 'Herramienta agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function show(Herramienta $herramienta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $herramienta=Herramienta::findOrFail($id);
        return view('herramienta.edit', compact('herramienta') );

        $herramienta=Herramienta::findOrFail($id);
        return view('herramienta.edit', compact('herramienta') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $campos=[


            'Nombre' => 'required|string|max:100',
            'Tipo' => 'required|string|max:100',
            'Marca' => 'required|string|max:100',

        

        ];
        $mensaje=[

            'required' => 'El :attribute es requerido',
          

        ];



        $this->validate($request, $campos, $mensaje);

        //
        $datosHerramienta = request()->except(['_token', '_method'] );


        Herramienta::where('id','=',$id)->update($datosHerramienta);
        $herramienta=Herramienta::findOrFail($id);
        // return view('herramienta.edit', compact('herramienta') );

        return redirect('herramienta')->with('mensaje', 'Herramienta modificada');

        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //

        $herramienta=Herramienta::findOrFail($id);

        Herramienta::destroy($id);
   
        return redirect('herramienta')->with('mensaje', 'Herramienta eliminado');
    }
}
