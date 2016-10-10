<?php defined('SYSPATH') or die('No direct script access.');

class Model_Products extends ORM {

	protected $_primary_key = "id_product";

	public function add_user($post,$id_product)
	{
		$query =  ORM::factory($this->table_name())->where("id_product","=",$id_product)->find();

		$query->name 	  = $post['name'];
		$query->sku = $post['sku'];
		$query->price    = $post['price'];
		
		return $query->save();		
	}	
}