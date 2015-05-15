<?php

return [
	'plugin' => [
		'name' => 'PriceTables',
		'description' => 'The simple price table solution for OctoberCMS'
	],
	'table' => [
		'pricetable' => [
			'name' => 'Table Name',
			'description' => 'Table Description',
			'last_edited' => 'Last Edited',
			'currency' => 'Currency',
			'price_description' => 'Price Description'

		],
		'categories' => [
			'name' => 'Category Name'
		],
		'price' => [
			'price' => 'Price',
			'description' => 'Description'
		],
		'no_records' => 'No records found'

	],
	'navigation' => [
		'title' => [
			'price' => 'Price',
			'category' => 'Category',
			'currency' => 'Currency'
		],
		'pageTitle' => [
			'price' => 'Price Overview',
			'category' => 'Category Overview',
			'currency' => 'Currency Overview'
		]
	],
	'form' => [
		'add'	=> 'Add',
		'submit' => '',
		'create' => 'Create',
		'create_and_close' => 'Create and Close',
		'cancel' => 'Cancel',
		'delete' => 'Delete',
		'confirmation' => 'Are you sure you want to do this?',
		'update' => 'Update',
		'update_and_close' => 'Update and Close',
		'updating_table' => 'Updating Table...'
	],
	'message' => [
		'price' => [
			'create' => 'The Pricetable has been created!',
			'update' => 'The Pricetable has been updated!',
			'delete' => 'The Pricetable has been deleted!'
		],
		'category' => [
			'create' => 'The Category has been created!',
			'update' => 'The Category has been updated!',
			'delete' => 'The Category has been deleted!'
		],
		'currency' => [
			'create' => 'The Currency has been created!',
			'update' => 'The Currency has been updated!',
			'delete' => 'The Currency has been deleted!'
		]
	]
]

?>