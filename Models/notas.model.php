<?php

namespace LetApps\PostIt\Models;
class Notas_Model
{
	
	
	public function agregarNota(string $sTitulo, string $sDescripcion, string $sColor )
	{
		if($sTitulo == ''|| empty($sTitulo)){ $sTitulo = 'Sin Titulo'; }
		if($sDescripcion == ''|| empty($sDescripcion)){ $sDescripcion = 'Sin Descripcion'; }
		if($sColor == ''|| empty($sColor)){ $sColor = '#FFFFFF'; }
		
		$aInsertar = [
			'nota_titulo' => $sTitulo,
			'nota_descripcion' => $sDescripcion,
			'nota_color' => $sColor,
			'nota_fecha' => LETPHP_TIME
		];
		return DbInsert('notas', $aInsertar);
	}
	
	public function getNota(int $iNotaId)
	{
		return Db()
		->select('*')
		->table(DbTable('notas'))
		->cond('nota_id = '. $iNotaId)
		->singular();
		
	}
	
	public function getNotas()
	{
		return Db()
		->select('*') 
		->table(DbTable('notas'))
		->order('nota_fecha DESC')
		->run('collections');
	}
	
	public function getNotasTotales()
	{
		return Db()
		->select('*')
		->table(DbTable('notas'))
		->count();
	}
	
	public function editarNota(int $iNotaId, string $sTitulo, string $sDescripcion, string $sColor)
	{
		$aEditar = [
			'nota_titulo' => $sTitulo,
			'nota_descripcion' => $sDescripcion,
			'nota_color' => $sColor,
			'nota_fecha' => LETPHP_TIME
		];
		$sCond = " nota_id = ". $iNotaId;
		return DbUpdate('notas', $aEditar, $sCond);
	}
	
	// Eliminar Nota
	public function eliminarNota(int $iNotaId)
	{
		return DbDelete('notas', "nota_id = ". $iNotaId);
	}
	
}






