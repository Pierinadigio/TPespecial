{include file= "header.tpl"}

{include file="formularioregistrocliente.tpl"}


<nav>
    <a class="volver" href='{BASE_URL}home'>VOLVER</a>
</nav>
<div>
    <table>
     <thead> 
        <tr>
            <th>ID cliente</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Mascota</th>
            
        </tr>
    </thead>
    <tbody>
    {foreach from= $categorias item=categoria}
    <tr>
            
            <td> {$categoria->id_cliente} </td>
            <td> {$categoria->nombre}</td>
            <td> {$categoria->direccion} </td>
            <td> {$categoria->telefono} </td>
            <td> {$categoria->mascota} </td> 
             <td><a class="anchor" href='verconsultasporcliente/{$categoria->id_cliente}'> Ver consultas</a></td>
             {if isset($smarty.session.ID_admin)}
             <td><a class="anchor"href='eliminarcliente/{$categoria->id_cliente}'>Eliminar</a></td>
             <td><a class="anchor"href='editarcliente/{$categoria->id_cliente}'>Editar</a></td>
             {/if}
        </tr>
    {{/foreach}}
    </tbody>
 </table>
</div>     

{include file="footer.tpl"} 