<h3 class="text-uppercase font-weight-bold">Mis Notas</h3>
	<div class="row justify-content-center">
		{if $iNotas > 0}
			{each values=$aNotas value=aNota}
			<div class="col-10 col-md-3 mx-2 my-3 py-2 px-2 rounded" style="background: {$aNota.nota_color}" >
				<aside class="d-flex py-1 justify-content-end" >
					<a href="{route link='postit.update' nota=$aNota.nota_id}"  >
						<span data-jam="refresh" data-fill="#212121" data-height="16" >r</span>
					</a>
							
					<a href="{route link='postit.delete' nota=$aNota.nota_id}" onclick="return confirm('¿Estas segur@?');" >
						{*<a href="#" onclick="$LetPHP.onNotaAction('{$aNota.nota_id}', 'delete'); return false;" >*}
							<span data-jam="close-circle" data-fill="#EA2340" data-height="16" >e</span>
						</a>
							
				</aside>
				<h5>{$aNota.nota_titulo}</h5>
				<span>{$aNota.nota_descripcion}</span>
				<small class="d-block" >{date time=$aNota.nota_fecha format='d, M Y'}</small>
			</div>
			{/each}
		{else}
			<div class="col-11"><p class="text-left text-muted" >No hay ninguna nota aún.</p></div>
		{/if}
	</div>
				