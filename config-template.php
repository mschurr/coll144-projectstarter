<?php

Config::set(array(
		/**
		 * Database Driver Configuration
		 */
		'database.driver' => 'mysql',
		'database.user' => 'root',
		'database.pass' => 'coll144',
		'database.host' => 'localhost',
		'database.port' => '3306',
		'database.name' => 'bookexchange',

		/**
		 * Development Mode
		 *  You should set this to false for production environments only.
		 */
		'app.development'	=> true,

		/**
		 * Cookie Configuration
		 */
		'cookies.secretKey' => 'replace me!',
		
		/**
		 * Document Configuration
		 */
		'document.titlesuffix' => ' - Book Exchange',

		/**
		 * Authentication Service Driver
		 */
		'auth.driver' => 'cas',
		'auth.cas.host' => 'netid.rice.edu',
		'auth.cas.port' => 443,
		'auth.cas.path' => '/cas',
		'auth.cas.cert' => FILE_ROOT.'/rice-cas.pem',
		
		/**
		 * User Service Driver
		 */
		'users.driver' => 'cas',

		/**
		 * Group Service Driver
		 */
		'groups.driver' => 'db',
));