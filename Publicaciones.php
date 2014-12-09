<?php
session_start();
if (isset($_GET["idioma"])) {
$_SESSION["idiomas"] = $_GET["idioma"];
}
elseif (!isset($_SESSION['idiomas']) ){
$_SESSION["idiomas"]=	"es";
}
//se incluye el idioma a manejar

include("lang_".$_SESSION["idiomas"].".php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title><?php echo TPUBLICACIONES?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <p><?php echo ESCUELAT?></p>
      <h1><a href="index.php">Ciadeg - Tec</a></h1>
      <p><?php echo CIADEGT?></p>
    </div>
    <div class="fl_right">
      <ul>
        <li><a href="index.php"><?php echo INICIOTOP?></a></li>
        <li><a href="Contacto.php"><?php echo CONTACTOTOP?></a></li>
        <li><?php echo "<a href= 'Publicaciones.php?idioma=en'>".CAMBIOIDIOMAEN."</a>" ?></li>
        <li class="last"> <?php echo "<a href= 'Publicaciones.php?idioma=es'>".CAMBIOIDIOMAES."</a>"?></li>
        <div align="right"></div>
      </ul>
      <form action="#" method="post" id="sitesearch">
        <fieldset>
          <strong><?php echo BUSCAR?></strong>
          <input type="text" value="<?php echo BUSCARSITIO?>&hellip;" onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="image" src="images/search.gif" id="search" alt="Search" />
        </fieldset>
      </form>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
        <li><a href="index.php"><?php echo INICIO?></a></li>
        <li><a href="Organizacion.php"><?php echo MIEMBROS?></a></li>
        <li><a href="Investigacion.php"><?php echo INVESTIGACION?></a></li>
        <li><a href="Servicios.php"><?php echo OFERTA?></a></li>
        <li><a href="Estudiantes.php"><?php echo ESTUDIANTES?></a></li>
        <li class="last"><a href="Contacto.php"><?php echo CONTACTO?></a></li>
      </ul>
    </div>
    <!-- ###### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <!-- ####################################################################################################### -->
      <h1><b><?php echo TITULO_PUBLICACIONES?></b></h1>
      
      
	<table id="proyectos"  table border=0 cellpadding="20px" >
    	<tr>
            <td align="center"> NUM </td>
            <td align="center"><?php echo PUBLICACIONES_NOMBRE_ARTICULO ?> </td>
            <td align="center"><?php echo PUBLICACIONES_NOMBRE_AUTOR?> </td>
            <td align="center"><?php echo PUBLICACIONES_REVISTA?> </td>
            <td align="center"><?php echo PUBLICACIONES_ACCESO?> </td>
      	</tr>
      	<tr>
      		<td> 1  </td>
	        <td> <?php echo PUBLICACIONES_ARTICULO_1?></td>
    	    <td> Grettel Brenes Leiva y Fidel León Darder</td>
        	<td> Tec Empresarial, .8 (1):19-32. Revista indexada en Latindex, Dialnet, Clase y Ebsco </td>
	        <td> <a href="http://www.tec-digital.itcr.ac.cr/servicios/ojs/index.php/tec_empresarial/article/view/1721"><?php echo LEER_PUBLICACION?></a>  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>
      <tr>
      	<td> 2 </td>
        <td> <?php echo PUBLICACIONES_ARTICULO_2?> </td>
        <td> Alberto Leer Guillén </td>
        <td> Tec Empresarial, .8 (1):19-32. Revista indexada en Latindex, Dialnet, Clase y Ebsco </td>
        <td> <a href="http://www.tec-digital.itcr.ac.cr/servicios/ojs/index.php/tec_empresarial/article/view/1726"><?php echo LEER_PUBLICACION?></a>  </td>
      </tr>
      <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>
      <tr>
      	<td> 3  </td>
        <td> <?php echo PUBLICACIONES_ARTICULO_3?>  </td>
        <td> Ricardo Monge González, Juan Antonio Rodríguez Alvarez y Laura Torrentes García  </td>
        <td> Revista Tecnología en Marcha <br>v.27, no. 3. <br>Revista indexada en Latindex </td>
        <td> No disponible aun </td>
      </tr>
      <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>
      <tr>
      	<td> 4 </td>
        <td> <?php echo PUBLICACIONES_ARTICULO_4?>  </td>
        <td> Ricardo Monge González y Juan Antonio Rodríguez Alvarez  </td>
        <td> Tec Empresarial, .8 (1):19-32. Revista indexada en Latindex, Dialnet, Clase y Ebsco </td>
        <td> <a href="http://www.tec-digital.itcr.ac.cr/servicios/ojs/index.php/tec_empresarial/article/view/1722"><?php echo LEER_PUBLICACION?></a>  </td>
      </tr>
      <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>
      <tr>
      	<td>  5  </td>
        <td> <?php echo PUBLICACIONES_ARTICULO_5?> </td>
        <td> Juan Carlos Leiva, Joaquín Alegre y Ricardo Monge González  </td>
        <td> Revista Estudios Gerenciales,<br> num 30, vol 134. Indexada en:  <br>Latindex, Publindex, Scielo, Clase, <br>Redalyc y directorio Ulrichs </td>
        <td> No disponible aun </td>
      </tr>
      <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>
      <tr>
      	<td> 6 </td>
        <td> <?php echo PUBLICACIONES_ARTICULO_6?>  </td>
          <td> Juan Carlos Leiva, Joaquín Alegre y Ricardo Monge González <br> </td>
          <td> Revista Innovar. Indexada en: ISI, JCR, Scopus, Clase, Latindex y  Redalyc. </td>
          <td> No disponible aun </td>
      </tr>
      <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>
      <tr>
      	<td> 7 </td>
        <td> <?php echo PUBLICACIONES_ARTICULO_7?>  </td>
        <td> Ligia Eugenia Guerrero Vargas, Luis Santiago Vindas Montero y Ana Gabriela Víquez Paniagua <br> </td>
        <td> Tec Empresarial. Aprobada para num. 8. <br>ed 2 de agosto 2014. <br>Revista indexada en Latindex,<br> Dialnet, Clase y Ebsco </td>
        <td> No disponible aun </td>
      </tr>
      <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>
      <tr>
      	<td> 8 </td>
        <td> <?php echo PUBLICACIONES_ARTICULO_8?>  </td>
        <td> CrIstina Morales Sandoval y Alejandro Masis Arce <br> </td>
        <td> Tec Empresarial. Aprobada para num. 8.<br> ed 2 de agosto 2014. <br>Revista indexada en Latindex,<br> Dialnet, Clase y Ebsco </td>
        <td> No disponible aun </td>
      </tr>
      <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>
      <tr>
      	<td> 9 </td> 
        <td> <?php echo PUBLICACIONES_ARTICULO_9?>  </td>
        <td> Eugenia Ferreto y Rytha Picado <br> </td>
        <td> Tecnología en Marcha, número especial Día Internacional de la Mujer. Revista indexada en Latindex. </td>
        <td> <a href="http://www.tec-digital.itcr.ac.cr/servicios/ojs/index.php/tec_marcha/search/authors/view?firstName=Eugenia&middleName=&lastName=Ferreto-Guti%C3%A9rrez&affiliation=&country="><?php echo LEER_PUBLICACION?></a> </td>
      </tr>
      <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>
      <tr>
      	<td> 10 </td> 
        <td> <?php echo PUBLICACIONES_ARTICULO_10?>  </td>
        <td> Federico Torres Carballo y Yarima Sandoval Sánchez <br> </td>
        <td> Journal of Promotion Management <br>Volume 20, Issue 2, 2014 </td>
        <td> <a href="http://www.tandfonline.com/doi/abs/10.1080/10496491.2014.894774#.U9Fz86M3LQA"><?php echo LEER_PUBLICACION?></a> </td>
      </tr>
      
      </table>
                   

	      
    
      
      <!-- ####################################################################################################### -->
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div class="rnd">
    <div id="footer" class="clear">
      <!-- ####################################################################################################### -->
      <div class="fl_left clear">
        <div class="fl_left center"><img src="images/demo/worldmap.gif" alt="" /><br />
          <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1965.477686797198!2d-83.90974188254997!3d9.854111213322867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0df8c91f7ca25%3A0x113f04205aacd4c9!2sTecnol%C3%B3gico+de+Costa+Rica!5e0!3m2!1ses!2ses!4v1394118322511"><?php echo ENCUENTRANOS  ?> &raquo;</a>
          </div>
        <address>
			<?php echo DIRECCION?>
            <br />
            <?php echo INFO?><a href="#">jomartinez@itcr.ac.cr</a>
        </address>
      </div>
      <div class="fl_left center">
        <p><img src="images/Edificio.jpg" alt="" width="132" height="94" /></p>
      </div>
      <div class="fl_right">
        <div id="social" class="clear">
           <p><?php echo CONOCE?></p>
          <ul>
             <li><a style="background-position:0 0;" href="#">Twitter</a></li>
            <li><a style="background-position:-72px 0;" href="#">LinkedIn</a></li>
            <li><a style="background-position:-142px 0;" href="https://www.facebook.com/pages/Lex-Tec/256493661198822?fref=ts">Facebook</a></li>  
          </ul>
        </div>
        <!--<div id="newsletter">
          <form action="#" method="post">
            <fieldset>
              <legend>Subscribe To Our Newsletter:</legend>
              <input type="text" value="Enter Email Here&hellip;" onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
              <input type="text" id="subscribe" value="Submit" />
            </fieldset>
          </form> 
        </div>-->
      </div>
      <!-- ####################################################################################################### -->
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="center">Copyright &copy; 2014 - Ciadeg-Tec</p>
  </div>
</div>
</body>
</html>
