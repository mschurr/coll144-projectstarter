<?php
/**
 * This Controller retrieves and displays information about a single book and its seller from the database.
 *
 * Hints:
 *  - You can test this page by adding a dummy record for a book into your database using Navicat and visiting the URL directly.
 */
class ViewBook extends Controller
{
	/**
	 * This function handles get requests routed to /view-book/{book_id}.
	 * 
	 * The parameter ($book_id) will be automatically set to the {book_id} passed in the URL.
	 * Due to our routing, $book_id is guaranteed to be an integer.
	 */
	public function get($book_id)
	{
		// You need to retrieve the information about the book with the given id. Recall that "$this->db" is a pointer to the database object, although you may prefer to create a model.
						
		// If the query returned no results, the book does not exist --> 404 error.

		// Check that the book has not been sold already. If it has, display a 404 error.
		
		// You now need to retrieve the information for the seller.
		
		// If the query returned no results, the seller does not exist. We should throw a 500 Internal Server error because this error means our database is in an inconsistent state.
		
		/*
		We now need to display the book information and seller information to our user. We should use HTML tables to do this.
		To stay true to our MVC architecture, we will pass the MySQL associative arrays to our view, which can create the HTML tables by iterating through the data.
		So, let's assemble the view (with the data we want to pass to it) and display it to our user.
		*/
		return View::make('BookExchange.Book')->with(array(
			'user' => $this->user,
			'seller_data' => array(),
			'book_data' => array()
		));
	}
}