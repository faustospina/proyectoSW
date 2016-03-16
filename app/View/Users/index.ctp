<h2>Lista de usuarios</h2>
<?php
echo $this->Html->link('Create User', array('controller'=>'users','action'=>'nuevo'));
?>


<table>
<tr>
	<td>Id</td>
	<td>Dni</td>
	<td>Nombre</td>
	<td>Apellido</td>
	<td>Acciones</td>
	<td>Editar</td>	
	<td>Editar</td>	

</tr>
<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user['User']['id']; ?> </td>
		<td><?php echo $user['User']['dni']; ?> </td>
		<td><?php echo $user['User']['user_name']; ?> </td>
		<td><?php echo $user['User']['user_lastname']; ?> </td>
		<td><?php echo $this->Html->link('Detalle', array('controller'=>'users','action' => 'ver',$user['User']['id'])); ?></td>
		<td><?php echo $this->Html->link('Editar', array('controller'=>'users','action' => 'editar',$user['User']['id'])); ?></td>
		<td> <?php echo $this->Form->postlink('Eliminar',array('action'=>'eliminar',$user['User']['id']), array('confirm'=>'Eliminar a'.$user['User']['user_name'].'?'));	?> </td>
	</tr>



<?php endforeach  ?>
</table>
