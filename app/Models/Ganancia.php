<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ganancia
 * 
 * @property int $id
 * @property int|null $id_emprendimiento
 * @property Carbon|null $fecha_mes
 * @property float|null $monto_total
 *
 * @package App\Models
 */
class Ganancia extends Model
{
	protected $table = 'ganancias';
	public $timestamps = false;

	protected $casts = [
		'id_emprendimiento' => 'int',
		'fecha_mes' => 'datetime',
		'monto_total' => 'float'
	];

	protected $fillable = [
		'id_emprendimiento',
		'fecha_mes',
		'monto_total'
	];
}
