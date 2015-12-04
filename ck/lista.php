<?php
  mysql_connect("localhost","root","tRtdCds165");
  mysql_select_db("webdb");  
  $re=mysql_query("select titulo, contenido from noticias");
  while($datos=mysql_fetch_array($re))
  {
   echo $datos['titulo'];
   echo "<br>";
   echo $datos['contenido'];
   echo "<br>";
   }
 ?>