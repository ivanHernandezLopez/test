<?php defined('SYSPATH') or die('No direct script access.');

class Model_Clients extends ORM {

	protected $_primary_key = "id_client";

	public function add_user($post,$id_client)
	{
		$query =  ORM::factory($this->table_name())->where("id_client","=",$id_client)->find();

		$query->name 	  = $post['name'];
		$query->last_name = $post['last_name'];
		$query->phone = $post['phone'];
		$query->email    = $post['email'];
		
		return $query->save();		
	}	
}