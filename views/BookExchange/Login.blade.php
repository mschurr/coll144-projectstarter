@extends('BookExchange.Master')

{{--
    This View is for use by the Authentication System.
    You do not need to modify this View.
--}}

@title('Login')

@section('content')
	<form method="POST" action="{{{ URL::to($this) }}}">
    	<input type="hidden" name="_csrf" value="{{{ CSRF::make('login') }}}" />
    	<input type="hidden" name="destination" value="{{{ $destination }}}" />
        <table>
        	<tr><td class="title">Account Login</td></tr>
        	@if($error !== null)
            	<tr><td class="error">{{{ $error }}}</td></tr>
            @endif
            <tr><td class="label">Username *</td></tr>
            <tr><td><input type="text" name="username" value="{{{ isset($request->post['username']) ? $request->post['username'] : '' }}}" /></td></tr>
            <tr><td class="label">Password *</td></tr>
            <tr><td><input type="password" name="password" value="" /></td></tr>
            <tr><td class="checkbox"><label><input type="checkbox" name="persistent" value="true" {{ isset($request->post['persistent']) ? 'checked="checked"' : '' }} /> Remember Me</label></td></tr>
            <tr><td class="button"><input type="submit" value="Log In" /></td></tr>
        </table>
    </form>
@endsection