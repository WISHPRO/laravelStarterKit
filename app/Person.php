<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'persons';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['country_id','first_name', 'last_name', 'dob', 'bio', 'avatar', 'city', 'state', 'country', 'postal_code', 'gender', 'primary_email', 'secondary_email', 'mobile_number', 'telephone_number'];

	protected $dates = ['deleted_at'];

	protected $nonRevisionable = [
		'id',
		'deleted_at',
		'created_at',
		'updated_at',
	];

	public function user()
	{
		return $this->hasOne('App\User');
	}
	public function country()
	{
		return $this->belongsTo('App\Country');
	}

}
