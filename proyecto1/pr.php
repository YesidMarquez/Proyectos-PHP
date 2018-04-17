<!DOCTYPE HTML>
<header class="principal">
     <h1>Mi formulario de contacto HTML5</h1>
     <link type="text/css" rel="stylesheet" href="estilo.css">
 </header>
 <section class="principal">

    <form method="post" action="index.php">

      <a href="" title="HTML link image example">
  <img  alt="imagen html de ejemplo" 
    src="SOPORTES/FOTOS/1088273174.jpg"
    width="120" 
    height="120" 
    border="1"  
    style="border:10px solid #337AB7" />
</a>    
       <label for="nombre">Nombre:</label>
       <input id="nombre" name="nombre" placeholder="Nombre completo">
       <label for="email">Email:</label>
       <input id="email" name="email" type="email" placeholder="ejemplo@email.com">
       <label for="mensaje">Mensaje:</label>
       <textarea id="mensaje" name="mensaje" placeholder="Danos tu mensaje"></textarea>
       <input id="submit" name="submit" type="submit" value="Enviar">
    </form>
     <!-- Aqui irá nuestro formulario -->
 </section>

 