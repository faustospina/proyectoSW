<?php 
class User extends AppModel
{
	public $validate = array(
		'dni' => array(
			'notEmpty'=> array(
				'rule'=>'notEmpty'
			),
			'numeric'=>array(
				'rule' => 'numeric',
				'message'=>'en este campo solo se acepta tipo numerico'
			),
			'unique' => array(
				'rule' => 'isUnique',
				'message'=>'El DNI ya existe'
			)
		),
		'user_name'=>array(
			'rule'=>'notEmpty'
		),
		'user_lastname'=>array(
			'rule'=>'notEmpty'
		),
		'user_phone' => array(
			'notBlank'=> array(
				'rule'=>'notEmpty'
			),
			'numeric'=>array(
				'rule' => 'numeric',
				'message'=>'en este campo solo se acepta tipo numerico'
			),
			'unique' => array(
				'rule' => 'isUnique',
				'message'=>'el numero de celular ya aparece registrado al nombre de otra persona'

			)
		)

	);
	

}
 ?>

