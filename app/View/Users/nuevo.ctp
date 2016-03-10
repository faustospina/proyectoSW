<h2>crear usuario</h2>


<?php
	echo $this->Form->create('User');
	echo $this->Form->input('dni');
	echo $this->Form->input('user_name');
	echo $this->Form->input('user_lastnname');
	echo $this->Form->input('user_phone');
	echo $this->Form->end('create User');
?>