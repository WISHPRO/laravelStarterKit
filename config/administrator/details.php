<?php

	/**
	 * User model config
	 */

	return array(

		'title' => 'Persons',

		'single' => 'person',

		'model' => 'App\Person',

		/**
		 * The display columns
		 */
		'columns' => array(
			'id',
			'first_name' => array(
				'title' => "First Name",
				'relationship' => 'details', //this is the name of the Eloquent relationship method!
				'select' => "(:table).first_name",
			),
			'last_name' => array(
				'title' => "Last Name",
				'relationship' => 'details', //this is the name of the Eloquent relationship method!
				'select' => "(:table).last_name",
			)
		),
		/**
		 * The editable fields
		 */
		'edit_fields' => array(
			'first_name' => array(
				'title' => "First Name",
				'type'       => 'text',
				'name_field' => 'first_name',
			),
			'last_name' => array(
				'title' => "Last Name",
				'type'       => 'text',
				'name_field' => 'last_name',
			)
		),

		/**
		 * The filter set
		 */
		'filters' => array(
			'id',
			'first_name' => array(
				'title' => "First Name",
				'relationship' => 'details', //this is the name of the Eloquent relationship method!
				'select' => "(:table).first_name",
			),
			'last_name' => array(
				'title' => "Last Name",
				'relationship' => 'details', //this is the name of the Eloquent relationship method!
				'select' => "(:table).last_name",
			)
		),

	);