<?php

class DummyController extends BaseController {
	public function index()
	{
		return array('data' => 'Data from the laravel api.');
	}
}
