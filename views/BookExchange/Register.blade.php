@extends('BookExchange.Master')

{{--
    This View is for use by the Authentication System.
    You do not need to modify this View.
--}}

@title('Sign Up')

@section('content')
	<form method="POST" action="{{{ URL::to($this) }}}">
    	<input type="hidden" name="_csrf" value="{{{ CSRF::make('register') }}}" />
        <table>
        	<tr><td class="title">Account Registration</td></tr>
        	@if($error !== null)
            	<tr><td class="error">{{{ $error }}}</td></tr>
            @endif
            <tr><td class="label">Username *</td></tr>
            <tr><td><input type="text" name="username" value="{{{ isset($request->post['username']) ? $request->post['username'] : '' }}}" /></td></tr>
            <tr><td class="label">Password *</td></tr>
            <tr><td><input type="password" name="password" value="" /></td></tr>
            <tr><td class="label">Confirm Password *</td></tr>
            <tr><td><input type="password" name="password_conf" value="" /></td></tr>
            <tr><td class="label">Email Address *</td></tr>
            <tr><td><input type="email" name="email" value="" /></td></tr>
            <tr><td class="button"><input type="submit" value="Sign Up" /></td></tr>
        </table>
    </form>
@endsection