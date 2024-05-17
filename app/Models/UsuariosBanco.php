<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuariosBanco
 * 
 * @property string $numero_cuenta
 * @property string|null $nombre
 * @property string|null $apellido
 * @property string|null $correo
 * @property string|null $contrasena
 *
 * @package App\Models
 */
class UsuariosBanco extends Model
{
	protected $table = 'usuarios_banco';
	protected $primaryKey = 'numero_cuenta';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'apellido',
		'correo',
		'contrasena'
	];
}
