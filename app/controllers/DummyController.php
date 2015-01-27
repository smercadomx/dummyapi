<?php

class DummyController extends BaseController {
	public function index()
	{
		return array('data' => 'dummy data from the laravel api');
	}
}