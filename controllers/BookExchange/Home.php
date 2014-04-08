<?php

class Home extends Controller
{
	public function get()
	{
		return View::make('BookExchange.Home')->with(array(
			'user' => $this->user
		));
	}
}