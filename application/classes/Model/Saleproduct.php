<?php defined('SYSPATH') or die('No direct script access.');

class Model_Saleproduct extends ORM {

	protected $_primary_key = "id_saleproduct";

	public function add_saleproduct($fk_sale,$fk_product,$num,$total)
	{
		$query =  ORM::factory($this->table_name());

		$query->fk_sale 	  = $fk_sale;
		$query->fk_product = $fk_product;
		$query->num_products = $num;
		$query->total = $total;
		return $query->save();		
	}	
}