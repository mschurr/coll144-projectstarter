<?php
/*
	This file contains all of the Routes for the Book Exchange Application.
	You should not modify this file.
*/

/**
 * Dependencies
 */
import('BookExchange'); // load ~/helpers/BookExchange.php

/**
 * Public Book Exchange Routes
 */

Route::get('/', 'BookExchange.Home');

/**
 * Protected Book Exchange Routes
 */

// Create a filter that only allows logged in users to pass.
$filter = function(Request $request) {
	if($request->session->auth->loggedIn)
		return true;
	return Redirect::to('BookExchange.Login');
};

// Apply the filter to all protected routes.
Route::filter($filter, function() {
	// My Information Page
	Route::any('/my-information', 'BookExchange.MyInformation');
	
	// My Books Page
	Route::any('/my-books', 'BookExchange.MyBooks');
	
	// Add Book Page
	Route::any('/my-books/add', 'BookExchange.AddBook');
	
	// Edit Book Page
	Route::any('/my-books/edit/{book_id}', 'BookExchange.EditBook')
		->where('book_id', '[0-9]+'); // Force {book_id} to be an integer.
	
	// Browse Books Page
	Route::get('/browse', 'BookExchange.Browse');
	
	// View Book Page
	Route::get('/view-book/{book_id}', 'BookExchange.ViewBook')
		->where('book_id', '[0-9]+'); // Force {book_id} to be an integer.
});

/**
 * Authentication Service Routes
 */

Route::any('/log-in' , 'BookExchange.Login'   );
Route::any('/log-out', 'BookExchange.Logout'  );
Route::any('/sign-up', 'BookExchange.Register');

/**
 * Error Page Routes
 */

Route::error(404, function(Request $request, Response $response){
	return View::make('errors.404');
});

Route::error(500, function(Request $request, Response $response){
	return View::make('errors.500');
});