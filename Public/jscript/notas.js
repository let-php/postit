$LetPHP.onColor = (color, index) => {
	
	document.querySelectorAll('.colores').forEach( box => {
		box.classList.remove('active');
	});
	document.querySelector('#color').value = color; 
	document.querySelector('#color_'+index).classList.add('active');
	
};

$LetPHP.onNotaAction = (id, action) => {

	$.LetPHPAjax('app.notas.delete', `nota=${id}&action=${action}`, 'POST');
};
