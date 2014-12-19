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
      <!-- Segunda Tabla-->
      <br/>
      <br/>
      <h1><b>INVENTARIO DE TESIS DOCTORALES</b></h1>
      
      <p style="text-align:justify">En el año 2006 se lanzó una revista propia de la Escuela de Administración de Empresas,  con el objetivo de estimular la publicación de artículos y promocionar el trabajo de investigación que se realiza.  Se han publicado ocho volúmenes y un total de 96 artículos, los cuales se detallan a continuación:</p>
      
      	<table border=0 cellpadding="20px" >
    	<tr>
            <td align="center"> NÚM </td>
            <td align="center">AUTOR </td>
            <td align="center">TÍTULO DEL ARTÍCULO </td>
            <td align="center">PUBLICADO EN </td>
      	</tr>
      	<tr>
      		<td> 1  </td>
	        <td> Vernor Mesen Figueroa</td>
    	    <td> El tratamiento Contable y los Efectos Financieros y Fiscales de los Arriendos</td>
	        <td> Vol 1 Número 1 2006  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr> 
        
        <tr>
      		<td> 2 </td>
	        <td> Gustavo Vargas Vargas</td>
    	    <td> El servicio al Cliente: ¡Más que un querer un deber!</td>
	        <td> Vol 1 Número 1 2006  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>
        
        <tr>
      		<td> 3 </td>
	        <td> José Joaquin Seco Aguilar</td>
    	    <td> La Inteligencia Emocional Aplicada a la Administración  de Personal</td>
	        <td> Vol 1 Número 1 2006  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>
        
        <tr>
      		<td> 4 </td>
	        <td> Roberto Luna Arocas y Joaquin Campos Torres</td>
    	    <td> Las prácticas de Alto Rendimiento en Recursos Humanos: El caso Español</td>
	        <td> Vol 1 Número 1 2006  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 5 </td>
	        <td> José Martínez Villavicencio</td>
    	    <td> Factores Críticos para el Desempeño Exportador de las Pymes</td>
	        <td> Vol 1 Número 1 2006  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 6</td>
	        <td> Juan Carlos Leiva Bonilla</td>
    	    <td> Pymes Ciclo de Vida y Etapas de su Desarrollo</td>
	        <td> Vol 1 Número 1 2006  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 7 </td>
	        <td> Arnoldo Araya Leandro</td>
    	    <td> Cooperación Empresarial en Pymes</td>
	        <td> Vol 1 Número 1 2006  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 8 </td>
	        <td> Federico Torres Carballo</td>
    	    <td> Es racional, la compra de un Auto Nuevo</td>
	        <td> Vol 1 Número 2 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 9 </td>
	        <td> Grettel Brenes Leiva</td>
    	    <td> Emprendedores Costarricenses: Revelando Algunos de sus Secretos</td>
	        <td> Vol 1 Número 2 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 10 </td>
	        <td> Francisco Martínez Villavicencio</td>
    	    <td> El Gerente Financiero como Socio Estratégico en la Supervivencia Empresarial</td>
	        <td> Vol 1 Número 2 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 11 </td>
	        <td>Sergio Espinoza Guido</td>
    	    <td> Cómo Preparar el Plan de Tecnologías de Información para su Empresa</td>
	        <td> Vol 1 Número 2 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 12 </td>
	        <td> Francisco Puig Blanco, Esmeralda Linares Navarro y José Pla Barber</td>
    	    <td> El control y la confianza: Dos rivales en las International Joint Ventures</td>
	        <td> Vol 1 Número 2 2007  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 13 </td>
	        <td> Gerardo Lee Rojas</td>
    	    <td> Como iniciar el proceso de mercadeo en la empresa</td>
	        <td> Vol 1 Número 2 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 14 </td>
	        <td> Vernor Mesén Figueroa</td>
    	    <td> Los activos biológicos un nuevo concepto, un nuevo criterio contable</td>
	        <td> Vol 1 Número 3 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 15 </td>
	        <td> Manrique Hernández Ramírez</td>
    	    <td> El análisis de proyectos de inversión por la vía de las opciones</td>
	        <td> Vol 1 Número 3 2007  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 16 </td>
	        <td> Gustavo A. Arias Masis y Ronald Mora Esquivel</td>
    	    <td> Coasting: un ambicioso programa de investigación que combinó diferentes estrategias</td>
	        <td> Vol 1 Número 3 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 17 </td>
	        <td> Ricardo Monge González</td>
    	    <td> Innovación en las empresas costarricenses </td>
	        <td> Vol 1 Número 3 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 18 </td>
	        <td> Lizette Brenes Bonilla y Juan Carlos Leiva Bonilla</td>
    	    <td> Observatorio costarricense de las MIPYMES: Información y conocimiento para la competitividad sostenible</td>
	        <td> Vol 1 Número 3 2007  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 19 </td>
	        <td> Isabel Barrientos Blanco, Herla Pineda Segura y Carlos Alberto Valverde Brealey</td>
    	    <td> ¿Pierde atractivo el mercado bursátil?</td>
	        <td> Vol 1 Número 3 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 20 </td>
	        <td> Juan Quirós Sáenz</td>
    	    <td> Los retos del mercadeo actual</td>
	        <td> Vol 1 Número 4 2007  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 21 </td>
	        <td> Ronald Leandro Elizondo</td>
    	    <td> Primero hacemos gente antes que productos y servicios” mejoramiento de la productividad a través de la  administración participativa</td>
	        <td> Vol 1 Número 4 2007  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 22 </td>
	        <td>José Martínez Villavicencio</td>
    	    <td> Factores que inciden en el  desempeño exportador de las pymes: una aplicación empírica</td>
	        <td> Vol 1 Número 4 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 23 </td>
	        <td> José Manuel Comeche Martínez, Francisco Pomer Murgui y Francisco Puig Blanco </td>
    	    <td> El spin-off como elemento emprendedor y dinamizador de la red empresarial</td>
	        <td>Vol 1 Número 4 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 24 </td>
	        <td> Vernor Mesén Figueroa</td>
    	    <td>  Alianzas estratégicas: su naturaleza, características y criterios de contabilización</td>
	        <td> Vol 2 Número 1 2008  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 25 </td>
	        <td>Inmaculada Martín Rojo y Ana I. Gaspar González</td>
    	    <td>  La cooperación empresarial como forma de crecimiento: las nuevas redes de empresas en el sector turístico</td>
	        <td> Vol 2 Número 1 2008  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 26 </td>
	        <td> Johnny Poveda Mora</td>
    	    <td> Desarrolle una mente creativa y consiga nuevas ideas para su negocio</td>
	        <td> Vol 2 Número 1 2008 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 27 </td>
	        <td> Juan Carlos Leiva Bonilla</td>
    	    <td> ¿Nacen empresas de las actividades de fomento al espíritu emprendedor? Un vistazo a empresas surgidas del Concurso Nacional de Emprendedores y el Programa de Formación en Espíritu Emprendedor del TEC</td>
	        <td> Vol 2 Número 1 2008 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 28 </td>
	        <td> Grettel Benes Leiva y Fidel León Darder</td>
    	    <td> Las Born Global: empresas de acelerada internacionalización</td>
	        <td> Vol 2 Número 2 2008  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 29 </td>
	        <td> Gustavo Cubillo Salas  y María del Carmen Saorín Iborra</td>
    	    <td> El efecto de la cultura del país en el estilo de negociación. Una propuesta para el caso de Costa Rica</td>
	        <td> Vol 2 Número 2 2008  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 30 </td>
	        <td> Eduardo Rojas Gómez</td>
    	    <td> La calificación del riesgo soberano</td>
	        <td> Vol 2 Número 2 2008 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 31 </td>
	        <td> Luis Alejandro Garita Pacheco</td>
    	    <td> La Didáctica Universitaria en el Contexto de la Andragogía: Aprender a aprender en la educación de personas adultas</td>
	        <td> Vol 2 Número 2 2008 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 32 </td>
	        <td> Manrique Hernández Ramírez</td>
    	    <td> Finanzas modernas para los mercados latinoamericanos</td>
	        <td> Vol 2 Número 3 2008 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 33 </td>
	        <td> Juan Manuel Berbel Pineda</td>
    	    <td> La internacionalización de las cadenas hoteleras españolas en América latina </td>
	        <td> Vol 2 Número 3 2008 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 34 </td>
	        <td> Henry J. Quesada Pineda, Raquel Lafuente Chryssopoulos, Marcela Meneses Guzmán, Óscar Gamboa Calderón</td>
    	    <td>Encadenamientos productivos y su relación con la inversión directa extranjera</td>
	        <td> Vol 2 Número 3 2008  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 35 </td>
	        <td> Shirley Benavides Vindas</td>
    	    <td> Capacitación, conocimiento y competitividad de las MIPYMES formales costarricenses</td>
	        <td> Vol 2 Número 3 2008 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 36 </td>
	        <td> Frank Lavagni Bolaños y Luis Alberto García González</td>
    	    <td> Comportamiento accionario según el análisis de Fourier</td>
	        <td> Vol 3 Número 1-2 2009  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 37 </td>
	        <td> Vernor Mesén Figueroa</td>
    	    <td> El riesgo de auditoria y sus efectos sobre el trabajo del auditor independiente</td>
	        <td> Vol 3 Número 1-2 2009  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 38 </td>
	        <td> María del Val Segarra Oña  y Blanca de Miguel Molina </td>
    	    <td> Evaluación de la concentración industrial sinérgica: propuesta metodológica y aplicación a un sector industrial</td>
	        <td> Vol 3 Número 1-2 2009  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 39 </td>
	        <td> Maria del Mar Alonso Almeida</td>
    	    <td> La importancia del uso de Internet en el gobierno de la empresa para generar confianza</td>
	        <td>Vol 3 Número 1-2 2009 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 40 </td>
	        <td> Inmaculada Martín Rojo </td>
    	    <td> La responsabilidad social corporativa de empresas privadas y de la administración pública   Especial referencia al turismo residencial</td>
	        <td> Vol 3 Número 1-2 2009 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 41 </td>
	        <td> Luis Carlos Arraut Camargo, Jairo Duque Ramírez y Paola Amar Sepúlveda</td>
    	    <td> Hacia un modelo de emprendimiento de innovación abierta socialmente responsable: caso Universidad Tecnológica de Bolívar  en Colombia</td>
	        <td> Vol 3 Número 1-2 2009 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 42 </td>
	        <td> Marta Coronel de Renolfi y Gabriela Cardona</td>
    	    <td> Tipificación de pymes mediante técnicas de análisis multivariado. El caso de la ciudad de Santiago del Estero, Argentina </td>
	        <td> Vol 3 Número 1-2 2009 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 43 </td>
	        <td> Gabael Armas Vallejos</td>
    	    <td> Acuerdos de cooperación municipal para el apoyo y fortalecimiento de la microempresa </td>
	        <td> Vol 3 Número 3 2009  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 44 </td>
	        <td> Sandra Lucia Bolaños Delgado, María Inés Pantoja Villarreal y Álvaro Jiménez Villota</td>
    	    <td> Emprendimientos locales: el caso de las empresas familiares en El sur occidente colombiano</td>
	        <td> Vol 3 Número 3 2009  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 45 </td>
	        <td> Manrique Hernández Ramírez </td>
    	    <td> Finanzas conductuales: un enfoque para Latinoamérica</td>
	        <td> Vol 3 Número 3 2009  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 46 </td>
	        <td>Arnoldo Araya Leandro </td>
    	    <td> El proceso de internacionalización de empresas</td>
	        <td> Vol 3 Número 3 2009  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 47 </td>
	        <td> Lorenzo Revuelto Taboada y Rafael Fernández Guerrero</td>
    	    <td> La utilidad del análisis de grupos estratégicos para la identificación de opciones estratégicas de éxito</td>
	        <td> Vol 3 Número 3 2009 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 48 </td>
	        <td> Vernor Mesén Figueroa</td>
    	    <td> Contabilización de contratos de futuros, opciones, forwards y swaps</td>
	        <td> Vol 4 Número 1 2010  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 49 </td>
	        <td> Luis Miret Pastor y María del Val Segarra Oña</td>
    	    <td> El papel de los mercados locales laborales en la aglomeración industrial y cómo las economías externas explican la importancia del territorio</td>
	        <td> Vol 4 Número 1 2010 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 50 </td>
	        <td> Antonia Mercedes García Cabrera y María Gracia García Soto</td>
    	    <td> Ecosistema emprendedor para las empresas de base tecnológica: visión basada en los recursos</td>
	        <td> Vol 4 Número 1 2010  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 51 </td>
	        <td> Manrique Hernandez Ramírez y Ronald Mora Esquivel</td>
    	    <td> Diseño de un modelo de estimación de retornos ajustados por riesgo para actividades de valoración en mercados emergentes: la experiencia costarricense</td>
	        <td> Vol 4 Número 1 2010 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 52 </td>
	        <td> Lucía Mercedes Mauro y Fernando Manuel Graña</td>
    	    <td> La capacitación de recursos humanos y los servicios tecnológicos como herramientas para la mejora competitiva: el caso de la región Mar de Plata, Argentina</td>
	        <td> Vol 4 Número 1 2010 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 53 </td>
	        <td> Salvador Vivas López</td>
    	    <td> Aprendizaje, creación y gestión del conocimiento: evidencias en la gran empresa española.</td>
	        <td> Vol 4 Número 2 2010  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 54 </td>
	        <td> Silvia Morales Gualdrón</td>
    	    <td> El emprendedor académico español: su perfil y  motivaciones para convertirse en empresario</td>
	        <td> Vol 4 Número 2 2010 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 55 </td>
	        <td> Henry Quesada, Marcela Meneses y Guido Monge</td>
    	    <td> Evaluación del “Premio a la Excelencia para la alta calidad y desempeño” en Costa Rica.</td>
	        <td> Vol 4 Número 2 2010 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 56 </td>
	        <td> María Cristina Hernández y Paola Podestá</td>
    	    <td> Formulación de una metodología de formación y evaluación en empresarismo bajo un modelo de competencias</td>
	        <td> Vol 4 Número 2 2010 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 57 </td>
	        <td> Lucia Mercedes Mauro y Fernando Graña</td>
    	    <td> Conducta innovadora en el sector industrial el caso de pequeñas y medianas empresas en mar del plata, argentina</td>
	        <td>Vol 4 Número 3 2010  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 58 </td>
	        <td> Francisco Rodríguez y Tomás Gómez Navarro</td>
    	    <td>El manual fim, modelo de excelencia organizacional: un instrumento para proyectos de asistencia técnica integral a pymes</td>
	        <td> Vol 4 Número 3 2010 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 59 </td>
	        <td> Manrique Hernández Ramírez </td>
    	    <td> Neurofinanzas: cuando las decisiones financieras no son racionales</td>
	        <td> Vol 4 Número 3 2010 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 60 </td>
	        <td> María Virginia Baptista, María del Fátima León y Cesar León</td>
    	    <td>Neuromarketing</td>
	        <td> Vol 4 Número 3 2010 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 61 </td>
	        <td> Ricardo Monge González y Juan Antonio Rodríguez Álvarez</td>
    	    <td> Caracterización de las pymes en Costa Rica mediante el empleo del análisis de conglomerados o clúster</td>
	        <td> Vol 5 Número 1 2011  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 62 </td>
	        <td> Gonzalo Maldonado Guzmán, María del Carmen Martínez Serna; Octavio Hernández Castorena; Domingo García Pérez de Lema.</td>
    	    <td> El impacto de los procesos de producción en el rendimiento de la pyme manufacturera de México: un estudio empírico</td>
	        <td> Vol 5 Número 1 2011 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 63 </td>
	        <td> Pilar Valencia de Lara y Juana Patlán Pérez</td>
    	    <td> El empresario descubridor de oportunidades de mercado: puntos centrales de la teoría de kirzner</td>
	        <td> Vol 5 Número 1 2011  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 64 </td>
	        <td> Diego Valerio Alfaro, Jimmy Segura Castillo y Nelson Gutiérrez García</td>
    	    <td> Análisis de creación de valor económico
