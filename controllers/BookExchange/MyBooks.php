<?php
/**
 * This Controller retrieves a list of books attached to the user's account and displays them.
 *  Provides a link to create a new book.
 *  Provides a method of moving books in between listed and sold, and of deleting sold books.
 * 
 * Hints:
 *   - You can determine which submit button a user clicks by giving the submit button a name attribute and comparing the value.
 */
class MyBooks extends Controller
{
	public function get()
	{
		// Do not allow users who haven't filled out personal information to submit books.

		// Determine whether or not the user has filled out their personal information.

		// Determine whether or not the user's account has reached capacity (>=100 books).

		// Retrieve all books that are listed for sale for this user.

		// Retrieve all books that are not listed for sale for this user.

		// Present the view.
		return View::make('BookExchange.MyBooks')->with(array(
			'user' => $this->user,
			'personal_info' => false,
			'full' => false,
			'books' => array(),
			'sold_books' => array()
		));
	}
	
	public function post()
	{
		// Process the request to mark a book as available, unavailable, or delete a book.
		// You should verify that the book in question BELONGS to the user requesting to change it.
		// You should verify that the CSRF token is correct.

		// Render the updated list.
		return $this->get();
	}
}