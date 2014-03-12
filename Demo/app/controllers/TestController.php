<?php

class TestController extends BaseController {

	public function icecreamsCount($number)
	{
		return View::make('result')->with('numberOfIceCreamCones', $number);
	}

	public function getIcecreams()
	{
		return View::make('test');
	}

	public function postIcecreams()
	{
		$numberOfIceCreamCones = Input::get('ice_cream_cones');

		return View::make('result', compact('numberOfIceCreamCones'));
	}

}