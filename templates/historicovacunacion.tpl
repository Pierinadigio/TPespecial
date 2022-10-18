{include file= "header.tpl"}

<nav>
    <a class="volver" href='{BASE_URL}home'>VOLVER</a>
</nav>
<div>
    <table>
     <thead> 
        <tr>
            <th>Fecha</th>
            <th>Vacunacion</th>
        </tr>
    </thead>
    <tbody>
    {foreach from= $vacunaciones item=vacunacion}
       {if !empty($vacunacion->vacunacion)}
        <tr>
            <td> {$vacunacion->fecha} </td>
            <td> {$vacunacion->vacunacion}</td>
        </tr>
        {{/if}}    
    {{/foreach}}
    </tbody>
 </table>
</div>     

{include file="footer.tpl"} 