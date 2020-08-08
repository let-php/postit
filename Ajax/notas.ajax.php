<?php

namespace LetApps\PostIt\Ajax;
class Notas_Ajax
{
	/*public function load()
	{
		Fragment('app.notas');
		JS()->let_html('#notas_ajax', JS()->getContentFile(false));
	}*/
	
	public function delete()
	{
		$nota = JS()->getParamInt('nota');
		$action = JS()->getParam('action');
		Fragment('app.notas', ['nota' => $nota, 'action' => $action]);
		JS()->let_html('#notas_ajax', JS()->getContentFile(false));
	}
	
}
	