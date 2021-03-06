<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes as SoftDeletes;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\Role;
use Sofa\Revisionable\Laravel\RevisionableTrait; // trait
use Sofa\Revisionable\Revisionable; // interface

class User extends Model implements AuthenticatableContract, CanResetPasswordContract, Revisionable {

	use Authenticatable, CanResetPassword, SoftDeletes, EntrustUserTrait, RevisionableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['person_id','email', 'username', 'confirmation_code', 'is_confirmed', 'display_name', 'notify', 'last_login', 'is_online', 'is_active', 'last_active_time', 'password'];


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
	protected $dates = ['deleted_at','last_active_time','last_login'];

	/**
	 * The attributes that should be casted to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'person_id' => 'integer',
		'is_confirmed' => 'boolean',
		'is_online' => 'boolean',
		'is_active' => 'boolean',
	];

	protected $nonRevisionable = [
		'id',
		'password',
		'confirmation_code',
		'remember_token',
		'deleted_at',
		'created_at',
		'updated_at',
	];

	/**
	 * The role is attached to user
	 *
	 * @param $role
	 */
	public function setRole($role){
		$role = Role::where('name', $role)->firstOrFail();
		$this->attachRole($role);
	}

	public function details(){
		return $this->belongsTo('App\Person','person_id');
	}
}
