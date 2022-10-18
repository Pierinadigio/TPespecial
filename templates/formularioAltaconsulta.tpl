{if isset($smarty.session.ID_admin)}
<h3 class="titulo-formulario">Ingresar Consulta</h3>

  <div class="form-control-dark:focus">
      <form class=""  action="altaconsulta" method="POST">
        Fecha <input type="text" name="fecha" id="fecha" placeholder="Fecha">
        Cliente <select name="cliente_id">
              <option value="" >Seleccione un cliente</option>
              {foreach from=$tablaclientes item=nombre}
               <option value={$nombre->id_cliente}>{$nombre->nombre}</option>
              {/foreach}
                </select>  
        Motivo <textarea type="text" name="motivo" id= "motivo"></textarea>
        Vacunacion <input type="text" name="vacunacion" id= "vacunacion">
        Antiparasitario <input type="text" name="antiparasitario" id= "antiparasitario" placeholder="Comprimidos">
        <input class="button" type="submit" value="Alta consulta"> 
      </form>
  </div>
   {/if}

