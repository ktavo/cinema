<?php namespace Cinema\Http\Controllers;

class testController extends Controller
{
	public function index()
	{
		return 'welcome to route test controller';
	}

	public function getNombre($nombre = "No name!")
	{
		return 'Hi: '.$nombre;

	}
}