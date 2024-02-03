<?php

Class Home extends App
{
	public function index()
	{
		view('main',['heading' => 'Super Simple MVC PHP']);
	}

	public function test($id)
	{

 		view('test',[
 			'heading' 	=> 'Test with ID',
 			'id'		=> $id
 		]);
	}



}