para empresas del sector textil </td>
	        <td> Vol 5 Número 1 2011 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 65 </td>
	        <td> Lluis Miret-Pastor , Maria-del-Val Segarra-Oña y Ángel Peiró-Signes</td>
    	    <td> ¿Cómo medimos la eco innovación? análisis de indicadores en el sector turístico</td>
	        <td> Vol 5 Número 2, 2011 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 66 </td>
	        <td> Henry J. Quesada-Pineda y Marcela Meneses Guzmán</td>
    	    <td> Determinación de un modelo de negocios para apoyar el desarrollo de la pequeña y mediana empresa  basado en casos de éxito</td>
	        <td> Vol 5 Número 2, 2011 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 67 </td>
	        <td> Federico Quesada Chaves</td>
    	    <td> La estructura en empresas de internacionalización acelerada o born globals</td>
	        <td> Vol 5 Número 2, 2011 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 68 </td>
	        <td> Silvia Ferrada Vergara y Víctor Manuel Rolando Valencia Pozo </td>
    	    <td>  El marketing actual: ajeno y distante de la mujer y de su importancia como agente dentro del proceso de compra</td>
	        <td> Vol 5 Número 2, 2011  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 69 </td>
	        <td> Monge Ricardo,   Leiva Juan Carlos y Vidal Alegre Joaquín</td>
    	    <td>Creación de Empresas por parte de Ex Empleados de Empresas Multinacionales de alta tecnología en Costa Rica </td>
	        <td> Vol 5, Número 3, 2011  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 70 </td>
	        <td> Pilar Valencia de Lara y Juana Patlán Pérez</td>
    	    <td> El empresario innovador y su relación con el desarrollo económico </td>
	        <td> Vol 5, Número 3, 2011  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 71 </td>
	        <td> Vernor Mesén Figueroa</td>
    	    <td> Fidelización de clientes: concepto y perspectiva contable</td>
	        <td> Vol 5, Número 3, 2011  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 72 </td>
	        <td> Ruth Noemí Ojeda López y Olivia Jiménez Diez</td>
    	    <td> Responsabilidad social empresarial en el sector servicios de Mérida, Yucatán</td>
	        <td> Vol 5, Número 3, 2011 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
        
                     <tr>
      		<td> 73 </td>
	        <td> Lizette Brenes Bonilla y Ligia Bermúdez Mesén</td>
    	    <td> Propuesta de un índice para la medición de democracia económica en Costa Rica</td>
	        <td> Vol 6, Número 1, 2012 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 74 </td>
	        <td> María del Val Segarra Oña, Paloma Merello Giménez, Marina Segura Maroto. Ángel Peiró Signesy Concepción Maroto Álvarez. </td>
    	    <td> Proactividad medioambiental en la empresa: clasificación empírica y determinación de aspectos clave </td>
	        <td> Vol 6, Número 1, 2012 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 75 </td>
	        <td> Juan Manuel Berbel Pineda, María A. Ramón Jerónimo, Rosario Vázquez Carrasco. </td>
    	    <td> La selección de mercados preferentes como clave en la internacionalización empresarial</td>
	        <td> Vol 6, Número 1, 2012 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 76 </td>
	        <td> Arnoldo Araya Leandro</td>
    	    <td> El proceso de sucesión en la empresa familiar y su impacto en la organización</td>
	        <td>Vol 6, Número 2, 2012</td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 77 </td>
	        <td> Paola Podestá y María Cristina Hernández</td>
    	    <td> Empresas de base cultural y creativa: identificación y clasificación de sus factores críticos de desempeño </td>
	        <td> Vol 6, Número 2, 2012</td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 78 </td>
	        <td> Johnny Poveda Mora y Ronald Leandro Elizondo</td>
    	    <td> An associative entrepreneurship productive plan: the contribution of women entrepreneurs to local economic development: a Costa Rican case study.</td>
	        <td> Vol 6, Número 2, 2012 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 79 </td>
	        <td> Vernor Mesén Figueroa</td>
    	    <td> Capital intelectual: su valoración en el contexto empresarial</td>
	        <td> Vol 6, Número 3, 2012 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 80 </td>
	        <td> Natacha Liseras, Fernando Manuel Graña, Andrea Belmartino y Ana Gennero. </td>
    	    <td> Diferencias en el posicionamiento competitivo entre empresas de indumentaria: evidencia de dos ciudades argentinas</td>
	        <td>Vol 6, Número 3, 2012 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 81 </td>
	        <td> Conrado Carrascosa López, Ángel Peiró Signes, María del Val Segarra Oña</td>
    	    <td> Relación entre mejora continua, innovación y compromiso medioambiental de la gerencia, un estudio empírico</td>
	        <td> Vol 6, Número 3, 2012 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 82 </td>
	        <td> Federico Quesada Chaves y José Pla Barber</td>
    	    <td> Una empresa born global de consultoría en Costa Rica: estructura organizativa lateral y centralizada</td>
	        <td>Vol 7, Número 1, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 83 </td>
	        <td> Sebastián Murillo Pérez, Seth Francisco Ruiz Campos y Jorge Benavides Chacón</td>
    	    <td> Modelo comparativo de índices financieros para la evaluación de la gestión de compañías comparables en Latinoamérica</td>
	        <td> Vol 7, Número 1, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 84 </td>
	        <td> Carla Marchena Segura y Rebeca Marín Alvarado</td>
    	    <td> Propuesta de un modelo alternativo
