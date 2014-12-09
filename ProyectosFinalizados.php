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
<title><?php echo TPFINALIZADOS?></title>
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
        <li><?php echo "<a href= 'ProyectosFinalizados.php?idioma=en'>".CAMBIOIDIOMAEN."</a>" ?></li>
        <li class="last"> <?php echo "<a href= 'ProyectosFinalizados.php?idioma=es'>".CAMBIOIDIOMAES."</a>"?></li>
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
      <h1><b><?php echo TITULO_PROYECTOS_FINALIZADOS?></b></h1>
      
		<table>
        	<thead>
                <tr>
                    <th width="500"> <b> <?php echo PROYECTOS_FINALIZADOS_NOMBRE?> </b> </th>
                    <th> <b> <?php echo PROYECTOS_FINALIZADOS_COORDINADOR?> </b> </th>
                    <th> <b>Inicio</b> </th>
                    <th> <b>Finalización</b></th>
                </tr>
            </thead>
            <tbody>      
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_1?>  </td>
                <td> Gabriela Víquez Amador </td>
                <td>01/01/2013</td>
                <td>28/02/2014</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_2?>  </td>
                <td> Eugenia Ferreto Gutiérrez </td>
                <td>01/05/2012</td>
                <td>31/12/2013</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_3?>  </td>
                <td> Grettel Brenes Leiva </td>
                <td>31/12/2013</td>
                <td>31/12/2013</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_4?>  </td>
                <td> Eugenia Ferreto Gutiérrez </td>
                <td>01/01/2012</td>
                <td>31/12/2013</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_5?>  </td>
                <td> Ricardo Monge González  </td>
                <td>01/01/2012</td>
                <td>31/12/2013</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_6?>  </td>
                <td> Ronald Mora Esquivel </td>
                <td>01/01/2012</td>
                <td>31/12/2012</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_7?>  </td>
                <td> Ronald Mora Esquivel </td>
                <td>01/01/2011</td>
                <td>31/12/2012</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_8?>  </td>
                <td> Ronald Mora Esquivel </td>
                <td>31/12/2012</td>
                <td>30/06/2013</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_9?>  </td>
                <td> Gustavo Cubillo Salas </td>
                <td>01/01/2011</td>
                <td>31/12/2013</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_10?>  </td>
                <td> Ronald Brenes Sánchez </td>
                <td>01/01/2011</td>
                <td>31/12/2012</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_11?>  </td>
                <td> Oscar Acevedo Witford </td>
                <td>01/01/2011</td>
                <td>31/12/2011</td>
	      	</tr> 
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>           
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_12?>  </td>
                <td> Juan Carlos Leiva Bonilla </td>
                <td>01/01/2010</td>
                <td>31/12/2011</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_13?>  </td>
                <td> Daniel Pérez Murillo </td>
                <td>01/01/2010</td>
                <td>31/12/2011</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_14?>  </td>
                <td> Alejandro Masis Arce </td>
                <td>01/01/2008</td>
                <td>31/12/2010</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_15?>  </td>
                <td> Ronald Mora Esquivel </td>
                <td>01/01/2008</td>
                <td>31/12/2009</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_16?>  </td>
                <td> Gustavo Cubillo Salas  </td>
                <td>01/01/2008</td>
                <td>31/12/2010</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_17?>  </td>
                <td> Mairin Carmona Pineda </td>
                <td>01/01/2008</td>
                <td>31/12/2010</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_18?>  </td>
                <td> Federico Torres Carballo </td>
                <td>01/01/2008</td>
                <td>31/12/2008</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_19?>  </td>
                <td> Juan Carlos Leiva Bonilla </td>
                <td>01/07/2007</td>
                <td>31/12/2008</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_20?>  </td>
                <td> Federico Torres Carballo </td>
                <td>01/01/2007</td>
                <td>30/06/2008</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_21?>  </td>
                <td> Ronald Mora Esquivel </td>
                <td>01/01/2007</td>
                <td>31/12/2008</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_22?>  </td>
                <td> Alejandro Masis Arce </td>
                <td>01/01/2007</td>
                <td>31/12/2007</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_23?>  </td>
                <td> Carlos Ramírez Vargas </td>
                <td>01/01/2007</td>
                <td>31/12/2009</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_24?>  </td>
                <td> Juan Carlos Leiva Bonilla </td>
                <td>01/07/2006</td>
                <td>30/06/2007</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_25?>  </td>
                <td> Grettel Castro Portuguez </td>
                <td>01/07/2006</td>
                <td>30/06/2009</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_26?>  </td>
                <td> Oscar Córdoba Artavia </td>
                <td>01/01/2006</td>
                <td>30/06/2008</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_27?>  </td>
                <td> José Martínez Villavicencio </td>
                <td>01/07/2004</td>
                <td>30/06/2006</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_28?>  </td>
                <td> Eileen Barrantes Barrantes </td>
                <td>01/07/2004</td>
                <td>30/06/2005</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_29?>  </td>
                <td> Juan Carlos Leiva Bonilla </td>
                <td>01/01/2004</td>
                <td>01/12/2005</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_30?>  </td>
                <td> Oscar Córdoba Artavia </td>
                <td>01/01/2004</td>
                <td>31/12/2007</td>
	      	</tr>
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_31?>  </td>
                <td> Oscar López Villegas </td>
                <td>01/01/2004</td>
                <td>31/12/2005</td>
	      	</tr> 
            <tr>
            	<td> &nbsp </td>  <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>           
            <tr>
            	<td> <?php echo PROYECTO_FINALIZADO_32?>  </td>
                <td> Antonio Gadea Baltodano </td>
                <td>01/01/2003</td>
                <td>30/06/2005</td>
	      	</tr>
            </tbody>            
            
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
