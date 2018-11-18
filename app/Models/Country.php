<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Nov 2018 15:23:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Country
 * 
 * @property int $id
 * @property string $sortname
 * @property string $name
 * @property int $status
 * 
 * @property \Illuminate\Database\Eloquent\Collection $states
 *
 * @package App\Models
 */
class Country extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'sortname',
		'name',
		'status'
	];

	public function states()
	{
		return $this->hasMany(\App\Models\State::class);
	}
}
