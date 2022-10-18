{include file= "header.tpl"}
{include file="formularioaltaconsulta.tpl"}


<h2 class="titulo-formulario">Consultas de nuestros<a id="clientes"href="vercategorias"> Clientes</a></h2>
<div>
  <table class="tabla">
    <thead>
      <tr>
            <th>ID consulta</h>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>Mascota</th>
            <th>Vacunacion</th>
            <th>Antiparasitario</th>
            <th></th>
           
      </tr>
    </thead>
    <tbody>

    {foreach from= $tablaconsultas item= consulta}
      {foreach from=$tablaclientes item= cliente}
       {if $consulta->cliente_id == $cliente->id_cliente}
         <tr>
                <td> {$consulta->id_consulta} </td> 
                <td> {$consulta->fecha} </td>
                <td> {$cliente->nombre}</td>
                <td> {$cliente->mascota}</td>
                <td> {$consulta->vacunacion }</td> 
                <td> {$consulta->antiparasitario} </td> 
                <td><a class="anchor" href='vermas/{$consulta->id_consulta}'>Detalle consulta</a></td>
                {if isset($smarty.session.ID_admin)}
                <td><a  class="anchor"href='eliminarconsulta/{$consulta->id_consulta} '>Eliminar</a></td>
                <td> <a class="anchor"href='editarconsulta/{$consulta->id_consulta}'>Editar</a></td>
                {/if}
          </tr>
       {/if}
      {{/foreach}}
    {{/foreach}}
    </tbody>
  </table>
</div>

{include file="footer.tpl"} 