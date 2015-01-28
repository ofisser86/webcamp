<?php

class Request
{
	private $post = array();
	private $server = array();

	public function __construct(array $get = array(), array $post = array(), array $server = array())
	{
    	$this->get = $get;
    	$this->post = $post;
    	$this->server = $server;

	private function getKey($from, $key, $default = null)
	{
  		return (isset($arrThisFrom[$key]) ? $arrThisFrom[$key] : $default);

	public function get($key, $default = null)
	{

	public function post($key, $default = null)
	{
		return $this->getKey('post', $key, $default);
	}

	public function server($key, $default = null)
	{
		return $this->getKey('server', $key, $default);
	}

	public function isPost()
	{
		return (strtolower($requestMethod) == 'post');

