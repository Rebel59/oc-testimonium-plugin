<?php

return [
	'plugin' => [
		'name' => 'Prijzen',
		'description' => 'Een simpele tabel manager voor OctoberCMS'
	],
	'table' => [
		'pricetable' => [
			'name' => 'Naam',
			'description' => 'Beschrijving',
			'last_edited' => 'Laatst aangepast',
			'currency' => 'Valuta',
			'price_description' => 'Prijs Beschrijving'
		],
		'categories' => [
			'name' => 'Naam'
		],
		'price' => [
			'price' => 'Prijs',
			'description' => 'Beschrijving'
		],
		'no_records' => 'Geen items gevonden'

	],
	'navigation' => [
		'title' => [
			'price' => 'Prijs',
			'category' => 'Categorie',
			'currency' => 'Valuta'
		],
		'pageTitle' => [
			'price' => 'Prijs overzicht',
			'category' => 'Categorie overzicht',
			'currency' => 'Valuta overzicht'
		]
	],
	'form' => [
		'add'	=> 'Toevoegen',
		'submit' => '',
		'create' => 'Aanmaken',
		'create_and_close' => 'Aanmaken en sluiten',
		'cancel' => 'Annuleren',
		'delete' => 'Verwijderen',
		'confirmation' => 'Weet je zeker dat je dit wilt doen?',
		'update' => 'Update',
		'update_and_close' => 'Bijwerken en sluiten',
		'updating_table' => 'Tabel bijwerken...'
	],
	'message' => [
		'price' => [
			'create' => 'De tabel is aangemaakt!',
			'update' => 'De tabel is bijgewerkt!',
			'delete' => 'De tabel is verwijdert!'
		],
		'category' => [
			'create' => 'De categorie is aangemaakt!',
			'update' => 'De categorie is bijgewerkt!',
			'delete' => 'De categorie is verwijdert!'
		],
		'currency' => [
			'create' => 'De valuta is aangemaakt!',
			'update' => 'De valuta is bijgewerkt!',
			'delete' => 'De valuta is verwijdert!'
		]
	]
]

?>