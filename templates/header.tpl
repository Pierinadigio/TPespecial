
<!DOCTYPE html>
    <html lang="en">
    <head>
        <base href="{BASE_URL}">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Css/styles.css">
        <title>TPE</title>
    </head>
    <body>
    <div class="adm">
        <nav>
            {if !isset($smarty.session.ID_admin)}
                <a class="" href="login">Login</a>
            {else}
                <a class="" href="logout" >Logout {$smarty.session.email}</a>
            {/if}   
        </nav>
    </div>
                   
    <h1 class="">Centro Veterinario Patitas Serranas</h1>
    
    <div class="">
    
            
    
    