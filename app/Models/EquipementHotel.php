<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EquipementHotel
 * 
 * @property int $hotel_id
 * @property int $equipement_id
 * 
 * @property Equipement $equipement
 * @property Hotel $hotel
 *
 * @package App\Models
 */
class EquipementHotel extends Model
{
	protected $table = 'equipement_hotel';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'equipement_id' => 'int'
	];

	public function equipement()
	{
		return $this->belongsTo(Equipement::class);
	}

	public function hotel()
	{
		return $this->belongsTo(Hotel::class);
	}
}
