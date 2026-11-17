<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservation
 * 
 * @property int $id
 * @property Carbon|null $datedebut
 * @property Carbon|null $datefin
 * @property int $hotel_id
 * @property int $client_id
 * 
 * @property Client $client
 * @property Hotel $hotel
 * @property Collection|Chambre[] $chambres
 *
 * @package App\Models
 */
class Reservation extends Model
{
	protected $table = 'reservations';
	public $timestamps = false;

	protected $casts = [
		'datedebut' => 'datetime',
		'datefin' => 'datetime',
		'hotel_id' => 'int',
		'client_id' => 'int'
	];

	protected $fillable = [
		'datedebut',
		'datefin',
		'hotel_id',
		'client_id'
	];

	public function client()
	{
		return $this->belongsTo(Client::class);
	}

	public function hotel()
	{
		return $this->belongsTo(Hotel::class);
	}

	public function chambres()
	{
		return $this->belongsToMany(Chambre::class);
	}
}
