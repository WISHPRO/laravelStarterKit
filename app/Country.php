<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'countries';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['capital', 'citizenship', 'country_code', 'currency', 'currency_code', 'currency_sub_unit', 'full_name', 'iso_3166_2', 'iso_3166_3', 'name', 'region_code', 'sub_region_code', 'eea', 'calling_code'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 * The attributes that should be casted to Carbon Date types.
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at'];

	/**
	 * The attributes that should be casted to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		//'key' => 'type',
	];

	public function persons(){
		return $this->hasMany('App\Person','country_id');
	}

}
