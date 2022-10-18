{include file= "header.tpl"}

<h3 class="titulo-formulario">Editar consulta</h3>
<nav class="">
    <a class="volver" href='{BASE_URL}home'>VOLVER</a>
</nav>

{foreach from=$fila item= $dato}
    <form action="{BASE_URL}confirmaredicion/{$dato->id_consulta}" method="POST">
          <input type="hidden" name="id" value= "{$dato->id_consulta}" placeholder="fecha">
            Fecha <input type="text" name="fecha" value="{$dato->fecha}"  placeholder="fecha">
            Motivo <input type="text" name=" motivo" value="{$dato->motivo}"  placeholder="motivo">
            Vacunacion <input type="text" name="vacunacion" value="{$dato->vacunacion}" placeholder="vacunacion">
            Antiparasitario <input type="text" name="antiparasitario" value="{$dato->antiparasitario}"  placeholder="comprimidos">
    
            <input type="submit" value=" guardar cambios"> 
    </form>
{{/foreach}}
{include file="footer.tpl"} 
