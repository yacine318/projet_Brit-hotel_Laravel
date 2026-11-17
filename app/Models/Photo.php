<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Photo
 * 
 * @property int $id
 * @property string|null $nomfichier
 * @property int $hotel_id
 * 
 * @property Hotel $hotel
 *
 * @package App\Models
 */
class Photo extends Model
{
	protected $table = 'photos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'hotel_id' => 'int'
	];

	protected $fillable = [
		'nomfichier',
		'hotel_id'
	];

	public function hotel()
	{
		return $this->belongsTo(Hotel::class);
	}
}
