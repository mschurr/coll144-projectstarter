@extends('BookExchange.Master')

@title('Browse')

@section('content')
	<form action="{{{ URL::to('BookExchange.Browse') }}}"
	      method="GET">

	    <input type="text" name="q" value="" />
	    <input type="submit" value="Search" />
	    You will include a form that allows the user to enter
	     a search query here.

	    You should provide the user with some visual indication
	     that a search filter is active, as well as provide default value to text field.
	</form>

	Page Controller

	<table class="grid">
		<thead>
			<tr>
				<th>Title</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
			<tr><td colspan="2">There is nothing to display here.</td></tr>
		</tbody>
	</table>

	Page Controller
@endsection