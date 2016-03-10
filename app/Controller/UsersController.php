<?php 

class UsersController extends AppController
{

	public $helpers = array('Html','Form');

/**
interactuar con el modelo de la base de datos
*/
	public function index()
	{
		$this->set('users', $this->Users->find('all'));


	}
}



 ?>