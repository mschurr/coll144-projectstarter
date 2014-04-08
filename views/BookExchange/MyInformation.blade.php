@extends('BookExchange.Master')

@title('My Information')

@section('content')
    You may find the following styles useful for displaying errors:
    <div class="error">Error</div>
    <div class="warning">Warning</div>
    <div class="notice">Notice</div>
    <div class="success">Success</div>

	<form action="{{{ URL::to($this) }}}" method="POST">
    	<input type="hidden" name="_csrf" value="{{{ CSRF::make('myinformation') }}}" />

        You will need to create a form that allows the user to input the following information:

        First Name
        Last Name
        College Affiliation
        Email Address
        Phone Number
        Facebook URL
        Contact Preference

        <input type="submit" value="Save" />

    </form>
@endsection