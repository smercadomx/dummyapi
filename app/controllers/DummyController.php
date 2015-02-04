<?php

class DummyController extends BaseController {
	public function index()
	{
		return array('data' => 'Dummy data from the laravel api.');
	}
}
