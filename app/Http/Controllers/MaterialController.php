<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['materials']=Material::paginate(5);
        return view('material.index', $datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */     
    public function store(Request $request)  
    {
        // $datosMaterial = request()->all();

        $campos=[

            'Nombre' => 'required|string|max:100',
            'Tipo' => 'required|string|max:100',
            'Codigo' => 'required|string|max:100',


        ];
        $mensaje=[

            'required' => 'El :attribute es requerido',
            'Codigo.required'=> 'El codigo es requerido'

        ];

      

        $this->validate($request, $campos, $mensaje);


        $datosMaterial = request()->except('_token');


        Material::insert($datosMaterial);

         //return response()->json($datosMaterial);

         return redirect('material')->with('mensaje', 'Material agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $material=Material::findOrFail($id);
        return view('material.edit', compact('material') );

        $material=Material::findOrFail($id);
        return view('material.edit', compact('material') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $campos=[

            'Nombre' => 'required|string|max:100',
            'Tipo' => 'required|string|max:100',


        

        ];
        $mensaje=[

            'required' => 'El :attribute es requerido',
          

        ];



        $this->validate($request, $campos, $mensaje);

        //
        $datosMaterial = request()->except(['_token', '_method'] );


        Material::where('id','=',$id)->update($datosMaterial);
        $material=Material::findOrFail($id);
        // return view('material.edit', compact('material') );

        return redirect('material')->with('mensaje', 'Material modificado');

        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //

        $material=Material::findOrFail($id);

        Material::destroy($id);
   
        return redirect('material')->with('mensaje', 'Material eliminado');
    }
}
