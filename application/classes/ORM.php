<?php defined('SYSPATH') or die('No direct script access.');

class ORM extends Kohana_ORM {

	/**
	 * Model configuration, table names plural?
	 * @var bool
	 */
	protected $_table_names_plural = FALSE;

	public function get_all()
	{
		return ORM::factory($this->table_name())->find_all();
	}

	public function get_byId($id)
	{
		return ORM::factory($this->table_name())->where($this->_primary_key,'=',$id)->find();
	}

	public function remove_byId($id)
	{
		$query = "delete from ".$this->table_name()." where ".$this->_primary_key."=".$id;
		return DB::query(Database::DELETE,$query)->execute();
	}
}