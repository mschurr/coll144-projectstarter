@extends('BookExchange.Master')

@title('My Books')

@section('content')
	@if(!$personal_info)
		<div class="warning">You must fill out your personal information in order to add books.</div>
	@elseif($full)
		<div class="warning">Your account is full; you must delete some existing books before you can add more.</div>
	@else
		<a href="{{{ URL::to('BookExchange.AddBook') }}}" class="form_submit_style">Add Book</a>
	@endif

	<div class="section">
		<div class="header">
			Listed ({{{ count($books) }}}):
		</div>

		<form action="{{{ URL::to($this) }}}" method="POST">
		<table class="grid">
			<thead>
				<tr>
					<th>{{-- Checkbox --}}</th>
					<th>Title (click to edit)</th>
				</tr>
			</thead>
			<tbody>

			@if(count($books) == 0)
				<tr><td colspan="2">You have no books to display.</td></tr>
			@endif

			</tbody>

			Display the books currently listed for sale for the user here.
			Include checkboxes to select books.
		</table>
		With Selected: <input type="submit" name="_action" value="Mark As Sold" />
		</form>
	</div>

	<div class="section">
		<div class="header">
			Sold ({{{ count($sold_books) }}}):
		</div>

		<form action="{{{ URL::to($this) }}}" method="POST">
		<table class="grid">
			<thead>
				<tr>
					<th>{{-- Checkbox --}}</th>
					<th>Title (click to edit)</th>
				</tr>
			</thead>
			<tbody>

				@if(count($sold_books) == 0)
					<tr><td colspan="2">You have no books to display.</td></tr>
				@endif

			</tbody>

			Display the books that the user has successfully sold here.
			Include checkboxes to select books.
		</table>
		With Selected: <input type="submit" name="_action" value="Mark As Available" /> <input type="submit" name="_action" value="Delete" />
		</form>
	</div>
@endsection