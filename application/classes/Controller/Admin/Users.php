<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Users extends Controller_Core_Admin {

	public $users;
	public function before()
	{
		parent::before();
		$this->authention = FALSE;
		$this->users = new Model_Users;
	}

	public function action_index()
	{
		$this->body = View::factory('admin/users/index')->set(array(
				'users'	=> $this->users->get_all(),
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
				if($this->users->add_user($post,$this->a1,0))
				{
					$message = "Registro insertado correctamente";
				}
			}
		}

		$this->body = View::factory('admin/users/add')->set(array(
				'message'	=> $message,
			));
	}

	public function action_edit()
	{	
		$id_user = $this->request->param('id');
		$message = '';
		if($this->request->method() == Request::POST){
			$message = 'Verifica tus datos proporcionados';
			$post = $this->validate_perfil();
			if($post->check())
			{
				$message = "Un error ocurrio durante la acción, intentelo mas tarde.";
				if($this->users->add_user($post,$this->a1,$id_user))
				{
					$message = "Registro actualizado correctamente";
				}
			}
		}

		$this->body = View::factory('admin/users/edit')->set(array(
				'user'		=> $this->users->get_byId($id_user),
				'message'	=> $message,
			));
	}

	public function action_delete()
	{
		$id_user = $this->request->param('id');
		$this->users->remove_byId($id_user);
		$this->redirect(URL::base().'admin/users');
	}

	public function validate_perfil()
	{
		return Validation::factory($_POST)
			->rule("name","not_empty")
			->rule("email","email")
			->rule("password","not_empty")
			->rule("r_password","matches", array(':validation', 'r_password', 'password'));
	}

}