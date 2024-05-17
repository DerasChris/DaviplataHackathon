<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TicketsParqueo
 * 
 * @property int $id
 * @property int|null $numero_cuenta
 * @property Carbon|null $fecha_hora_ingreso
 * @property Carbon|null $fecha_hora_salida
 * @property float|null $monto
 *
 * @package App\Models
 */
class TicketsParqueo extends Model
{
	protected $table = 'tickets_parqueo';
	public $timestamps = false;

	protected $casts = [
		'numero_cuenta' => 'int',
		'fecha_hora_ingreso' => 'datetime',
		'fecha_hora_salida' => 'datetime',
		'monto' => 'float'
	];

	protected $fillable = [
		'numero_cuenta',
		'fecha_hora_ingreso',
		'fecha_hora_salida',
		'monto'
	];
}
