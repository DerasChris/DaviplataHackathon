<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Seminario
 * 
 * @property int $id
 * @property string|null $codigo_seminario
 * @property string|null $nombre_seminario
 * @property float|null $costo
 *
 * @package App\Models
 */
class Seminario extends Model
{
	protected $table = 'seminarios';
	public $timestamps = false;

	protected $casts = [
		'costo' => 'float'
	];

	protected $fillable = [
		'codigo_seminario',
		'nombre_seminario',
		'costo'
	];
}
