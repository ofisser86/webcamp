<?php
/*
*
*  Index Controller
*
*/

namespace Controller;


class Index
{
	{
  		var_dump($request->get('path'), $request->get('id'));
  		return "This is index action from index controller";