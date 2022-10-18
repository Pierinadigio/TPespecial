{if isset($smarty.session.ID_admin)}
<h3 class="titulo-formulario">Registrar Cliente </h3>
  <div class="">
          <form class="" action="altacliente" method="POST">
              Nombre cliente<input type="text" name="nombre" id="nombre">
              Direccion <input type="text" name="direccion" id="direccion">
              Telefono <input type="number" name="telefono" id="telefono">
              Mascota <input type="text" name="mascota" id="mascota">
              <input class="button" type="submit" value="Registrar"> 
              
          </form>
  </div>
{/if}
          