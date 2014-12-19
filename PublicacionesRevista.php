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
      
      <p style="text-align:justify">En el a�o 2006 se lanz� una revista propia de la Escuela de Administraci�n de Empresas,  con el objetivo de estimular la publicaci�n de art�culos y promocionar el trabajo de investigaci�n que se realiza.  Se han publicado ocho vol�menes y un total de 96 art�culos, los cuales se detallan a continuaci�n:</p>
      
      	<table border=0 cellpadding="20px" >
    	<tr>
            <td align="center"> N�M </td>
            <td align="center">AUTOR </td>
            <td align="center">T�TULO DEL ART�CULO </td>
            <td align="center">PUBLICADO EN </td>
      	</tr>
      	<tr>
      		<td> 1  </td>
	        <td> Vernor Mesen Figueroa</td>
    	    <td> El tratamiento Contable y los Efectos Financieros y Fiscales de los Arriendos</td>
	        <td> Vol 1 N�mero 1 2006  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr> 
        
        <tr>
      		<td> 2 </td>
	        <td> Gustavo Vargas Vargas</td>
    	    <td> El servicio al Cliente: �M�s que un querer un deber!</td>
	        <td> Vol 1 N�mero 1 2006  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>
        
        <tr>
      		<td> 3 </td>
	        <td> Jos� Joaquin Seco Aguilar</td>
    	    <td> La Inteligencia Emocional Aplicada a la Administraci�n  de Personal</td>
	        <td> Vol 1 N�mero 1 2006  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>
        
        <tr>
      		<td> 4 </td>
	        <td> Roberto Luna Arocas y Joaquin Campos Torres</td>
    	    <td> Las pr�cticas de Alto Rendimiento en Recursos Humanos: El caso Espa�ol</td>
	        <td> Vol 1 N�mero 1 2006  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 5 </td>
	        <td> Jos� Mart�nez Villavicencio</td>
    	    <td> Factores Cr�ticos para el Desempe�o Exportador de las Pymes</td>
	        <td> Vol 1 N�mero 1 2006  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 6</td>
	        <td> Juan Carlos Leiva Bonilla</td>
    	    <td> Pymes Ciclo de Vida y Etapas de su Desarrollo</td>
	        <td> Vol 1 N�mero 1 2006  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 7 </td>
	        <td> Arnoldo Araya Leandro</td>
    	    <td> Cooperaci�n Empresarial en Pymes</td>
	        <td> Vol 1 N�mero 1 2006  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 8 </td>
	        <td> Federico Torres Carballo</td>
    	    <td> Es racional, la compra de un Auto Nuevo</td>
	        <td> Vol 1 N�mero 2 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 9 </td>
	        <td> Grettel Brenes Leiva</td>
    	    <td> Emprendedores Costarricenses: Revelando Algunos de sus Secretos</td>
	        <td> Vol 1 N�mero 2 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 10 </td>
	        <td> Francisco Mart�nez Villavicencio</td>
    	    <td> El Gerente Financiero como Socio Estrat�gico en la Supervivencia Empresarial</td>
	        <td> Vol 1 N�mero 2 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 11 </td>
	        <td>Sergio Espinoza Guido</td>
    	    <td> C�mo Preparar el Plan de Tecnolog�as de Informaci�n para su Empresa</td>
	        <td> Vol 1 N�mero 2 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 12 </td>
	        <td> Francisco Puig Blanco, Esmeralda Linares Navarro y Jos� Pla Barber</td>
    	    <td> El control y la confianza: Dos rivales en las International Joint Ventures</td>
	        <td> Vol 1 N�mero 2 2007  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 13 </td>
	        <td> Gerardo Lee Rojas</td>
    	    <td> Como iniciar el proceso de mercadeo en la empresa</td>
	        <td> Vol 1 N�mero 2 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 14 </td>
	        <td> Vernor Mes�n Figueroa</td>
    	    <td> Los activos biol�gicos un nuevo concepto, un nuevo criterio contable</td>
	        <td> Vol 1 N�mero 3 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 15 </td>
	        <td> Manrique Hern�ndez Ram�rez</td>
    	    <td> El an�lisis de proyectos de inversi�n por la v�a de las opciones</td>
	        <td> Vol 1 N�mero 3 2007  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 16 </td>
	        <td> Gustavo A. Arias Masis y Ronald Mora Esquivel</td>
    	    <td> Coasting: un ambicioso programa de investigaci�n que combin� diferentes estrategias</td>
	        <td> Vol 1 N�mero 3 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 17 </td>
	        <td> Ricardo Monge Gonz�lez</td>
    	    <td> Innovaci�n en las empresas costarricenses </td>
	        <td> Vol 1 N�mero 3 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 18 </td>
	        <td> Lizette Brenes Bonilla y Juan Carlos Leiva Bonilla</td>
    	    <td> Observatorio costarricense de las MIPYMES: Informaci�n y conocimiento para la competitividad sostenible</td>
	        <td> Vol 1 N�mero 3 2007  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 19 </td>
	        <td> Isabel Barrientos Blanco, Herla Pineda Segura y Carlos Alberto Valverde Brealey</td>
    	    <td> �Pierde atractivo el mercado burs�til?</td>
	        <td> Vol 1 N�mero 3 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 20 </td>
	        <td> Juan Quir�s S�enz</td>
    	    <td> Los retos del mercadeo actual</td>
	        <td> Vol 1 N�mero 4 2007  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 21 </td>
	        <td> Ronald Leandro Elizondo</td>
    	    <td> Primero hacemos gente antes que productos y servicios� mejoramiento de la productividad a trav�s de la  administraci�n participativa</td>
	        <td> Vol 1 N�mero 4 2007  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 22 </td>
	        <td>Jos� Mart�nez Villavicencio</td>
    	    <td> Factores que inciden en el  desempe�o exportador de las pymes: una aplicaci�n emp�rica</td>
	        <td> Vol 1 N�mero 4 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 23 </td>
	        <td> Jos� Manuel Comeche Mart�nez, Francisco Pomer Murgui y Francisco Puig Blanco </td>
    	    <td> El spin-off como elemento emprendedor y dinamizador de la red empresarial</td>
	        <td>Vol 1 N�mero 4 2007 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 24 </td>
	        <td> Vernor Mes�n Figueroa</td>
    	    <td>  Alianzas estrat�gicas: su naturaleza, caracter�sticas y criterios de contabilizaci�n</td>
	        <td> Vol 2 N�mero 1 2008  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 25 </td>
	        <td>Inmaculada Mart�n Rojo y Ana I. Gaspar Gonz�lez</td>
    	    <td>  La cooperaci�n empresarial como forma de crecimiento: las nuevas redes de empresas en el sector tur�stico</td>
	        <td> Vol 2 N�mero 1 2008  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 26 </td>
	        <td> Johnny Poveda Mora</td>
    	    <td> Desarrolle una mente creativa y consiga nuevas ideas para su negocio</td>
	        <td> Vol 2 N�mero 1 2008 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 27 </td>
	        <td> Juan Carlos Leiva Bonilla</td>
    	    <td> �Nacen empresas de las actividades de fomento al esp�ritu emprendedor? Un vistazo a empresas surgidas del Concurso Nacional de Emprendedores y el Programa de Formaci�n en Esp�ritu Emprendedor del TEC</td>
	        <td> Vol 2 N�mero 1 2008 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 28 </td>
	        <td> Grettel Benes Leiva y Fidel Le�n Darder</td>
    	    <td> Las Born Global: empresas de acelerada internacionalizaci�n</td>
	        <td> Vol 2 N�mero 2 2008  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 29 </td>
	        <td> Gustavo Cubillo Salas  y Mar�a del Carmen Saor�n Iborra</td>
    	    <td> El efecto de la cultura del pa�s en el estilo de negociaci�n. Una propuesta para el caso de Costa Rica</td>
	        <td> Vol 2 N�mero 2 2008  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 30 </td>
	        <td> Eduardo Rojas G�mez</td>
    	    <td> La calificaci�n del riesgo soberano</td>
	        <td> Vol 2 N�mero 2 2008 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 31 </td>
	        <td> Luis Alejandro Garita Pacheco</td>
    	    <td> La Did�ctica Universitaria en el Contexto de la Andragog�a: Aprender a aprender en la educaci�n de personas adultas</td>
	        <td> Vol 2 N�mero 2 2008 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 32 </td>
	        <td> Manrique Hern�ndez Ram�rez</td>
    	    <td> Finanzas modernas para los mercados latinoamericanos</td>
	        <td> Vol 2 N�mero 3 2008 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 33 </td>
	        <td> Juan Manuel Berbel Pineda</td>
    	    <td> La internacionalizaci�n de las cadenas hoteleras espa�olas en Am�rica latina </td>
	        <td> Vol 2 N�mero 3 2008 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 34 </td>
	        <td> Henry J. Quesada Pineda, Raquel Lafuente Chryssopoulos, Marcela Meneses Guzm�n, �scar Gamboa Calder�n</td>
    	    <td>Encadenamientos productivos y su relaci�n con la inversi�n directa extranjera</td>
	        <td> Vol 2 N�mero 3 2008  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 35 </td>
	        <td> Shirley Benavides Vindas</td>
    	    <td> Capacitaci�n, conocimiento y competitividad de las MIPYMES formales costarricenses</td>
	        <td> Vol 2 N�mero 3 2008 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 36 </td>
	        <td> Frank Lavagni Bola�os y Luis Alberto Garc�a Gonz�lez</td>
    	    <td> Comportamiento accionario seg�n el an�lisis de Fourier</td>
	        <td> Vol 3 N�mero 1-2 2009  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 37 </td>
	        <td> Vernor Mes�n Figueroa</td>
    	    <td> El riesgo de auditoria y sus efectos sobre el trabajo del auditor independiente</td>
	        <td> Vol 3 N�mero 1-2 2009  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 38 </td>
	        <td> Mar�a del Val Segarra O�a  y Blanca de Miguel Molina </td>
    	    <td> Evaluaci�n de la concentraci�n industrial sin�rgica: propuesta metodol�gica y aplicaci�n a un sector industrial</td>
	        <td> Vol 3 N�mero 1-2 2009  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 39 </td>
	        <td> Maria del Mar Alonso Almeida</td>
    	    <td> La importancia del uso de Internet en el gobierno de la empresa para generar confianza</td>
	        <td>Vol 3 N�mero 1-2 2009 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 40 </td>
	        <td> Inmaculada Mart�n Rojo </td>
    	    <td> La responsabilidad social corporativa de empresas privadas y de la administraci�n p�blica   Especial referencia al turismo residencial</td>
	        <td> Vol 3 N�mero 1-2 2009 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 41 </td>
	        <td> Luis Carlos Arraut Camargo, Jairo Duque Ram�rez y Paola Amar Sep�lveda</td>
    	    <td> Hacia un modelo de emprendimiento de innovaci�n abierta socialmente responsable: caso Universidad Tecnol�gica de Bol�var  en Colombia</td>
	        <td> Vol 3 N�mero 1-2 2009 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 42 </td>
	        <td> Marta Coronel de Renolfi y Gabriela Cardona</td>
    	    <td> Tipificaci�n de pymes mediante t�cnicas de an�lisis multivariado. El caso de la ciudad de Santiago del Estero, Argentina </td>
	        <td> Vol 3 N�mero 1-2 2009 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 43 </td>
	        <td> Gabael Armas Vallejos</td>
    	    <td> Acuerdos de cooperaci�n municipal para el apoyo y fortalecimiento de la microempresa </td>
	        <td> Vol 3 N�mero 3 2009  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 44 </td>
	        <td> Sandra Lucia Bola�os Delgado, Mar�a In�s Pantoja Villarreal y �lvaro Jim�nez Villota</td>
    	    <td> Emprendimientos locales: el caso de las empresas familiares en El sur occidente colombiano</td>
	        <td> Vol 3 N�mero 3 2009  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 45 </td>
	        <td> Manrique Hern�ndez Ram�rez </td>
    	    <td> Finanzas conductuales: un enfoque para Latinoam�rica</td>
	        <td> Vol 3 N�mero 3 2009  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 46 </td>
	        <td>Arnoldo Araya Leandro </td>
    	    <td> El proceso de internacionalizaci�n de empresas</td>
	        <td> Vol 3 N�mero 3 2009  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 47 </td>
	        <td> Lorenzo Revuelto Taboada y Rafael Fern�ndez Guerrero</td>
    	    <td> La utilidad del an�lisis de grupos estrat�gicos para la identificaci�n de opciones estrat�gicas de �xito</td>
	        <td> Vol 3 N�mero 3 2009 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 48 </td>
	        <td> Vernor Mes�n Figueroa</td>
    	    <td> Contabilizaci�n de contratos de futuros, opciones, forwards y swaps</td>
	        <td> Vol 4 N�mero 1 2010  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 49 </td>
	        <td> Luis Miret Pastor y Mar�a del Val Segarra O�a</td>
    	    <td> El papel de los mercados locales laborales en la aglomeraci�n industrial y c�mo las econom�as externas explican la importancia del territorio</td>
	        <td> Vol 4 N�mero 1 2010 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 50 </td>
	        <td> Antonia Mercedes Garc�a Cabrera y Mar�a Gracia Garc�a Soto</td>
    	    <td> Ecosistema emprendedor para las empresas de base tecnol�gica: visi�n basada en los recursos</td>
	        <td> Vol 4 N�mero 1 2010  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 51 </td>
	        <td> Manrique Hernandez Ram�rez y Ronald Mora Esquivel</td>
    	    <td> Dise�o de un modelo de estimaci�n de retornos ajustados por riesgo para actividades de valoraci�n en mercados emergentes: la experiencia costarricense</td>
	        <td> Vol 4 N�mero 1 2010 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 52 </td>
	        <td> Luc�a Mercedes Mauro y Fernando Manuel Gra�a</td>
    	    <td> La capacitaci�n de recursos humanos y los servicios tecnol�gicos como herramientas para la mejora competitiva: el caso de la regi�n Mar de Plata, Argentina</td>
	        <td> Vol 4 N�mero 1 2010 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 53 </td>
	        <td> Salvador Vivas L�pez</td>
    	    <td> Aprendizaje, creaci�n y gesti�n del conocimiento: evidencias en la gran empresa espa�ola.</td>
	        <td> Vol 4 N�mero 2 2010  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 54 </td>
	        <td> Silvia Morales Gualdr�n</td>
    	    <td> El emprendedor acad�mico espa�ol: su perfil y  motivaciones para convertirse en empresario</td>
	        <td> Vol 4 N�mero 2 2010 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 55 </td>
	        <td> Henry Quesada, Marcela Meneses y Guido Monge</td>
    	    <td> Evaluaci�n del �Premio a la Excelencia para la alta calidad y desempe�o� en Costa Rica.</td>
	        <td> Vol 4 N�mero 2 2010 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 56 </td>
	        <td> Mar�a Cristina Hern�ndez y Paola Podest�</td>
    	    <td> Formulaci�n de una metodolog�a de formaci�n y evaluaci�n en empresarismo bajo un modelo de competencias</td>
	        <td> Vol 4 N�mero 2 2010 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 57 </td>
	        <td> Lucia Mercedes Mauro y Fernando Gra�a</td>
    	    <td> Conducta innovadora en el sector industrial el caso de peque�as y medianas empresas en mar del plata, argentina</td>
	        <td>Vol 4 N�mero 3 2010  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 58 </td>
	        <td> Francisco Rodr�guez y Tom�s G�mez Navarro</td>
    	    <td>El manual fim, modelo de excelencia organizacional: un instrumento para proyectos de asistencia t�cnica integral a pymes</td>
	        <td> Vol 4 N�mero 3 2010 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 59 </td>
	        <td> Manrique Hern�ndez Ram�rez </td>
    	    <td> Neurofinanzas: cuando las decisiones financieras no son racionales</td>
	        <td> Vol 4 N�mero 3 2010 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 60 </td>
	        <td> Mar�a Virginia Baptista, Mar�a del F�tima Le�n y Cesar Le�n</td>
    	    <td>Neuromarketing</td>
	        <td> Vol 4 N�mero 3 2010 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 61 </td>
	        <td> Ricardo Monge Gonz�lez y Juan Antonio Rodr�guez �lvarez</td>
    	    <td> Caracterizaci�n de las pymes en Costa Rica mediante el empleo del an�lisis de conglomerados o cl�ster</td>
	        <td> Vol 5 N�mero 1 2011  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 62 </td>
	        <td> Gonzalo Maldonado Guzm�n, Mar�a del Carmen Mart�nez Serna; Octavio Hern�ndez Castorena; Domingo Garc�a P�rez de Lema.</td>
    	    <td> El impacto de los procesos de producci�n en el rendimiento de la pyme manufacturera de M�xico: un estudio emp�rico</td>
	        <td> Vol 5 N�mero 1 2011 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 63 </td>
	        <td> Pilar Valencia de Lara y Juana Patl�n P�rez</td>
    	    <td> El empresario descubridor de oportunidades de mercado: puntos centrales de la teor�a de kirzner</td>
	        <td> Vol 5 N�mero 1 2011  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 64 </td>
	        <td> Diego Valerio Alfaro, Jimmy Segura Castillo y Nelson Guti�rrez Garc�a</td>
    	    <td> An�lisis de creaci�n de valor econ�mico
