<?php
/**
 * This controller handles the editing of existing books in the database.
 * You may assume that the active user is logged in.
 */
class EditBook extends Controller
{
	public function get($book_id, $errors = array())
	{
		// Verify that the book in question actually exists (refers to valid row in database).

		// Verify that the book in question actually belongs to the user requesting to edit it.

		// Determine default values for fields (may be from database or previous form submission if validation failed).
		$defaults = array();

		// Display the view to the user, with errors and submitted values if applicable.
		return View::make('BookExchange.EditBook')->with(array(
			'user' => $this->user,
			'errors' => $errors,
			'defaults' => $defaults
		));
	}
	
	public function post($book_id)
	{
		// Verify that the book in question actually exists (refers to valid row in database).

		// Verify that the book in question actually belongs to the user requesting to edit it.

		// Validate the CSRF token.

		// Validate the user's input. If it contains errors, re-display the form.

		// Store the book in the database (REPLACE INTO might be useful here).

		// Redirect the user to the list of their books.
		return Redirect::to('BookExchange.MyBooks');
	}
}