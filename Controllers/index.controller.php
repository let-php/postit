<?php
    
namespace LetApps\PostIt\Controllers;

class Index_Controller
{
	public function start()
	{
		
		Cache()->removeCache();
		
		// Crear BD
		/*$sTable = DbTable('notas');
		$sQuery = "CREATE TABLE IF NOT EXISTS {$sTable}(
			nota_id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
			nota_titulo VARCHAR(50) NOT NULL,
			nota_descripcion CHAR(250) NOT NULL,
			nota_color CHAR(6) NOT NULL,
			nota_fecha INTEGER(10) NOT NULL
		)";
		echo Db()->query($sQuery);*/
		//$oModelNotas = Model('app.notas');

		
		// Guardar Nota
		/*if((isset($_POST['form-submit-nota'])) && ($_POST['form-submit-nota'] == 1) )
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
					Router()->goToPage('');
				}
			}
			else
			{
				// Agregar
				$iNotaId = $oModelNotas->agregarNota($sTitulo, $sDecripcion , $sColor);
				if($iNotaId > 0)
				{
					Router()->goToPage('');
				}
			}
		}*/
		
		
		/*$bEditar = false;
		// Eliminar la Nota
		if(Http()->getParam('param2') == 'delete')
		{
			$iNotaId = Http()->getParamInt('nota');
			if($oModelNotas->eliminarNota($iNotaId))
			{
				Router()->goToPage('');
			}
		}
		else if(Http()->getParam('param2') == 'update')
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
		*/
	
		SetConfig('main.site_name', 'Post It ');
		
		$aColores = ['#FDDBDB', '#AAF0D1', '#E5F1F6', '#AFE19F', '#E3E3E3'];
		View()
		->setCss([
			'<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">',
			'notas.css' => 'app_postit' 
		])
		->setJScript([
			'<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>',
			'letphp.js' => 'site',
			'ajax.js' => 'site', 
			'notas.js' => 'app@postit',
		])
		->setValues([
			'aColores' => $aColores
		]);
		
	}
}
    
?>
