<h3 class="text-uppercase font-weight-bold" >
	{if $bEditar}
		Actualizar Nota
	{else}
		Agregar  Nota
	{/if}
</h3>
<form action="" method="post" accept-charset="utf-8">
	<div class="form-group">
		<label class="text-uppercase text-muted" for="titulo" >titulo</label>
		<input name="titulo" class="form-control" id="titulo" placeholder="Ingresa titulo" value="{$aNota.nota_titulo}" />
	</div>
				
	<div class="form-group">
		<label class="text-uppercase text-muted" for="descripcion" >descripción</label>
		<textarea name="descripcion" id="descripcion" class="form-control" placeholder="Ingresa descripción" >{$aNota.nota_descripcion}</textarea>
	</div>
				
	<div class="form-group">
		<label class="text-uppercase text-muted" for="color" >color</label>
		<input type="hidden" class="form-control" name="color" id="color" value="{$aNota.nota_color}" />
		<div class="row justify-content-center">
			{each values=$aColores value=color key=key}			
				<div 
					class="col-1 ml-3 colores {if $aNota.nota_color == $color}active{/if}" 
					id="color_{$key}"
					onclick="$LetPHP.onColor('{$color}', {$key}); return false;" style="background:{$color};width: 10%; height: 10%; cursor: pointer" >&nbsp;</div>
			{/each}
		</div>
	</div>
					
	<input type="hidden" name="form-submit-nota" value="1" />
	{if $bEditar}
		<input type="hidden" name="nota_id" value="{$aNota.nota_id}" />
		<button class="btn btn-candy btn-block text-uppercase" type="submit" >editar</button>
	{else}
		<button class="btn btn-candy btn-block text-uppercase" type="submit" >guardar</button>
	{/if}
					
</form>
