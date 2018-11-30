<?php
/**
*@package pXP
*@file gen-MODContaAlmTipoMat.php
*@author  (rchumacero)
*@date 31-10-2018 14:28:02
*@description Clase que envia los parametros requeridos a la Base de datos para la ejecucion de las funciones, y que recibe la respuesta del resultado de la ejecucion de las mismas
*/

class MODContaAlmTipoMat extends MODbase{
	
	function __construct(CTParametro $pParam){
		parent::__construct($pParam);
	}
			
	function listarContaAlmTipoMat(){
		//Definicion de variables para ejecucion del procedimientp
		$this->procedimiento='misc.ft_conta_alm_tipo_mat_sel';
		$this->transaccion='MIS_CATMAT_SEL';
		$this->tipo_procedimiento='SEL';//tipo de transaccion
				
		//Definicion de la lista del resultado del query
		$this->captura('id_conta_alm_tipo_mat','int4');
		$this->captura('descripcion','varchar');
		$this->captura('estado_reg','varchar');
		$this->captura('codigo','varchar');
		$this->captura('id_usuario_ai','int4');
		$this->captura('id_usuario_reg','int4');
		$this->captura('fecha_reg','timestamp');
		$this->captura('usuario_ai','varchar');
		$this->captura('id_usuario_mod','int4');
		$this->captura('fecha_mod','timestamp');
		$this->captura('usr_reg','varchar');
		$this->captura('usr_mod','varchar');
		
		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();
		
		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function insertarContaAlmTipoMat(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='misc.ft_conta_alm_tipo_mat_ime';
		$this->transaccion='MIS_CATMAT_INS';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('descripcion','descripcion','varchar');
		$this->setParametro('estado_reg','estado_reg','varchar');
		$this->setParametro('codigo','codigo','varchar');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function modificarContaAlmTipoMat(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='misc.ft_conta_alm_tipo_mat_ime';
		$this->transaccion='MIS_CATMAT_MOD';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('id_conta_alm_tipo_mat','id_conta_alm_tipo_mat','int4');
		$this->setParametro('descripcion','descripcion','varchar');
		$this->setParametro('estado_reg','estado_reg','varchar');
		$this->setParametro('codigo','codigo','varchar');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function eliminarContaAlmTipoMat(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='misc.ft_conta_alm_tipo_mat_ime';
		$this->transaccion='MIS_CATMAT_ELI';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('id_conta_alm_tipo_mat','id_conta_alm_tipo_mat','int4');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}
			
}
?>