para empresas del sector textil </td>
	        <td> Vol 5 N�mero 1 2011 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 65 </td>
	        <td> Lluis Miret-Pastor , Maria-del-Val Segarra-O�a y �ngel Peir�-Signes</td>
    	    <td> �C�mo medimos la eco innovaci�n? an�lisis de indicadores en el sector tur�stico</td>
	        <td> Vol 5 N�mero 2, 2011 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 66 </td>
	        <td> Henry J. Quesada-Pineda y Marcela Meneses Guzm�n</td>
    	    <td> Determinaci�n de un modelo de negocios para apoyar el desarrollo de la peque�a y mediana empresa  basado en casos de �xito</td>
	        <td> Vol 5 N�mero 2, 2011 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 67 </td>
	        <td> Federico Quesada Chaves</td>
    	    <td> La estructura en empresas de internacionalizaci�n acelerada o born globals</td>
	        <td> Vol 5 N�mero 2, 2011 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 68 </td>
	        <td> Silvia Ferrada Vergara y V�ctor Manuel Rolando Valencia Pozo </td>
    	    <td>  El marketing actual: ajeno y distante de la mujer y de su importancia como agente dentro del proceso de compra</td>
	        <td> Vol 5 N�mero 2, 2011  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 69 </td>
	        <td> Monge Ricardo,   Leiva Juan Carlos y Vidal Alegre Joaqu�n</td>
    	    <td>Creaci�n de Empresas por parte de Ex Empleados de Empresas Multinacionales de alta tecnolog�a en Costa Rica </td>
	        <td> Vol 5, N�mero 3, 2011  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 70 </td>
	        <td> Pilar Valencia de Lara y Juana Patl�n P�rez</td>
    	    <td> El empresario innovador y su relaci�n con el desarrollo econ�mico </td>
	        <td> Vol 5, N�mero 3, 2011  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 71 </td>
	        <td> Vernor Mes�n Figueroa</td>
    	    <td> Fidelizaci�n de clientes: concepto y perspectiva contable</td>
	        <td> Vol 5, N�mero 3, 2011  </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
             <tr>
      		<td> 72 </td>
	        <td> Ruth Noem� Ojeda L�pez y Olivia Jim�nez Diez</td>
    	    <td> Responsabilidad social empresarial en el sector servicios de M�rida, Yucat�n</td>
	        <td> Vol 5, N�mero 3, 2011 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
        
                     <tr>
      		<td> 73 </td>
	        <td> Lizette Brenes Bonilla y Ligia Berm�dez Mes�n</td>
    	    <td> Propuesta de un �ndice para la medici�n de democracia econ�mica en Costa Rica</td>
	        <td> Vol 6, N�mero 1, 2012 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 74 </td>
	        <td> Mar�a del Val Segarra O�a, Paloma Merello Gim�nez, Marina Segura Maroto. �ngel Peir� Signesy Concepci�n Maroto �lvarez. </td>
    	    <td> Proactividad medioambiental en la empresa: clasificaci�n emp�rica y determinaci�n de aspectos clave </td>
	        <td> Vol 6, N�mero 1, 2012 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 75 </td>
	        <td> Juan Manuel Berbel Pineda, Mar�a A. Ram�n Jer�nimo, Rosario V�zquez Carrasco. </td>
    	    <td> La selecci�n de mercados preferentes como clave en la internacionalizaci�n empresarial</td>
	        <td> Vol 6, N�mero 1, 2012 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 76 </td>
	        <td> Arnoldo Araya Leandro</td>
    	    <td> El proceso de sucesi�n en la empresa familiar y su impacto en la organizaci�n</td>
	        <td>Vol 6, N�mero 2, 2012</td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 77 </td>
	        <td> Paola Podest� y Mar�a Cristina Hern�ndez</td>
    	    <td> Empresas de base cultural y creativa: identificaci�n y clasificaci�n de sus factores cr�ticos de desempe�o </td>
	        <td> Vol 6, N�mero 2, 2012</td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 78 </td>
	        <td> Johnny Poveda Mora y Ronald Leandro Elizondo</td>
    	    <td> An associative entrepreneurship productive plan: the contribution of women entrepreneurs to local economic development: a Costa Rican case study.</td>
	        <td> Vol 6, N�mero 2, 2012 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 79 </td>
	        <td> Vernor Mes�n Figueroa</td>
    	    <td> Capital intelectual: su valoraci�n en el contexto empresarial</td>
	        <td> Vol 6, N�mero 3, 2012 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 80 </td>
	        <td> Natacha Liseras, Fernando Manuel Gra�a, Andrea Belmartino y Ana Gennero. </td>
    	    <td> Diferencias en el posicionamiento competitivo entre empresas de indumentaria: evidencia de dos ciudades argentinas</td>
	        <td>Vol 6, N�mero 3, 2012 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 81 </td>
	        <td> Conrado Carrascosa L�pez, �ngel Peir� Signes, Mar�a del Val Segarra O�a</td>
    	    <td> Relaci�n entre mejora continua, innovaci�n y compromiso medioambiental de la gerencia, un estudio emp�rico</td>
	        <td> Vol 6, N�mero 3, 2012 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 82 </td>
	        <td> Federico Quesada Chaves y Jos� Pla Barber</td>
    	    <td> Una empresa born global de consultor�a en Costa Rica: estructura organizativa lateral y centralizada</td>
	        <td>Vol 7, N�mero 1, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 83 </td>
	        <td> Sebasti�n Murillo P�rez, Seth Francisco Ruiz Campos y Jorge Benavides Chac�n</td>
    	    <td> Modelo comparativo de �ndices financieros para la evaluaci�n de la gesti�n de compa��as comparables en Latinoam�rica</td>
	        <td> Vol 7, N�mero 1, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 84 </td>
	        <td> Carla Marchena Segura y Rebeca Mar�n Alvarado</td>
    	    <td> Propuesta de un modelo alternativo
