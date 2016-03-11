<?php 

class UsersController extends AppController
{

	public $helpers = array('Form','Html','Time');

	public function index()
	{
		$this->set('users', $this->User->find('all'));

	}

	public function ver($id=null){

		if (!$id) {
			throw new NotFoundException('Datos Invalidos');
			
		}

		$user = $this->User->findById($id);

		if (!$user) 
		{
			throw new NotFoundException('el usuario no existe');
		}
		$this->set('user', $user);

	}




}


 ?>

