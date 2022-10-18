{include file= "header.tpl"}

<h3 class="titulo-formulario">Editar cliente</h3>
<nav class="">
    <a class="volver" href='{BASE_URL}home'>VOLVER</a>
</nav>

{foreach from=$datocliente item=dato}
               
    <form action="{BASE_URL}edicioncategoria/{$dato->id_cliente}" method="POST">
              <input type="hidden" name="id" value= {$dato->id_cliente}>
              Nombre <input name="nombre" value="{$dato->nombre}">
              Direccion <input type="text" name="direccion" value="{$dato->direccion}">
              Telèfono <input type="text" name="telefono" value="{$dato->telefono}">
              Mascota <input type="text" name="mascota" value= "{$dato->mascota}">
              <input type="submit" value=" guardar "> 
            </form>
{{/foreach}}

{include file="footer.tpl"} 