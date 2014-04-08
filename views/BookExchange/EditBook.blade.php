@extends('BookExchange.Master')

@title('Editing Book')

@section('content')
	<form action="{{{ URL::to('BookExchange.EditBook', $book_id) }}}"
	      method="POST">

		You should put a form to edit books that already exist in the database here.
		You should fill in default values with those provided by the database.

		You should follow all of the user-interface best practices.
		If submission fails validation, display again with submitted values and errors.

		This should include...
			Teachers
			Courses
			Delivery Method
			Book Type (Hard Cover Book, Paperback, E-Book, Other)
			Book Condition
			Title
			Edition
			Publisher
			Year Published
			Author(s)
			ISBN Numbers
			Description (optional)
			Sold Status

		If you are particularly clever, you can use the same code for this form 
		 and the add book form (without duplicating code).

	</form>
@endsection