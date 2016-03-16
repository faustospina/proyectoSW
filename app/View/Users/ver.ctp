<h2>Detalle del usuario: <?php echo $user['User']['user_name']; ?></h2>
<h2>identificacion: <?php echo $user['User']['dni']; ?></h2>
<h2>Apelldios: <?php echo $user['User']['user_lastname']; ?></h2>
<h2>telefono: <?php echo $user['User']['user_phone']; ?></h2>
<h2>fecha de la creacion: <?php echo $this->Time->format('d-m-y;h:i A',$user['User']['created']);?></h2>
<h2>fecha de modificacion: <?php echo $this->Time->format('d-m-y;h:i A',$user['User']['modified']);?></h2>
<?php echo $this->Html->link('volver a la lista de usuarios', array('controller'=>'users','action'=>'index'));?>