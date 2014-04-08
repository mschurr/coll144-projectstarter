<?php
/*
	This Controller is for use by the Authentication System.
	You do not need to modify this file.
*/

class Logout extends Controller
{
	public function get()
	{
		// Check for a URL.
		if(isset($this->request->get['url']))
			$this->session['_logout_redirect'] = $this->request->get['url'];
		else
			$this->session['_logout_redirect'] = '/';

		// If the user is logged in, log them out.
		if($this->auth->loggedIn) {
			$this->auth->logout();
		}
		
		// Redirect the user to _GET[url] if set or / otherwise.
		$url = isset($this->session['_logout_redirect']) ? URL::to($this->session['_logout_redirect']) : URL::to('/');
		unset($this->session['_logout_redirect']);

		if($url === null || !$url->isInternal()) $url = URL::to('/');
		
		return Redirect::to($url);
	}
}