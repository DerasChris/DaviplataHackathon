<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $id
 * @property int|null $id_emprendimiento
 * @property string|null $nombre_producto
 * @property int|null $cantidad_stock
 * @property float|null $precio
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'productos';
	public $timestamps = false;

	protected $casts = [
		'id_emprendimiento' => 'int',
		'cantidad_stock' => 'int',
		'precio' => 'float'
	];

	protected $fillable = [
		'id_emprendimiento',
		'nombre_producto',
		'cantidad_stock',
		'precio'
	];
}
