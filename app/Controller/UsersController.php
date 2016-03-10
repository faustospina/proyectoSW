<?php 

class UsersController extends AppController
{

	public $helpers = array('Form','Html','Time');
	public $components= array('Session');

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

	public function nuevo()
	{
		if ($this->request->is('post')) 
		{
			$this->User->create();
			if ($this->User->save($this->request->data)) 
			{
				$this->Sesion->setFlash('el  usuario se creo con exito');
				return $this->redirect(array('action'=>'index'));

			}
			$this->Sesion->setFlash('no se pudo crear el usuario');

		}
	}




}


 ?>

