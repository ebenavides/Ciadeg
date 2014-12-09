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
<title><?php echo TCONTACTO?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<!-- 3 Column Stylesheet Added To The Page And Not To The Layout.css -->
<link rel="stylesheet" href="styles/3_column.css" type="text/css" />

<!-- Manejo del Ticker -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js ">
</script>
<script type="text/javascript" src="scripts/contacto.js">
</script>        
<script type="text/javascript">
function ticker() {
    $('#ticker li:first').slideUp(function() {
        $(this).appendTo($('#ticker')).slideDown();
    });
}
setInterval(ticker, 3000);
</script>
<!-- Manejo del Ticker -->
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
        <li><?php echo "<a href= 'Contacto.php?idioma=en'>".CAMBIOIDIOMAEN."</a>" ?></li>
        <li class="last"> <?php echo "<a href= 'Contacto.php?idioma=es'>".CAMBIOIDIOMAES."</a>" ?></li>
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
        <li class="last"><a href="#"><?php echo CONTACTO?></a></li>
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
      <div id="left_column">
        <div class="holder">
          <h2 class="title"></h2>
          <ul class="nostart">
            <li><a href="Descripcion.php"><?php echo ACERCADE?></a></li>
            <li><a href="Servicios.php"><?php echo ACERCASERV?></a></li>
            <li><a href="Sitios.php"><?php echo ACERCASIT?></a></li>           
          </ul>
        </div>        
      </div>
      
      <!-- ############ -->
      <div id="content">
        <h1 class="title"><?php echo CONTACTO?></h1>
         <?php echo ENC_CONTACTO?><br><br> 
         <!-- <form action="enviarCorreo.php" method="post" name="form" id="form"> -->
         <form  method="post" name="form" id="form">
         <p><?php echo NOMBREC?> <br>
			 <input name="nombre" id="nombre" type="text" size="30" maxlength="50">
         
         <br><?php echo CORREO?><br>
             <input name="correo" id="correo" type="text" size="30" maxlength="50">
         
         <br><?php echo MENSAJE  ?><br>
             <textarea name="mensaje" id="mensaje" cols="50" rows="10"></textarea>
        
         </p>
         <p>                
            <input name="submit" type="button" id="submit" value="<?php echo ENVIAR?>"></button> &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="<?php echo RESET?>">
            
         </p>
         </form>        
      </div>
      <!-- ############ -->
      <div id="right_column">
        <div class="holder">
          <h2 class="title"><?php echo EVENTOSI?></h2>
           <div class="apply">
                <ul id="ticker">
                    <li><?php echo EVENTOSI1 ?><a href="Evento1.php"><?php echo CONTINUEL?> &raquo;</a></li>
               	 <li><?php echo EVENTOSI2 ?><a href="Evento2.php"><?php echo CONTINUEL?> &raquo;</a></li>
                 <li><?php echo EVENTOSI3 ?><a href="Evento3.php"><?php echo CONTINUEL?> &raquo;</a></li>
                 <li><?php echo EVENTOSI4 ?><a href="Evento1.php"><?php echo CONTINUEL?> &raquo;</a></li>      
                </ul>
            </div>                       
        </div>        
        </div>
      </div>
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
