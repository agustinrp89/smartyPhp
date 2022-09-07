<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div>
<h1>Personajes de la Serie Rick & Morty,<br>Ficha Técnica:</h1> 
</div>
    
    {foreach $personajes as $personaje}
          <article class="tamaño">
           <div class="imagen" >
            {html_image file=$personaje->image}
            </div>
            <div class="detalle">
            <ul>
             <li>ID: {$personaje->id}</li>
              <li>Nombre: {$personaje->name}</li>
             <li>Status: {$personaje->status}</li>
              <li>Species: {$personaje->species}</li>
              <li>Gender: {$personaje->gender}</li>
            </ul>
           </div>
          </article>
    {/foreach}
    
</div>
</body>
</html>