<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ArancelesVario
 * 
 * @property int $id
 * @property string|null $nombre_arancel
 * @property float|null $costo
 *
 * @package App\Models
 */
class ArancelesVario extends Model
{
	protected $table = 'aranceles_varios';
	public $timestamps = false;

	protected $casts = [
		'costo' => 'float'
	];

	protected $fillable = [
		'nombre_arancel',
		'costo'
	];
}
