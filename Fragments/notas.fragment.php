<?php

namespace LetApps\PostIt\Fragments;
use LetPHP_Utils;
class Notas_Fragment extends LetPHP_Utils
{
	public function start()
	{
		$oModelNotas = Model('postit.notas');
		
		
		// Eliminar las notas
		if(Http()->getParam('param2') == 'delete')
		{
			$iNotaId = Http()->getParamInt('nota');
			if($oModelNotas->eliminarNota($iNotaId))
			{
				Router()->goToPage('postit');
			}
		}
		
		
		
		// Obtener las Notas
		$iNotas = $oModelNotas->getNotasTotales();
		if($iNotas > 0)
		{
			$aNotas = $oModelNotas->getNotas();
			View()
			->setValues([
				'aNotas' => $aNotas
			]);
		}
		
		View()
		->setJScript([
			'<script src="https://unpkg.com/jam-icons/js/jam.min.js"></script>'
		])
		->setValues(['iNotas' => $iNotas]);
		
	}
}	
	