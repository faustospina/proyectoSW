<h2>crear usuario</h2>
<?php
	echo $this->Form->create('User');
	echo $this->Form->input('dni');
	echo $this->Form->input('user_name');
	echo $this->Form->input('user_lastname');
	echo $this->Form->input('user_phone');
	echo $this->Form->end('create User');
	echo $this->Html->link('volver a la lista de usuarios', array('controller'=>'users','action'=>'index'));
?>


