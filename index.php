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
<title><?php echo TINICIO?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<!-- Homepage Specific Elements -->
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="scripts/jquery.tabs.setup.js"></script>

<!-- Manejo del Ticker -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js ">
</script>
        
<script type="text/javascript">
function ticker() {
    $('#ticker li:first').slideUp(function() {
        $(this).appendTo($('#ticker')).slideDown();
    });
}
setInterval(ticker, 5000);
</script>

<!-- End Homepage Specific Elements -->
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <p><?php echo ESCUELAT?></p>
      <h1><a href="index.php">Ciadeg - Tec</a></a></h1>
      <p><?php echo CIADEGT?></p>
    </div>
    <div class="fl_right">
      <ul>
        <li><a href="index.php"><?php echo INICIOTOP?></a></li>
        <li><a href="#"><?php echo CONTACTOTOP?></a></li>
        <li><?php echo "<a href= 'index.php?idioma=en'>".CAMBIOIDIOMAEN."</a>" ?></li>
        <li class="last"> <?php echo "<a href= 'index.php?idioma=es'>".CAMBIOIDIOMAES."</a>" ?></li>
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
        <li class="first active"><a href="index.php"><?php echo INICIO?></a></li>
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
<div class="wrapper">
  <div id="featured_slide" class="clear">
    <!-- ###### -->
    <div class="overlay_left"></div>
    <div id="featured_content">
      <div class="featured_box" id="fc1"><img src="images/demo/slider/lab1.jpg" alt="" />
        <div class="floater">
          <h2><?php echo ACERCADE?></h2>
          <p class="justify"><?php echo TEXTACERCA?></p>
          <p class="readmore"><a href="Descripcion.php"><?php echo CONTINUEL?> &raquo;</a></p>
        </div>
      </div>
      <div class="featured_box" id="fc2"><img src="images/demo/slider/economia experimental.jpg" alt="" />
        <div class="floater">
          <h2><?php echo LEXTEC?></h2>
          <p class="justify"><?php echo TEXTLEXTEC?></p>
          <p class="readmore"><a href="http://www.d-economics.com"><?php echo IRPAGINA?> &raquo;</a></p>
        </div>
      </div>
      <div class="featured_box" id="fc3"><img src="images/demo/slider/metodo ejecucion.jpg" alt="" />
        <div class="floater">
          <h2><?php echo PROYVIGENTE?></h2>
          <p class="justify"><?php echo TEXTVIGENTE?></p>
          <p class="readmore"><a href="ProyectosVigentes.php"><?php echo CONTINUEL?> &raquo;</a></p>
        </div>
      </div>
      <div class="featured_box" id="fc4"><img src="images/demo/slider/en progreso.jpg" alt="" />
        <div class="floater">
          <h2><?php echo PROYFINALIZADOS?></h2>
          <p class="justify"><?php echo TEXTFINALIZADO?></p>
          <p class="readmore"><a href="Publicaciones.php"><?php echo CONTINUEL?> &raquo;</a></p>
        </div>
      </div>
      <div class="featured_box" id="fc5"><img src="images/demo/slider/finalizados.jpg" alt="" />
        <div class="floater">
          <h2><?php echo SITIOSINT?></h2>
          <p class="justify"><?php echo TEXTSITIOS?></p>
          <p class="readmore"><a href="Sitios.php"><?php echo CONTINUEL?> &raquo;</a></p>
        </div>
      </div>
    </div>
    <ul id="featured_tabs">
      <li><a href="#fc1"><?php echo ACERCADE?></a></li>
      <li><a href="#fc2"><?php echo LEXTEC?></a></li>
      <li><a href="#fc3"><?php echo PROYVIGENTE?></a></li>
      <li><a href="#fc4"><?php echo PROYFINALIZADOS?></a></li>
      <li class="last"><a href="#fc5"><?php echo SITIOSINT?></a></li>
    </ul>
    <div class="overlay_right"></div>
    <!-- ###### -->
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <!-- ####################################################################################################### -->
      <div id="homepage" class="clear">
       <!-- ###### -->
        <div class="justify" id="center_column">
          <h2><?php echo SALUDO?></h2>
          <?php echo PARRAFO1?><br><br><br>          
        </div>
        <!-- ###### -->
       <div id="left_column">
          <!-- <h2><?php echo REGISTROI?></h2>
          <div class="imgholder"><a href="#"><img src="images/demo/<?php echo IMAGEREGISTRO?>" alt="" /></a></div>
           <div class="imgholder"><a href="#"><img src="images/demo/<?php echo IMAGENSESION?>" alt="" /></a></div>-->
        </div>
        <!-- ###### -->
        <div id="latestnews">
          <h2><?php echo EVENTOSI?></h2>
          <ul id="ticker">
               <li><?php echo EVENTOSI1 ?><a href="http://d-economics.com/Evento1.php"><?php echo CONTINUEL?> &raquo;</a></li>
               <li><?php echo EVENTOSI2 ?><a href="http://d-economics.com/Evento2.php"><?php echo CONTINUEL?> &raquo;</a></li>
               <li><?php echo EVENTOSI3 ?><a href="http://d-economics.com/Evento3.php"><?php echo CONTINUEL?> &raquo;</a></li>
               <li><?php echo EVENTOSI4 ?><a href="EncuentroInvestigacion.php"><?php echo CONTINUEL?> &raquo;</a></li> 
               
          </ul>
          
         <!-- <ul>
            <li class="clear">
              <div class="imgl"><img src="images/Eventos/Economia.jpg" alt="" /></div>
              <div class="latestnews">
                <p><a href="Evento1.php"><?php echo EVENTOSI1?></a></p>
                <p class="justify"><?php echo TXTEVENTOSI1?></p>
              </div>
            </li>
            <li class="clear">
              <div class="imgl"><img src="images/Eventos/Encuentro1.jpg" alt="" /></div>
              <div class="latestnews">
                <p><a href="Evento2.php"><?php echo EVENTOSI2?></a></p>
                <p class="justify"><?php echo TXTEVENTOSI2?></p>
              </div>
            </li>
            <li class="last clear">
              <div class="imgl"><img src="images/Eventos/Perdida.jpg" alt="" /></div>
              <div class="latestnews">
                <p><a href="Evento3.php"><?php echo EVENTOSI2?></a></p>
               <p class="justify"> <?php echo TXTEVENTOSI3?></p>
              </div>
            </li>
          </ul> -->
        </div>
        <!-- ###### -->
       <div id="right_column">
           <!--<div class="holder">
            <h2><?php echo ECONOMIA?></h2>
            <iframe width="230" height="236" src="//www.youtube.com/embed/mBUGKeq_QfU" frameborder="0" allowfullscreen>
            </iframe></div>-->

        </div>
      </div>
        <!-- ###### -->
    </div>
      <!-- ####################################################################################################### -->
     <!-- <div id="twitter" class="clear">
        <div class="fl_left"><a href="https://twitter.com"><?php echo SIGUENOS?></a></div>
        <div class="fl_right"><?php echo TEXTOSIG?></div>
      </div> -->
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
        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1965.477686797198!2d-83.90974188254997!3d9.854111213322867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0df8c91f7ca25%3A0x113f04205aacd4c9!2sTecnol%C3%B3gico+de+Costa+Rica!5e0!3m2!1ses!2ses!4v1394118322511"><?php echo ENCUENTRANOS  ?> &raquo;</a></div>
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
            <li><a style="background-position:0 0;" href="https://twitter.com">Twitter</a></li>
            <li><a style="background-position:-72px 0;" href="#">LinkedIn</a></li>
            <li><a style="background-position:-142px 0;" href="https://www.facebook.com/pages/Lex-Tec/256493661198822?fref=ts">Facebook</a></li>  
          </ul>
        </div>        
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