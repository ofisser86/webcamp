<?php

/*
index controller class
*/

class IndexController
{
	{
  		var_dump($request->get('path'), $request->get('id'));
  		return "This is index action";