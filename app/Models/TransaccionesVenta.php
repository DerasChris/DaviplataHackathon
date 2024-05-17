<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TransaccionesVenta
 * 
 * @property int $id
 * @property int|null $numero_cuenta
 * @property int|null $id_emprendimiento
 * @property int|null $id_producto
 * @property int|null $cantidad_vendida
 * @property Carbon|null $fecha_venta
 * @property float|null $monto_total
 *
 * @package App\Models
 */
class TransaccionesVenta extends Model
{
	protected $table = 'transacciones_ventas';
	public $timestamps = false;

	protected $casts = [
		'numero_cuenta' => 'int',
		'id_emprendimiento' => 'int',
		'id_producto' => 'int',
		'cantidad_vendida' => 'int',
		'fecha_venta' => 'datetime',
		'monto_total' => 'float'
	];

	protected $fillable = [
		'numero_cuenta',
		'id_emprendimiento',
		'id_producto',
		'cantidad_vendida',
		'fecha_venta',
		'monto_total'
	];
}
