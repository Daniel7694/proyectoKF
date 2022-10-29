<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUTUFLÁS</title>
    
    <link rel="stylesheet" href="/css/styles.css">
 



</head>
<body>
    
    <header class="header">
     
    </header>
<div class="container">
    <h1 class="regis">¡REGISTRATE!</h1>
   
</div>
    <div class="formulario"><!-- formulario -->
    <form action="registro.php" method="post">
       
    <label for="Nombre">Nombre</label>
    <input id="Nombre" type="text" name="Nombre" placeholder="  " class="espacio"><br><br>
    <label for="Edad">Edad</label>
    <input id="Edad" type="text" name="Edad" placeholder="" class="espacio"><br><br>
    <label for="Email">Email</label>
    <input id="email" type="email" name="Email" placeholder="" class="espacio"><br><br>
    <label for="Telefono">Telefono</label>
    <input id="telefono" type="telefono" name="Telefono" placeholder="" class="espacio"><br><br>

    <input type="submit" name="register" href="inicio.php"></div>

    
    <?php
      include("registro.php");
      
    
    ?>
      
      

</body>
</html>