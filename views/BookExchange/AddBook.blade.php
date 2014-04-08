@extends('BookExchange.Master')

@title('Add Book')

@section('content')
	<form action="{{{ URL::to('BookExchange.AddBook') }}}"
	      method="POST">

		You should put a form to add books to the database here.

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
		 and the edit book form (without duplicating code).

	</form>
@endsection