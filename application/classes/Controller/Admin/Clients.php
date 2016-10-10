<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Clients extends Controller_Core_Admin {

	public $clients;
	public function before()
	{
		parent::before();
		$this->authention = FALSE;
		$this->clients = new Model_Clients;
	}

	public function action_index()
	{
		$this->body = View::factory('admin/clients/index')->set(array(
				'clients'	=> $this->clients->get_all(),
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
				if($this->clients->add_user($post,0))
				{
					$message = "Registro insertado correctamente";
				}
			}
		}

		$this->body = View::factory('admin/clients/add')->set(array(
				'message'	=> $message,
			));
	}

	public function action_edit()
	{	
		$id_client = $this->request->param('id');
		$message = '';
		if($this->request->method() == Request::POST){
			$message = 'Verifica tus datos proporcionados';
			$post = $this->validate_info();
			if($post->check())
			{
				$message = "Un error ocurrio durante la acción, intentelo mas tarde.";
				if($this->clients->add_user($post,$id_client))
				{
					$message = "Registro actualizado correctamente";
				}
			}
		}

		$this->body = View::factory('admin/clients/edit')->set(array(
				'client'		=> $this->clients->get_byId($id_client),
				'message'	=> $message,
			));
	}

	public function action_delete()
	{
		$id_user = $this->request->param('id');
		$this->clients->remove_byId($id_user);
		$this->redirect(URL::base().'admin/clients');
	}

	public function validate_info()
	{
		return Validation::factory($_POST)
			->rule("name","not_empty")
			->rule("email","email")
			->rule("phone","not_empty");
	}

}