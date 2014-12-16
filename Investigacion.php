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
<title><?php echo TINVESTIGACION?></title>
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
        <li><?php echo "<a href= 'Investigacion.php?idioma=en'>".CAMBIOIDIOMAEN."</a>" ?></li>
        <li class="last"> <?php echo "<a href= 'Investigacion.php?idioma=es'>".CAMBIOIDIOMAES."</a>"?></li>
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
        <li><a href="#"><?php echo INVESTIGACION?></a></li>
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
      <h1><b><?php echo TITULO_INVESTIGACION?></b></h1>
      <br>
      <h2><?php echo SUBTITULO_LINEAS?> </h2>
      <p align="justify">
El Centro trabaja en cuatros líneas de investigación que han sido definidas considerando el talento humano disponible, los intereses del país de acuerdo al Plan Nacional de Desarrollo, los intereses institucionales y la experiencia de los investigadores en los eventos internacionales de investigación. En este sentido se estima conveniente destacar que la participación en pasantías o congresos mundiales ha permitido conocer los temas que se están desarrollando en diferentes países en el campo de la Administración.  <br>
      </p>
      <p align="justify">
      	Además, el Centro desarrolla otros proyectos derivados de las necesidades de la empresa:
		<ul>
            <li>Investigación científica administrativa obedeciendo a intereses específicos del investigador y avalados por el Centro.</li>
            <li>Investigación administrativa aplicada directamente a la empresa en el ámbito de la consultoría, apoyo a las actividades de extensión de la Escuela y servicios estadísticos.</li>
		</ul>
      </p>
      <p align="justify">
      A continuación se detallan las líneas de investigación establecidas por el CIADEG-TEC: 
      </p>
      <p align="justify">
      			<?php echo TEXTO_LINEA_1 ?> <br><br><br>
                <?php echo TEXTO_LINEA_2 ?> <br><br><br>
                <?php echo TEXTO_LINEA_3 ?> <br><br><br>
                <?php echo TEXTO_LINEA_4 ?> <br><br><br>
      </p>
      <h2><?php echo SUBTITULO_POROGRAMAS?> </h2>
      <p align="justify">
      			<?php echo TEXTO_PROYECTOS_VIGENTES ?>
                <a href="ProyectosVigentes.php"><?php echo LEER_MAS_PROYECTOS ?></a>
                <br><br>
                
                <?php echo TEXTO_PROYECTOS_FINALIZADOS ?>
                <a href="ProyectosFinalizados.php"><?php echo LEER_MAS_PROYECTOS ?></a>
                <br><br>
                
                <?php echo TEXTO_PROPUESTAS_ACTIVAS ?>
                <a href="PropuestasActivas.php"><?php echo LEER_MAS_PROYECTOS ?></a>
                <br><br> 
                
                <?php echo TEXTO_PROPUESTAS_2015 ?>
                <a href="Propuestas2015.php"><?php echo LEER_MAS_PROYECTOS ?></a>
                <br><br>
                        
      </p>
      <h2>Publicaciones y Tésis</h2>
      <p align="justify">
      			Publicaciones, tésis, sus autores y enlace dónde se encuentran disponibles
                <a href="Publicaciones.php"><?php echo LEER_MAS_PROYECTOS ?></a>
                
                
      </p>
      
      
      

	      
    
      
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
