<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property int $id
 * @property string|null $nom
 * @property string|null $mail
 * @property string|null $motpasse
 * 
 * @property Collection|Reservation[] $reservations
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $table = 'clients';
	public $timestamps = false;

	protected $fillable = [
		'nom',
		'mail',
		'motpasse'
	];

	public function reservations()
	{
		return $this->hasMany(Reservation::class);
	}
}
