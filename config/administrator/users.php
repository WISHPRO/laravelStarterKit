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
				'select' => '(:table).username',
			),
			'email' => array(
				'title' => 'Email',
				'sort_field' => 'email',
			),
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
			)
		),

	);