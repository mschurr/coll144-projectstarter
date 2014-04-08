<?php
/*
	This Controller is for use by the Authentication System.
	You do not need to modify this file.
*/

class Register extends Controller
{
	public function get($error=null)
	{
		return View::make('BookExchange.Register')->with(array(
			'user' => $this->user,
			'error' => $error
		));
	}
	
	public function post()
	{
		try {
			// Create the user account.
			$user = $this->users->create(
				$this->request->post['username'], 
				$this->request->post['password']
			);

			// Update the user's email.
			//$user->setEmail($this->request->post['email']);

			// Log the user in.
			$this->auth->login($user);

			// Redirect the user to the home page.
			return Redirect::to('/');
		}
		catch(UserServiceException $e) {
			return $this->get($e->getErrorMessage());
		}
	}
}