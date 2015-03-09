<?php

	/**
	 * User model config
	 */

	return array(

		'title' => 'Users',

		'single' => 'user',

		'model' => 'App\User',

		/**
		 * The display columns
		 */
		'columns' => array(
			'id',
			'username' => array(
				'title' => 'Username',
				'sort_field' => 'username',
			),
			'email' => array(
				'title' => 'Email',
				'sort_field' => 'email',
			),
			'first_name' => array(
				'title' => "First Name",
				'relationship' => 'details', //this is the name of the Eloquent relationship method!
				'select' => "(:table).first_name",
			),
			'last_name' => array(
				'title' => "Last Name",
				'relationship' => 'details', //this is the name of the Eloquent relationship method!
				'select' => "(:table).last_name",
			),
			'is_confirmed' => array(
				'title' => "Validated",
				'is_confirmed' => 'username',
			)
		),
		/**
		 * The editable fields
		 */
		'edit_fields' => array(
			'username' => array(
				'title' => 'Username',
				'type' => 'text',
			),
			'email' => array(
				'title' => 'Email',
				'type' => 'text',
			),
			'details' => array(
				'title' => "First Name",
				'type'       => 'relationship',
				'name_field' => 'first_name',
			),
			'is_confirmed' => array(
				'title' => "Is Validated",
				'is_confirmed' => 'username',
				'type' => 'bool'
			)
		),

		/**
		 * The filter set
		 */
		'filters' => array(
			'id',
			'username' => array(
				'title' => 'Username',
			),
			'email' => array(
				'title' => 'Email',
			),
			'first_name' => array(
				'title' => "First Name",
				'relationship' => 'details', //this is the name of the Eloquent relationship method!
				'select' => "(:table).first_name",
			),
			'last_name' => array(
				'title' => "Last Name",
				'relationship' => 'details', //this is the name of the Eloquent relationship method!
				'select' => "(:table).last_name",
			),
			'is_confirmed' => array(
				'title' => "Is Validated",
				'is_confirmed' => 'username',
				'type' => 'bool'
			)
		),

	);