<h2>Lista de usuarios</h2>

<table>
<tr>
	<td>Id</td>
	<td>Nombre</td>
	<td>Apellido</td>
	<td>Acciones</td>	
</tr>
<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user['User']['id']; ?>    </td>
		<td><?php echo $user['User']['user_name']; ?> </td>
		<td><?php echo $user['User']['user_lastname']; ?> </td>
		<td><?php echo $this->Html->link('Detalle', array('controller'=>'users','action' => 'ver',$user['User']['id'])); ?></td>
	</tr>



<?php endforeach  ?>
</table>
