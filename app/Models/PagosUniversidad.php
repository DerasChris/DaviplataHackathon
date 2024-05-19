<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PagosUniversidad
 * 
 * @property int $id
 * @property string|null $numero_cuenta
 * @property string|null $carnet_usuario_universidad
 * @property float|null $monto
 * @property Carbon|null $fecha_pago
 * @property Carbon|null $fecha_vencimiento
 * @property string|null $estado_pago
 * @property int|null $id_tipo_pago
 * @property int|null $veces_pagado
 *
 * @package App\Models
 */
class PagosUniversidad extends Model
{
	protected $table = 'pagos_universidad';
	public $timestamps = false;

	protected $casts = [
		'monto' => 'float',
		'fecha_pago' => 'datetime',
		'fecha_vencimiento' => 'datetime',
		'id_tipo_pago' => 'int',
		'veces_pagado' => 'int'
	];

	protected $fillable = [
        'numero_cuenta',
        'carnet_usuario_universidad',
        'monto',
        'fecha_pago',
        'fecha_vencimiento',
        'estado_pago',
        'id_tipo_pago',
        'veces_pagado'
    ];
}
