<?php
/**
 * This controller handles the addition of new books into the database.
 * You may assume that the active user is logged in.
 *
 * If you are clever, you can find a way to use the same View for AddBook and 
 *  EditBook as the views are visually identical.
 *
 * You could also use the same Controller code by making AddBook a subclass of 
 *  EditBook, and by default setting the $book_id parameter to null.
 */
class AddBook extends Controller
{
	/**
	 * GET requests will be routed here.
	 */
	public function get($errors = array())
	{
		// Determine default values for fields.
		$defaults = array();

		// Display the view to the user, with errors and submitted values if applicable.
		return View::make('BookExchange.AddBook')->with(array(
			'user' => $this->user,
			'errors' => $errors,
			'defaults' => $defaults
		));
	}
	
	/**
	 * POST requests will be routed here.
	 */
	public function post()
	{
		// Do not allow a user who hasn't filled out personal information to submit books.

		// Do not allow a user to have more than 100 books on their account at any time.

		// Validate the CSRF token.

		// Validate the user's input. If it contains errors, re-display the form.

		// Store the book in the database.

		// Redirect the user to the list of their books.
		return Redirect::to('BookExchange.MyBooks');
	}
}