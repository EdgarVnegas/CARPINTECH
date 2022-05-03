<?php
/*
	CARPINTECH 2691 Equipo 3
*/ ?>
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoVendido extends Model
{
    protected $table = "productos_vendidos";
    protected $fillable = ["id_venta", "descripcion", "codigo_barras", "precio", "cantidad"];
}
