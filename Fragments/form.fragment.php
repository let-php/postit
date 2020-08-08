<?php
	
namespace LetApps\PostIt\Fragments;
class Form_Fragment	
{
	public function start()
	{
		$oModelNotas = Model('postit.notas');
		if((isset($_POST['form-submit-nota'])) && ($_POST['form-submit-nota'] == 1) )
		{
			
			$sTitulo = Http()->getParam('titulo');
			$sDecripcion = Http()->getParam('descripcion');
			$sColor = Http()->getParam('color') ;
			$iNotaId = Http()->getParamInt('nota_id');
			
			if($iNotaId > 0)
			{
				// Actualizar
				if($oModelNotas->editarNota($iNotaId, $sTitulo, $sDecripcion, $sColor))
				{
					Router()->goToPage('postit');
				}
			}
			else
			{
				// Agregar
				$iNotaId = $oModelNotas->agregarNota($sTitulo, $sDecripcion , $sColor);
				if($iNotaId > 0)
				{
					Router()->goToPage('postit');
				}
			}
		}
		
		$bEditar = false;
		// Actualizar la Nota
		if(Http()->getParam('param2') == 'update')
		{
			$iNotaId = Http()->getParamInt('nota');
			if($iNotaId > 0)
			{
				$aNota = $oModelNotas->getNota($iNotaId);
				if(count($aNota))
				{
					$bEditar = true;
					View()
					->setValues([
						'aNota' => $aNota
					]);
				}
			}
		}
		
		View()
		->setValues([
			'bEditar' => $bEditar
		]);
		
		
		
		
	}
}