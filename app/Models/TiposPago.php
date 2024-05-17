<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposPago
 * 
 * @property int $id
 * @property string|null $nombre_tipo_pago
 *
 * @package App\Models
 */
class TiposPago extends Model
{
	protected $table = 'tipos_pago';
	public $timestamps = false;

	protected $fillable = [
		'nombre_tipo_pago'
	];
}
