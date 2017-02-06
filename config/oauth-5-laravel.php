<?php
use OAuth\Common\Storage\Session;

return [

	//if any problem occurs
	//composer dump-autoload and php artisan clear-compiled
	//use session 







	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => new Session(),


	/**
	 * Consumers
	 */
	'consumers' => [

		//using Steambd Pin
		'Facebook' => [
			'client_id'     => '175254266241657',
			'client_secret' => '5b64df6e8d8addd628566f2028774fcc',
			'scope'         => array('email'),
		],


		'Google' => array(
			'client_id'     => '204699774975-sgsbvg8plfpj4hbtb88u624dsd0f2ubf.apps.googleusercontent.com',
			'client_secret' => 'ateAnhGDlDS5I3fd6OT1VLDP',
			'scope'         => array('userinfo_email','userinfo_profile'),
		),

	]

];