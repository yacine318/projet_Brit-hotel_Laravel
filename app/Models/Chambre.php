<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Chambre
 * 
 * @property int $id
 * @property string $numero
 * @property int $hotel_id
 * 
 * @property Hotel $hotel
 * @property Collection|Reservation[] $reservations
 *
 * @package App\Models
 */
class Chambre extends Model
{
	protected $table = 'chambres';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int'
	];

	protected $fillable = [
		'numero',
		'hotel_id'
	];

	public function hotel()
	{
		return $this->belongsTo(Hotel::class);
	}

	public function reservations()
	{
		return $this->belongsToMany(Reservation::class);
	}
}
