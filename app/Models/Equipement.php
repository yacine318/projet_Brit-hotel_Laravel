<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipement
 * 
 * @property int $id
 * @property string|null $libelle
 * @property string|null $logo
 * 
 * @property Collection|Hotel[] $hotels
 *
 * @package App\Models
 */
class Equipement extends Model
{
	protected $table = 'equipements';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'libelle',
		'logo'
	];

	public function hotels()
	{
		return $this->belongsToMany(Hotel::class);
	}
}
