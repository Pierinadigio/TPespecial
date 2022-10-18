{include file= "header.tpl"}
<a class="volver" href='{BASE_URL}home'>VOLVER</a>
<table class="">
    <thead>
      <tr>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>motivo</th>
            <th>Vacunacion</th>
            <th>Antiparasitario</th>
      </tr>
    </thead>
    <tbody>
  {foreach from=$fila item=consulta}
    {foreach from=$tablaclientes item= $cliente}
      {if $consulta->cliente_id == $cliente->id_cliente}

        <tr>
            <td> {$consulta->fecha} </td>
            <td> {$cliente->nombre} </td>
            <td> {$consulta->motivo} </td>
            <td><a class="anchor" href='vacunacion/{$cliente->id_cliente}'>Historico Vacunacion</a></td> 
            <td> {$consulta->antiparasitario} </td> 
        </tr>
      {/if}
    {{/foreach}}
  {{/foreach}}
    </tbody>
</table>

{include file="footer.tpl"} 