<?php
/**
 * This Controller displays a list of all books in the database.
 *  The list should be paginated, with controls displayed.
 *  The list should be searchable.
 *  The list should (ideally) be sortable by clicking column names.
 *
 * You may assume that the active user is logged in.
 *
 * Hints:
 *  - Use GET parameters for the search term, page number, and sorting.
 *  - The MySQL commands ORDER BY, LIMIT, and LIKE will be useful to you.
 *  - Remember you can count all records matching a query using "SELECT COUNT(*)".
 *  - Review the slides on pagination.
 */
class Browse extends Controller
{
	const PER_PAGE = 50;

	public function get()
	{
		// Fetch the total number of rows matching the search filters.

		// Determine what page the user is on, and total number of pages.
		// Be smart: reject negative page numbers, or page numbers greater than total.

		// Fetch the rows for the current page.

		// Present the view to the user.
		return View::make('BookExchange.Browse')->with(array(
			'user' => $this->user,
			'query' => null,
			'books' => array(),
			'current_page' => 1,
			'total_pages' => 1
		));
	}
}