para mejorar la rentabilidad de los fondos captados por el r�gimen obligatorio de pensiones complementarias de Costa Rica</td>
	        <td> Vol 7, N�mero 1, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 85 </td>
	        <td>Rytha Picado Arroyo Ana Cristina Rivas Bustos</td>
    	    <td>Las TIC y las Mipymes costarricenses: situaci�n actual, retos y oportunidades</td>
	        <td> Vol 7, N�mero 2, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 86 </td>
	        <td> Juan Carlos Leiva Bonilla</td>
    	    <td> �Qui�n crea Mipymes en Costa Rica?</td>
	        <td> Vol 7, N�mero 2, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 87 </td>
	        <td> Lizette Brenes Bonilla y Ligia Berm�dez Mes�n</td>
    	    <td> Condiciones actuales del financiamiento de las Mipymes costarricenses</td>
	        <td> Vol 7, N�mero 2, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 88 </td>
	        <td> Lizette Brenes Bonilla y Ligia Berm�dez Mes�n</td>
    	    <td> Diferencias por g�nero en el emprendimiento empresarial costarricense</td>
	        <td> Vol 7, N�mero 2, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 89 </td>
	        <td> Nalda Arias Cascante y Shirley Le�n Jim�nez</td>
    	    <td> Brechas de g�nero en las mujeres trabajadoras</td>
	        <td> Vol 7, N�mero 3, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 90 </td>
	        <td> Leonardo Chac�n Rodr�guez</td>
    	    <td> Costa Rica en el Doing Business: un tr�mite pendiente.</td>
	        <td> Vol 7, N�mero 3, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 91 </td>
	        <td> Jos� Alonso Vargas Charpentier. Michelle Barrett G�mez. Jos� Miguel Cordero Rojas.</td>
    	    <td> Modelos para la prevenci�n de bancarrotas empresariales utilizados por el sector  empresarial costarricense</td>
	        <td> Vol 7, N�mero 3, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 92 </td>
	        <td> Gabriel Espinoza Carro</td>
    	    <td> La participaci�n de las universidades p�blicas en el capital social de las spin off acad�micas: una propuesta para su fundamento legal en Costa Rica</td>
	        <td> Vol 7, N�mero 3, 2013 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 93 </td>
	        <td> Grettel Brenes Leiva y Fidel Le�n Darder</td>
    	    <td> An�lisis interno de las subsidiarias costarricenses: mecanismos que determinan su contribuci�n al crecimiento</td>
	        <td> Vol 8, N�mero 1, 2014 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 94 </td>
	        <td> Ricardo Monge Gonz�lez y Juan Antonio Rodr�guez �lvarez</td>
    	    <td> El impacto de los servicios financieros y de capacitaci�n en las mi pyme de Costa Rica</td>
	        <td> Vol 8, N�mero 1, 2014 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 95 </td>
	        <td> Alberto Leer Guill�n</td>
    	    <td> RPlaneaci�n estrat�gica en instituciones del sector p�blico de Am�rica Latina</td>
	        <td> Vol 8, N�mero 1, 2014 </td>
      	</tr> 
      	
        <tr> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  </tr>   
                     <tr>
      		<td> 96 </td>
	        <td> Jorge Isaac Moreno G�mez</td>
    	    <td> La presencia de la familia en la propiedad y la gesti�n de la empresa y su impacto en la rentabilidad: el caso de Colombia</td>
	        <td> Vol 8, N�mero 1, 2014 </td>
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
