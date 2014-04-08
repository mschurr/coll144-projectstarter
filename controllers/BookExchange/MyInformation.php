<?php
/**
 * This Controller allows a user to insert, review, or modify their contact information.
 * Should function identically to the equivalent page on the Duncan Book Exchange.
 */
class MyInformation extends Controller
{
	/**
	 * Processes GET Requests.
	 */
	public function get()
	{
		return $this->showForm();
	}
	
	/**
	 * This will show the form. We can call this from our GET and POST method for code re-usability.
	 */
	public function showForm($errors=array(), $success=false)
	{
		// Query the database for existing information.

		// Determine default values (either from database, from previous request, or empty).

		// Present the view.
		return View::make('BookExchange.MyInformation')->with(array(
			'user' => $this->user,
			'defaults' => array(),
			'errors' => array(),
			'success' => false,
			'colleges' => BookExchange::$colleges,
			'preferences' => BookExchange::$contact_preferences
		));
	}
	
	/**
	 * Processes POST Requests. This means the user has submitted the form.
	 */
	public function post()
	{
		// Check the CSRF token.
		
		// We need to validate the form and make sure all of their inputs conform to our application's requirements.
		// We don't need to bother checking if an input is set or not; if it is not, an exception will be thrown and an error will be displayed.

		// If we have errors, we should show them the form again (with the error messages).
		
		// If we don't have errors, we need to update the database, but a record may or may not already exist.
		// It might be convienent to use a REPLACE INTO query.

		// Now, we can just show them the form again with a success message and the new information as the default.
	}
}