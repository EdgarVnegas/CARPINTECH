<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['proveedors']=Proveedor::paginate(5);
        return view('proveedor.index', $datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */     
    public function store(Request $request)  
    {
        // $datosProveedor = request()->all();

        $campos=[

            'Nombre' => 'required|string|max:100',
            'Calle' => 'required|string|max:100',
            'Colonia' => 'required|string|max:100',
            'CP' => 'required|string|max:100',
            'Responsable' => 'required|string|max:100',
            'Telefono' => 'required|string|max:100',


        ];
        $mensaje=[

            'required' => 'El :attribute es requerido',
            'Responsable.required'=> 'El responsable es requerido'

        ];

      

        $this->validate($request, $campos, $mensaje);


        $datosProveedor = request()->except('_token');


        Proveedor::insert($datosProveedor);

         //return response()->json($datosProveedor);

         return redirect('proveedor')->with('mensaje', 'Proveedor agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $proveedor=Proveedor::findOrFail($id);
        return view('proveedor.edit', compact('proveedor') );

        $proveedor=Proveedor::findOrFail($id);
        return view('proveedor.edit', compact('proveedor') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $campos=[



            'Nombre' => 'required|string|max:100',
            'Calle' => 'required|string|max:100',
            'Colonia' => 'required|string|max:100',
            'Telefono' => 'required|string|max:100',

        

        ];
        $mensaje=[

            'required' => 'El :attribute es requerido',
          

        ];



        $this->validate($request, $campos, $mensaje);

        //
        $datosProveedor = request()->except(['_token', '_method'] );


        Proveedor::where('id','=',$id)->update($datosProveedor);
        $proveedor=Proveedor::findOrFail($id);
        // return view('proveedor.edit', compact('proveedor') );

        return redirect('proveedor')->with('mensaje', 'Proveedor modificado');

        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //

        $proveedor=Proveedor::findOrFail($id);

        Proveedor::destroy($id);

   
        return redirect('proveedor')->with('mensaje', 'Proveedor eliminado');
    }
}
