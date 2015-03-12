<?php namespace App;

	use Zizaco\Entrust\EntrustPermission;

	class Permission extends EntrustPermission
	{
		/**
		 * The database table used by the model.
		 *
		 * @var string
		 */
		protected $table = 'permissions';

		/**
		 * The attributes that should be casted to native types.
		 *
		 * @var array
		 */
		protected $casts = [
			//'key' => 'type',
		];

		/**
		 * The attributes that are mass assignable.
		 *
		 * @var array
		 */
		protected $fillable = ['name','display_name','description'];

	}