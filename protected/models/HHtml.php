<?php

class HHtml extends CActiveRecord
{
	
	public function listData($arrayDatos, $value, $campo_1 , $campo_2=''){
		$values = array();
		$texto= array();
		$listCombo=array();

		if($arrayDatos!=null && $value!=null && $campo_1!=null){
			foreach ($arrayDatos as $key) {
				array_push($values, $key->$value);
				if($campo_2!='' && $campo_2!=null){
					array_push($texto, ucwords(strtolower($key[$campo_1].' '.$key[$campo_2])));
				}else{
					array_push($texto, ucwords(strtolower($key[$campo_1])));
				}
			}
		}
		$listCombo=array_combine($values, $texto);
		return $listCombo;
	}
}

?>