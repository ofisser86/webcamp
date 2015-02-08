<?php
/*
*
*  Post Mapper - setter & getter for adapter + hydrate me bitch
*
*/

namespace Model\Post;

class Mapper
{
	private $adapter;

	public function setAdapter($a)
	{

	public function getAdapter()
	{

	public function getPostById($id)
	{
		return (is_null($data) ? null : $this->d2o($data));

	public static function d2o(array $data = array())
	{
		$obj = new \Model\Post($data['id']);

		$obj->setTitle(isset($data['title']) ? $data['title'] : null);
		$obj->setContent(isset($data['content']) ? $data['content'] : null);

		$date = \DateTime::createFromFormat('m/d/Y H:i:s', $data['created']);
		$obj->setCreated($date);

		$author = $data['author'];
		$obj->setAuthor($author);

		return $obj;
	}



}