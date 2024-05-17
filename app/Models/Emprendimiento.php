<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Emprendimiento
 * 
 * @property int $id
 * @property int|null $numero_cuenta
 * @property string|null $nombre_emp
 *
 * @package App\Models
 */
class Emprendimiento extends Model
{
	protected $table = 'emprendimientos';
	public $timestamps = false;

	protected $casts = [
		'numero_cuenta' => 'int'
	];

	protected $fillable = [
		'numero_cuenta',
		'nombre_emp'
	];
}
