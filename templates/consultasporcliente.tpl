{include file= "header.tpl"}

<nav class="">
    <a href='{BASE_URL}vercategorias'>VOLVER</a>
</nav>
<table class="">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Fecha</th>
        <th>motivo</th>
        <th>Vacunacion</th>
        <th>Antiparasitario</th>
      </tr>
    </thead>
    <tbody>
    
  {foreach from=$consultacliente item=consulta}
    {foreach from=$datocliente item= cliente}
      {if $consulta->cliente_id == $cliente->id_cliente}
     <tr>
        <td> {$cliente->nombre} </td>
        <td> {$consulta->fecha} </td>
        <td> {$consulta->motivo} </td>
        <td> {$consulta->vacunacion} </td> 
        <td> {$consulta->antiparasitario} </td> 
    </tr>
    {/if}
  {{/foreach}}
{{/foreach}}
    </tbody>
</table>

{include file="footer.tpl"} 