<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ChambreReservation
 * 
 * @property int $reservation_id
 * @property int $chambre_id
 * 
 * @property Chambre $chambre
 * @property Reservation $reservation
 *
 * @package App\Models
 */
class ChambreReservation extends Model
{
	protected $table = 'chambre_reservation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'chambre_id' => 'int'
	];

	public function chambre()
	{
		return $this->belongsTo(Chambre::class);
	}

	public function reservation()
	{
		return $this->belongsTo(Reservation::class);
	}
}
