{include file= "header.tpl"}

<h2>Ingrese sus datos</h2>
  <div class="">
          <form class="" action="validacion" method="POST">
              email<input type="email" name="email" id="nombre">
              contraseña <input type="password" name="password">
                          
            {if $error}
                <div> 
                 {$error}
                </div>
            {/if}
              <input class="" type="submit" value="Ingresar"> 
          </form>
  </div>

  {include file="footer.tpl"} 
