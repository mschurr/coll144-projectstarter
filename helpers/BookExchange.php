<?php
/**
 * This class contains constants that will be re-used throughout the application. 
 * As you develop your app, you may wish to extend these constants or add your own.
 *
 * Example Usage:
 *   BookExchange::$colleges - map of all colleges (id -> name)
 *   BookExchange::$colleges[$id] - get the name of college with id $id
 *   isset(BookExchange::$colleges[$id]) - whether or not $id is a valid college id
 *   array_keys(BookExchange::$colleges) - a list of all valid college ids
 *   array_values(BookExchange::$colleges) - a list of all valid college names
 */
class BookExchange
{
	public static $colleges = array(
		0 => 'Baker',
		1 => 'Brown',
		2 => 'Duncan',
		3 => 'Hanszen',
		4 => 'Jones',
		5 => 'Lovett',
		6 => 'Martel',
		7 => 'McMurtry',
		8 => 'Will Rice',
		9 => 'Sid Richardson',
		10 => 'Wiess',
		11 => 'Graduate Student',
		12 => 'Faculty'
	);

	public static $contact_preferences = array(
		0 => 'No Preference', 
		1 => 'E-Mail', 
		2 => 'Call', 
		3 => 'Text Message', 
		4 => 'Facebook'
	);

	public static $conditions = array(
		0 => 'N/A',
		1 => '7 - New',
		2 => '6 - Fine',
		3 => '5 - Very Good',
		4 => '4 - Good',
		5 => '3 - Fair',
		6 => '2 - Poor',
		7 => '1 - Bad'
	);

	public static $delivery_types = array(
		0 => 'In Person', 
		1 => 'Shipped', 
		2 => 'Digital', 
		3 => 'Other'
	);

	public static $book_types = array(
		0 => 'Hard Cover', 
		1 => 'Paper Back', 
		2 => 'E-Book (PDF)', 
		3 => 'E-Book (Other Format)', 
		4 => 'Other'
	);

	public static $sale_types = array(
		0 => 'For Sale', 
		1 => 'For Rent'
	);

	public static $sold_flags = array(
		0 => 'Available',
		1 => 'Sold',
		2 => 'Expired'
	);
}