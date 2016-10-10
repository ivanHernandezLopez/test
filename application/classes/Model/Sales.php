<?php defined('SYSPATH') or die('No direct script access.');

class Model_Sales extends ORM {

	protected $_primary_key = "id_sales";

	public function add_user($post,$a1,$id_user)
	{
		$query =  ORM::factory($this->table_name())->where("id_user","=",$id_user)->find();

		$query->name 	  = $post['name'];
		$query->last_name = $post['last_name'];
		$query->email    = $post['email'];
		if($post["password"]!="")
			$query->password = $a1->hash($post["password"]);
		
		return $query->save();		
	}	
}