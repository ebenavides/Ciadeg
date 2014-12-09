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
<title><?php echo TPACTIVAS?></title>
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
        <li><?php echo "<a href= 'Acerca de - Descripcion.php?idioma=en'>".CAMBIOIDIOMAEN."</a>" ?></li>
        <li class="last"> <?php echo "<a href= 'Acerca de - Descripcion.php?idioma=es'>".CAMBIOIDIOMAES."</a>"?></li>
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
      <h1><b><?php echo TITULO_PROPUESTAS_ACTIVAS?></b></h1>
      
		<table >
        	<tr>
            	<td width="650"> <b> <?php echo NOMBRE_PROPUESTA_ACTIVA?> </b> </td>
                <td> <b> <?php echo NOMBRE_INVESTIGADOR_PROPUESTA?> </b> </td>
	      	</tr>      
            <tr>   <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTA_ACTIVA_1?>  </td>
                <td> Dr. Jaime Solano, MAE Dyalá del O, MAE Johny Poveda, José Martínez </td>
	      	</tr>
           	<tr>   <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTA_ACTIVA_2?>  </td>
                <td> Dr. Federico Torres, Dra. Hannia Rodríguez </td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTA_ACTIVA_3?>  </td>
                <td> Dr. Federico Torres, Dr. Gerardo Lee </td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTA_ACTIVA_4?>  </td>
                <td> MAE Gonzalo Delgado, Dra Grettel Brenes,  MAE Ana Isable Fallas </td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTA_ACTIVA_5?>  </td>
                <td> MBA Haydee Tiffer. Dr. Federico Torres </td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTA_ACTIVA_6?>  </td>
                <td> MBA William Jaubert, M.Sc Ximena Araneda, MAE Ronald Brenes, Dr José Martínez </td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTA_ACTIVA_7?>  </td>
                <td> Dr. Alejandro Masis, MAE Elías Calderón, MAE Oscar Gamboa, MAE Dylá de la O, MAE Luis Garita, MAE Ronald Leandro, Dr José Martínez </td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTA_ACTIVA_8?>  </td>
                <td> Dr. Juan Carlos Leiva, MBA Erick Guillén, Dr. Arnoldo Araya, MBA Rodolfo Carrillo </td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTA_ACTIVA_9?>  </td>
                <td> Dr. José Martínez, MAE Mario Acuña </td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTA_ACTIVA_10?>  </td>
                <td> Dr. Ricardo Monge, MAE Dyalá de la O </td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTA_ACTIVA_11?>  </td>
                <td> Dr. Ricardo Monge, Dr. Juan Carlos Leiva </td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTA_ACTIVA_12?>  </td>
                <td> Dr. Ronald Mora, Maestría Economía Raquel Lafuente, Maestria Ing Industrial Leonel Fonseca </td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTA_ACTIVA_13?>  </td>
                <td> Marta Sáenz, Rytha Picado, Juan Carlos Carvajal, María del Carmen Valverde </td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTA_ACTIVA_14?>  </td>
                <td> Dra. Floria Roa, M.Sc Ana lorena Arias, M.Sc. William Jaubert, M.Sc Natalia Robles, M.Sc Randall Chavés, M.Sc Juan Jospe Valerio </td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTA_ACTIVA_15?>  </td>
                <td> Master Luis Calvo, Der. Federico Torres Master Yarima Sandoval </td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTA_ACTIVA_16?>  </td>
                <td> Silvia Soto Córdoba </td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTA_ACTIVA_17?>  </td>
                <td> M.Sc Maritza Guerrero, M.Sc Arys Carrasquilla, M.Sc Wayner Montero, MAE.Luis Garita, Dr. Ronald Mora </td>
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
