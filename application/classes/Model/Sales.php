<?php defined('SYSPATH') or die('No direct script access.');

class Model_Sales extends ORM {

	protected $_primary_key = "id_sales";

	public function add_sale($post)
	{
		$query =  ORM::factory($this->table_name());

		$query->fk_client 	  = $post['fk_client'];
		$query->date    = date('Y-m-d');
		
		return $query->save();		
	}	


	public function update_register($id_sale,$total)
	{
		$query =  ORM::factory($this->table_name())->where("id_sales","=",$id_sale)->find();

		$query->total = $total;
		return $query->save();
	}
}