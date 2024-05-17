<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaccione
 * 
 * @property int $id
 * @property string|null $numero_cuenta
 * @property string|null $tipo_pago
 * @property Carbon|null $fecha_pago
 * @property float|null $monto_total
 *
 * @package App\Models
 */
class Transaccione extends Model
{
	protected $table = 'transacciones';
	public $timestamps = false;

	protected $casts = [
		'fecha_pago' => 'datetime',
		'monto_total' => 'float'
	];

	protected $fillable = [
		'numero_cuenta',
		'tipo_pago',
		'fecha_pago',
		'monto_total'
	];
}
