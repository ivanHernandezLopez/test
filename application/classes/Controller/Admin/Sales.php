<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_sales extends Controller_Core_Admin {

	public $clients;
	public $products;
	public $sales;
	public function before()
	{
		parent::before();
		$this->authention = FALSE;
		$this->clients = new Model_Clients;
		$this->products = new Model_Products;
		$this->sales = new Model_Sales;
	}

	public function action_index()
	{
		$this->body = View::factory('admin/sales/index')->set(array(
				'sales'	=> $this->sales->get_all(),
			));
	}

	public function action_add()
	{	$message = '';
		if($this->request->method() == Request::POST){
			$message = 'Verifica tus datos proporcionados';
			$post = $this->validate_perfil();
			if($post->check())
			{
				$message = "Un error ocurrio durante la acción, intentelo mas tarde.";
				$id_sale = $this->sales->add_user($post);
				if($id_sale)
				{
					$message = "Registro insertado correctamente";
				}
			}
		}

		$this->body = View::factory('admin/sales/add')->set(array(
				'clients'	=> $this->clients->get_all(),
				'products'	=> $this->products->get_all(),
				'message'	=> $message,
			));
	}

	public function action_addform()
	{
		$this->body = View::factory('admin/sales/addform')->set(array(
				'clients'	=> $this->clients->get_all(),
				'products'	=> $this->products->get_all(),
			));
	}

	

	public function action_delete()
	{
		$id_user = $this->request->param('id');
		$this->sales->remove_byId($id_user);
		$this->redirect(URL::base().'admin/sales');
	}

	public function validate_perfil()
	{
		return Validation::factory($_POST)
			->rule("fk_client","not_empty");
	}

}