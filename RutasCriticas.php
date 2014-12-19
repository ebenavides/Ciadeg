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
      <h1><b>DESCRIPCIÓN DE RUTAS CRÍTICAS DE INVESTIGACIÓN</b></h1>
      
      
	<table  table border=0 cellpadding="20px" >
    	<thead>
            <th align="center" width="180">COORDINADOR </td>
            <th align="center">EQUIPO DE TRABAJO</td>
            <th align="center">RUTA CRÍTICA DE INVESTIGACIÓN</td>
      	</thead>
      	<tr>
      		<td> Dr. José Martínez Villavicencio </td>
	        <td  style="text-align:justify"> Bernal Martínez Gutiérrez, Rony Rodríguez Barquero, Mario Acuña Sánchez</td>
    	    <td> Pymes de Exportación</td>
      	</tr>
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> </tr> 
        <tr>
      		<td> Dr. Ronald Mora Esquivel </td>
	        <td> Raquel Lafuente Chryssopoulos, Leonel Fonseca</td>
    	    <td> Procesos de innovación en empresas</td>
      	</tr>
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> </tr> 
        <tr>
      		<td> Dr. Federico Torres Carballo </td>
	        <td style="text-align:justify"> Gustavo Cubillo Salas, Yarima Sandoval Sánchez, Haydeé Tiffer Sotomayor, Martín Solís Salazar, Grettel Brenes Leiva, José Vila (Profesor de Universidad de Valencia), Guillermo Mateu(Profesor de Universidad de Dijón), María del Carmen Saorín(Profesor de la Universidad de Valencia)</td>
    	    <td style="text-align:justify"> Aplicación de experimentos económicos en la medición de comportamientos y destrezas del recurso humano</td>
      	</tr>  

      
      </table>

      
      <!-- ####################################################################################################### -->
      <!-- Segunda Tabla-->
      <br/>
      <br/>
      <h1><b>INVESTIGACIONES EN EL TEMA DE PYMES Y EMPRENDEDORES</b></h1>
      <p align="justify">Las investigaciones en el tema de pymes y emprendedores se agrupan de la siguiente forma:</p>
      <br>
      	<table border=0 cellpadding="20px" >
    	<thead>
            <th align="center"> TEMA ESPECÍFICO </td>
            <th align="center">INTEGRANTES </td>
            <th align="center">PERSPECTIVAS </td>
      	</thead>
      	<tr>
      		<td> Pymes exportadoras  </td>
	        <td style="text-align:justify"> José Martínez, Bernal Martínez, Ronny Rodríguez, Mario Acuña, Allan Henderson.  No tiene conexiones internacionales.</td>
    	    <td style="text-align:justify"> Ruta crítica: Las pymes exportadoras.<br>Ya han finalizado algunas investigaciones, tienen en proceso y presentarán otras. Han publicado uno o dos artículos.</td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> </tr>
      
         <tr>
      		<td> Pymes y multinacionales </td>
	        <td style="text-align:justify"> Ricardo Monge, Juan Carlos Leiva, Juan Antonio Rodríguez. Conexiones internacionales: Universidad de Valencia, Banco Interamericano de Desarrollo (BID)</td>
    	    <td style="text-align:justify"> Ruta crítica: La relación entre pymes locales y empresas multinacionales en Costa Rica.<br>
Han estudiado el fenómeno con proyectos ya finalizados y otros en proceso. Han publicado un par de artículos y presentado resultados ante la Asociación Nacional de Empresarios de Zonas Francas, entre otros.</td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> </tr>
        
         <tr>
      		<td> Política pública para pymes </td>
	        <td style="text-align:justify"> Ricardo Monge, Juan Antonio Rodríguez, Juan Carlos Leiva. Conexiones internacionales BID</td>
    	    <td style="text-align:justify"> Ruta crítica: Política pública de apoyo a pymes en temas de encadenamientos, relación con multinacionales y financiamiento. <br>
Se han enfocado en evaluación de impacto de programas como: Propyme, Costa Rica Provee, CIETEC, y financiamiento por una entidad de crédito como Acorde.
			</td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> </tr>
                  
         <tr>
      		<td> Mujeres y emprendimiento </td>
	        <td> Rytha Picado, Eugenia Ferreto. No tiene conexiones internacionales</td>
    	    <td style="text-align:justify"> Ruta crítica: Mujeres en emprendimiento. <br> Tienen un proyecto en proceso y ahora se sumarán al del Observatorio de la Mujer con fondos del Sistema
			</td>
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