para mejorar la rentabilidad de los fondos captados por el régimen obligatorio de pensiones complementarias de Costa Rica</td>
	        <td> Vol 7, Número 1, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 85 </td>
	        <td>Rytha Picado Arroyo Ana Cristina Rivas Bustos</td>
    	    <td>Las TIC y las Mipymes costarricenses: situación actual, retos y oportunidades</td>
	        <td> Vol 7, Número 2, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 86 </td>
	        <td> Juan Carlos Leiva Bonilla</td>
    	    <td> ¿Quién crea Mipymes en Costa Rica?</td>
	        <td> Vol 7, Número 2, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 87 </td>
	        <td> Lizette Brenes Bonilla y Ligia Bermúdez Mesén</td>
    	    <td> Condiciones actuales del financiamiento de las Mipymes costarricenses</td>
	        <td> Vol 7, Número 2, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 88 </td>
	        <td> Lizette Brenes Bonilla y Ligia Bermúdez Mesén</td>
    	    <td> Diferencias por género en el emprendimiento empresarial costarricense</td>
	        <td> Vol 7, Número 2, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 89 </td>
	        <td> Nalda Arias Cascante y Shirley León Jiménez</td>
    	    <td> Brechas de género en las mujeres trabajadoras</td>
	        <td> Vol 7, Número 3, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 90 </td>
	        <td> Leonardo Chacón Rodríguez</td>
    	    <td> Costa Rica en el Doing Business: un trámite pendiente.</td>
	        <td> Vol 7, Número 3, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 91 </td>
	        <td> José Alonso Vargas Charpentier. Michelle Barrett Gómez. José Miguel Cordero Rojas.</td>
    	    <td> Modelos para la prevención de bancarrotas empresariales utilizados por el sector  empresarial costarricense</td>
	        <td> Vol 7, Número 3, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 92 </td>
	        <td> Gabriel Espinoza Carro</td>
    	    <td> La participación de las universidades públicas en el capital social de las spin off académicas: una propuesta para su fundamento legal en Costa Rica</td>
	        <td> Vol 7, Número 3, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 93 </td>
	        <td> Grettel Brenes Leiva y Fidel León Darder</td>
    	    <td> Análisis interno de las subsidiarias costarricenses: mecanismos que determinan su contribución al crecimiento</td>
	        <td> Vol 8, Número 1, 2014 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 94 </td>
	        <td> Ricardo Monge González y Juan Antonio Rodríguez Álvarez</td>
    	    <td> El impacto de los servicios financieros y de capacitación en las mi pyme de Costa Rica</td>
	        <td> Vol 8, Número 1, 2014 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 95 </td>
	        <td> Alberto Leer Guillén</td>
    	    <td> RPlaneación estratégica en instituciones del sector público de América Latina</td>
	        <td> Vol 8, Número 1, 2014 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 96 </td>
	        <td> Jorge Isaac Moreno Gómez</td>
    	    <td> La presencia de la familia en la propiedad y la gestión de la empresa y su impacto en la rentabilidad: el caso de Colombia</td>
	        <td> Vol 8, Número 1, 2014 </td>
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
