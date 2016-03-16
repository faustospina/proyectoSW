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
				$this->Session->setFlash('El  usuario ha sido creado', 'default', array('class'=>'success'));
				return $this->redirect(array('action'=>'index'));

			}
			$this->Session->setFlash('no se pudo crear el usuario');

		}
	}

	public function editar($id = null){
		if (!$id) 
		{
			throw new NotFoundException("Datos Invalidos");
			
		}

		$user =$this->User->findById($id);
		if (!$user) 
		{
		throw new NotFoundException("El Usuario no ha sido encontrado");
		}
		if ($this->request->is('post','put')) {

			//this apuntando al usuario para optener los datos

			$this->User->id=$id;
			if ($this->User->save($this->request->data)) 
			{
				//success=mensaje de fondo verde mas intuitivo a la vista
				$this->Session->setFlash('El usuario ha sido modificado', $element='default', $params= array('class'=>'success'));
				return $this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('el registro no pudo ser modificado');
		}
		if (!$this->request->data) {
			$this->request->data =$user;
		}
	}

	public function eliminar($id)
	{
		if ($this->request->is('get')) 
		{
			
			throw new MethodNotAllowedException("INCORRECTO");
			
		}
		if($this->User->delete($id))
		{
			$this->Session->setFlash('el usuario ha sido eliminado', $element='default', $params=array('class'=>'success'));
			return $this->redirect(array('action'=>'index'));

		}





	}



}


 ?>

