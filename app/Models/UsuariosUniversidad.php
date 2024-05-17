<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuariosUniversidad
 * 
 * @property int $id
 * @property string|null $carnet
 * @property string|null $contrasena
 *
 * @package App\Models
 */
class UsuariosUniversidad extends Model
{
	protected $table = 'usuarios_universidad';
	public $timestamps = false;

	protected $fillable = [
		'carnet',
		'contrasena'
	];
}
