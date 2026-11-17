<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Hotel
 * 
 * @property int $id
 * @property string|null $nom
 * @property string|null $rue1
 * @property string|null $rue2
 * @property string|null $cp
 * @property string|null $ville
 * @property string|null $telephone
 * @property string|null $descourt
 * @property string|null $deslong
 * @property float|null $prix
 * @property string|null $motpasse
 * 
 * @property Collection|Chambre[] $chambres
 * @property Collection|Equipement[] $equipements
 * @property Collection|Photo[] $photos
 * @property Collection|Reservation[] $reservations
 *
 * @package App\Models
 */
class Hotel extends Model
{
	protected $table = 'hotels';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'prix' => 'float'
	];

	protected $fillable = [
		'nom',
		'rue1',
		'rue2',
		'cp',
		'ville',
		'telephone',
		'descourt',
		'deslong',
		'prix',
		'motpasse'
	];

	public function chambres()
	{
		return $this->hasMany(Chambre::class);
	}

	public function equipements()
	{
		return $this->belongsToMany(Equipement::class);
	}

	public function photos()
	{
		return $this->hasMany(Photo::class);
	}

	public function reservations()
	{
		return $this->hasMany(Reservation::class);
	}
}
