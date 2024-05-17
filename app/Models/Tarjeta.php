<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarjeta
 * 
 * @property int $id
 * @property int|null $numero_cuenta
 * @property string|null $tipo_tarjeta
 * @property string|null $numero_tarjeta
 * @property Carbon|null $fecha_vencimiento
 * @property int|null $ccv
 * @property float|null $saldo_disponible
 *
 * @package App\Models
 */
class Tarjeta extends Model
{
	protected $table = 'tarjetas';
	public $timestamps = false;

	protected $casts = [
		'numero_cuenta' => 'int',
		'fecha_vencimiento' => 'datetime',
		'ccv' => 'int',
		'saldo_disponible' => 'float'
	];

	protected $fillable = [
		'numero_cuenta',
		'tipo_tarjeta',
		'numero_tarjeta',
		'fecha_vencimiento',
		'ccv',
		'saldo_disponible'
	];
}
