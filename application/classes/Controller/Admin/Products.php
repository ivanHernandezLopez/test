<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Products extends Controller_Core_Admin {

	public $products;
	public function before()
	{
		parent::before();
		$this->authention = FALSE;
		$this->products = new Model_Products;
	}

	public function action_index()
	{
		$this->body = View::factory('admin/products/index')->set(array(
				'products'	=> $this->products->get_all(),
			));
	}

	public function action_add()
	{	$message = '';
		if($this->request->method() == Request::POST){
			$message = 'Verifica tus datos proporcionados';
			$post = $this->validate_info();
			if($post->check())
			{
				$message = "Un error ocurrio durante la acción, intentelo mas tarde.";
				if($this->products->add_user($post,0))
				{
					$message = "Registro insertado correctamente";
				}
			}
		}

		$this->body = View::factory('admin/products/add')->set(array(
				'message'	=> $message,
			));
	}

	public function action_edit()
	{	
		$id_product = $this->request->param('id');
		$message = '';
		if($this->request->method() == Request::POST){
			$message = 'Verifica tus datos proporcionados';
			$post = $this->validate_info();
			if($post->check())
			{
				$message = "Un error ocurrio durante la acción, intentelo mas tarde.";
				if($this->products->add_user($post,$id_product))
				{
					$message = "Registro actualizado correctamente";
				}
			}
		}

		$this->body = View::factory('admin/products/edit')->set(array(
				'product'		=> $this->products->get_byId($id_product),
				'message'	=> $message,
			));
	}

	public function action_delete()
	{
		$id_product = $this->request->param('id');
		$this->products->remove_byId($id_product);
		$this->redirect(URL::base().'admin/products');
	}

	public function validate_info()
	{
		return Validation::factory($_POST)
			->rule("name","not_empty")
			->rule("sku","not_empty")
			->rule("price","not_empty");
	}

}