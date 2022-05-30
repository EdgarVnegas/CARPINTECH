<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['citas']=Cita::paginate(5);
        return view('cita.index', $datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cita.create');
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

            'NombreCliente' => 'required|string|max:100',
            'ApellidoPaternoCliente' => 'required|string|max:100',
            'ApellidoMaternoCliente' => 'required|string|max:100',
            'Fecha' => 'required|date',
            'Motivo' => 'required|string|max:100',

        ];
        $mensaje=[

            'required' => 'El :attribute es requerido',
            'Motivo.required'=> 'El motivo es requerido'

        ];

        $this->validate($request, $campos, $mensaje);


        $datosCita = request()->except('_token');



        Cita::insert($datosCita);



         //return response()->json($datosCita);

         return redirect('cita')->with('mensaje', 'Cita agregada con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */



    public function edit($id)
    {
        //
        $cita=Cita::findOrFail($id);
        return view('cita.edit', compact('cita') );

        $cita=Cita::findOrFail($id);
        return view('cita.edit', compact('cita') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $campos=[

            'NombreCliente' => 'required|string|max:100',
            'ApellidoPaternoCliente' => 'required|string|max:100',
            'ApellidoMaternoCliente' => 'required|string|max:100',
            'Fecha' => 'required|date',
            'Motivo' => 'required|string|max:100',
        

        ];
        $mensaje=[

            'required' => 'El :attribute es requerido',
          

        ];



        $this->validate($request, $campos, $mensaje);

        //
        $datosCita = request()->except(['_token', '_method'] );



        Cita::where('id','=',$id)->update($datosCita);
        $cita=Cita::findOrFail($id);
        // return view('cita.edit', compact('cita') );

        return redirect('cita')->with('mensaje', 'Cita modificada');

        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //

        $cita=Cita::findOrFail($id);

        Cita::destroy($id);

        return redirect('cita')->with('mensaje', 'Cita eliminada');
    }
}
