@extends('BookExchange.Master')

@title('Viewing Book')

@section('content')
	{{-- Display the table showing book information. --}}
	<table class="book">
		Display the information retrieved from the database about the book here.
	</table>
    
    {{-- Display the table showing seller information. --}}
    <table class="seller">
    	Display the information retrieved from the database for the book's seller here.
    </table>
@endsection