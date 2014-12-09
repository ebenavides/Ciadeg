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
<title><?php echo TP2015?></title>
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
        <li><?php echo "<a href= 'Propuestas2015.php?idioma=en'>".CAMBIOIDIOMAEN."</a>" ?></li>
        <li class="last"> <?php echo "<a href= 'Propuestas2015.php?idioma=es'>".CAMBIOIDIOMAES."</a>"?></li>
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
      <h1><b>Propuestas de invetigación 2013-2015</b></h1>
      
		<table >
        <thead>
        	<tr>
            	<th> <b><?php echo NOMBRE_PROY_PROPUESTA_2015?> </b></th>
                <th>Coordinador</th>
                <th> <b><?php echo INVESTIGADORES_PROY_PROPUESTA_2015?> </b> </th>
                <th>Otros investigadores</th>
                <th width="200px">Período</th>
                
	      	</tr>
        </thead>
        <tbody>
        	<tr>
            	<td><b>Propuetas 2013</b></td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>
            	<td>Capacidad de absorci&oacute;n de las peque&ntilde;as y medianas empresas y su importancia en el aprovechamiento  de los derrames de conocimientos desde las empresas multinacionales en Costa Rica</td>
                <td>Juan Carlos Leiva Bonilla</td>
                <td>Juan Carlos Leiva Bonilla, Ricardo Monge González</td>
                <td>&nbsp </td>
                <td>01 de enero de 2013 al 31 de diciembre de 2014</td>
            </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td>La aversión a la pérdida en estudiantes de carreras de ciencia y tecnología</td>
                <td>Federico Torres Carballo</td>
                <td>Federico Torres Carballo, Luis Alexander Calvo Valverde, Yarima Sandoval Sánchez</td>
                <td></td>
                <td>01 de enero de 2013 al 31 de diciembre de 2014</td>
            </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td>Propuesta de un modelo validado de gestión de la innovación en el ámbito universitario: aplicación en el Tecnológico de Costa Rica</td>
                <td>Rytha Picado Arroyo</td>
                <td>Rytha Picado Arroyo, Marta Sáenz Muñoz, María del Carmen Valverde Solano, Juan Carlos Carvajal Morales</td>
                <td></td>
                <td>01 de enero de 2013 al 31 de diciembre de 2014</td>
            </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
           	<tr>
            	<td>Factores que inciden en el desarrollo de la responsabilidad social en el sector hotelero de los cantones de San Carlos y Osa, Costa Rica</td>
                <td>William Jaubert Solano</td>
                <td>William Jaubert Solano, Ximena Araneda Fornachiari, Ronald Brenes Sánchez, José Martínez Villavicencio</td>
                <td></td>
                <td>01 de enero de 2013 al 31 de diciembre de 2014</td>
            </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td>La gestión financiera y su impacto en el desarrollo y éxito de las pequeñas y medianas empresas exportadoras de Costa Rica</td>
                <td>José Martínez Villavicencio</td>
                <td>José Martínez Villavicencio, Mario Acuña Sánchez</td>
                <td></td>
                <td>01 de enero de 2013 al 31 de diciembre de 2014</td>
            </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td>Modelo Medición de la Productividad del Valor Agregado (MPVA) aplicada a PYME en el sector  hotelero casos en Monteverde y La Fortuna </td>
                <td>Alejandro Masís Arce</td>
                <td>Alejandro Masís Arce, Elías Calderón Ortega, Oscar Gamboa Calderón, Dyala de la O Cordero, Ronald Leandro Elizondo, Luis Alejandro Garita Pacheco, José Martínez Villavicencio</td>
                <td></td>
                <td>01 de enero de 2013 al 31 de diciembre de 2014</td>
            </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td>El líder transformacional y su impacto en el comportamiento ciudadano organizacional en empresas costarricenses</td>
                <td>Federico Torres Carballo</td>
                <td>Federico Torres Carballo, Gerardo Lee Rojas</td>
                <td></td>
                <td>01 de enero de 2013 al 31 de diciembre de 2014</td>
            </tr>
      
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td>Desarrollo de un Modelo Integrado de Gestión de Recursos Humanos por Competencias, como herramienta para la creación de Valor Empresarial y Desarrollo Académico</td>
                <td>Grettel Brenes Leiva</td>
                <td>Grettel Brenes Leiva, Gonzalo Delgado Leandro, Ana Isabel Fallas Arias</td>
                <td></td>
                <td>01 de enero de 2013 al 31 de diciembre de 2014</td>
            </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td>Las PYMES y el crecimiento inclusivo en Costa Rica </td>
                <td>Ricardo Monge González</td>
                <td>Ricardo Monge González, Dyala de la O Cordero</td>
                <td></td>
                <td>01 de enero de 2013 al 31 de diciembre de 2014</td>
            </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td>Diseño y construcción de una celda de tratamiento de residuos sólidos municipales utilizando biorreactores a escala industrial</td>
                <td>Silvia Soto Córdoba</td>
                <td>Silvia Soto Córdoba, Ronald Brenes Sánchez, Otros externos a AE</td>
                <td></td>
                <td>01 de junio 2014  al 30 de junio de 2016</td>
            </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td>Hacia una producción más limpia en Latinoamérica a través de la integración de educación ambiental, ingeniería y administración de negocios.</td>
                <td>Floria Roa Gutiérrez</td>
              <td>Floria Roa Gutiérrez, Ana Lorena Arias Zúñiga, William Jaubert Solano, Natalia Robles Obando, Randall Chaves Abarca, Juan José Valerio Vindas</td>
                <td></td>
                <td>01 de enero de 2013 al 31 de diciembre de 2015</td>
            </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
           	<tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <thead>
            <tr>
            	<th> <b><?php echo NOMBRE_PROY_PROPUESTA_2015?> </b></th>
                <th>Coordinador</th>
                <th> <b><?php echo INVESTIGADORES_PROY_PROPUESTA_2015?> </b> </th>
                <th>Otros investigadores</th>
                <th width="200px">Período</th>
                
	      	</tr>
            </thead>
           	<tr>
            	<td><b>Propuestas 2014</b></td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            <tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td>Evaluación de impacto de CIE TEC, Propyme y Costa Rica Provee sobre el salario real promedio, la demanda de empleo y la posibilidad de exportar de la empresas beneficiarias y el efecto "derrame de conocimientos"</td>
                <td>Ricardo Monge González</td>
                <td>Juan Carlos Leiva Bonilla, Ricardo Monge González</td>
                <td></td>
                <td>01 de enero de 2014 al 31 de diciembre de 2015</td>
            </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td>Impacto de la cultura organizativa en la innovación de las empresas</td>
                <td>Ronald Mora Esquivel</td>
                <td>Ronald Mora Esquivel</td>
                <td>Tomás Vargas Halabí, UCR</td>
                <td>01 de enero de 2014 al 31 de diciembre de 2015</td>
            </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td>Impacto del teletrabajo en Costa Rica sobre la productividad laboral y calidad de vida del colaborador</td>
                <td>Bernal Martínez Gutiérrez</td>
                <td>Bernal Martínez Gutiérrez, Ronny Rodríguez Barquero, Ronny Rodríguez Barquero</td>
                <td></td>
                <td>01 de enero de 2014 al 31 de diciembre de 2015</td>
            </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td>Innovaciones organizativas y de comercialización: determinantes e impacto en el desempeño de las empresas</td>
                <td>Ronald Mora Esquivel</td>
                <td>Ronald Mora Esquivel, Ricardo Monge González, Ronald Alvarado Cordero</td>
                <td></td>
                <td>01 de enero de 2014 al 31 de diciembre de 2015</td>
            </tr>
           	<tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td>Comportamiento ciudadano organizacional: Un enfoque experimental de la influencia de la cultura en las empresas que ofrecen servicios de tecnología</td>
                <td>Federico Torres Carballo</td>
                <td>Federico Torres Carballo, Martín Solís Salazar, Grettel Brenes Leiva, Gustavo Cubillo Salas</td>
                <td></td>
                <td>01 de enero de 2014 al 31 de diciembre de 2015</td>
            </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td>Comportamiento intra-emprendedor y su relación con el desempeño innovador en la empresa</td>
                <td>Ronald Mora Esquivel</td>
                <td>Ronald Mora Esquivel, Berman Siles Ortega</td>
                <td>Tomás Vargas Halabí, UCR</td>
                <td>01 de julio de 2014 al 30 de junio de 2015</td>
            </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td>Incidencia de la presión temporal y las relaciones de poder en el comportamiento de negociación: Un estudio comparativo de economía experimental</td>
                <td>Gustavo Cubillo Salas</td>
                <td>Gustavo Cubillo Salas, Federico Torres Carballo, Martín Solís Salazar</td>
                <td>María del Carmen Saorín (Universidad de Valencia), Guillermo Mateu (Universidad de Dijon Francia)</td>
                <td>01 de enero de 2014 al 31 de diciembre de 2015</td>
            </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td>Propensión de los jóvenes costarricenses a incrementar su aporte a la seguridad social o a aumentar los topes de pensión ante mejores beneficios complementarios</td>
                <td>Federico Torres Carballo</td>
                <td>Federico Torres Carballo, Yarima Sandoval Sánchez</td>
                <td></td>
                <td>01 de enero de 2014 al 31 de diciembre de 2015</td>
            </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td>Caracterización del proceso de innovación de empresas manufactureras del sector alimentario de Costa Rica: un estudio exploratorio</td>
                <td>Raquel Lafuente Chryssopoulos</td>
                <td>Raquel Lafuente Chryssopoulos, Ronald Mora Esquivel, Leonel Fonseca Retana</td>
                <td></td>
                <td>01 de enero de 2014 al 31 de diciembre de 2015</td>
            </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <thead>
            <tr>
            	<th> <b><?php echo NOMBRE_PROY_PROPUESTA_2015?> </b></th>
                <th>Coordinador</th>
                <th> <b><?php echo INVESTIGADORES_PROY_PROPUESTA_2015?> </b> </th>
                <th>Otros investigadores</th>
                <th width="200px">Período</th>
                
	      	</tr>
            </thead>
            <tr>
            	<td><b>Propuestas 2015</b></td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>
            </tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTAS_2015_1?>  </td>
                <td>Juan Carlos Leiva Bonilla</td>
                <td> Juan Carlos Leiva,  Ricardo Monge,  Federico Torres </td>
                <td></td>
                <td>01 de enero de 2015 al 31 de diciembre de 2016</td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTAS_2015_2?>  </td>
                <td>Alejandro Masis Arce</td>
                <td> Dyalá de la O, Alejandro Masis </td>
                <td>Dalia Silberstein, Mariana Galli, Alfredo Camhaji</td>
                <td>01 de julio 2015 al 30 de junio 2017</td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTAS_2015_3?>  </td>
                <td></td>
                <td> Dyala de la O, José Martínez, Carmen Castrejón Mata, Héctor Ruiz Rueda, Catherine Keske </td>
                <td></td>
                <td></td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTAS_2015_4?>  </td>
                <td>Ronald Brenes Arce</td>
                <td> Juan Carlos Leiva, Ronald Brenes </td>
                <td></td>
                <td>01 de enero de 2015 al 31 de diciembre de 2016</td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTAS_2015_5?>  </td>
                <td>Oscar Córdoba Artavia</td>
                <td> Oscar Cordoba, Alan Henderson</td>
                <td>Rodolfo Romero (UCR)</td>
                <td>01 de julio 2015 al 30 de junio 2017</td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTAS_2015_6?>  </td>
                <td>José Martinez Villavicencio </td>
                <td> José Martinez, Bernal Martínez, Mario Acuña, Rony Rodríguez </td>
                <td></td>
                <td>01 de julio 2015 al 30 de junio 2017</td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTAS_2015_7?>  </td>
                <td>Ronald Mora Esquivel</td>
                <td> Marinés Fonseca, Ronald Mora </td>
                <td></td>
                <td>01 de enero de 2015 al 31 de diciembre de 2016</td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTAS_2015_8?>  </td>
                <td>Federico Torres Carballo</td>
                <td> Federico Torres, Ricardo Monge </td>
                <td></td>
                <td>01 de enero de 2015 al 31 de diciembre de 2016</td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> El Big Five y su implicación en la negociación: un estudio interdisciplinario de economía experimental </td>
                <td>Gustavo Cubillo Salas</td>
                <td> Gustavo Cubillo, Federico Torres Carballo </td>
                <td>Ivannia Murillo (UCR), Guillermo Mateu (Universidad de Dijon), María del Carmen Saorín (Universidad de Valencia)</td>
                <td>01 de enero de 2015 al 31 de diciembre de 2016</td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTAS_2015_10?>  </td>
                <td>Ivonne Vazquez Esquivel</td>
                <td> Ivonne Vázquez Esquivel </td>
                <td></td>
                <td>01 de julio 2015 al 30 de junio 2017</td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTAS_2015_11?>  </td>
                <td>Ronald Mora Esquivel</td>
                <td> Ronald Mora, Manrique Hernández  </td>
                <td></td>
                <td>01 de julio 2015 al 30 de junio 2016</td>
	      	</tr>
            <tr>   <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td> <td> &nbsp </td>     </tr>
            <tr>
            	<td> <?php echo PROPUESTAS_2015_12?>  </td>
                <td>Ronny Rodríguez Barquero</td>
                <td> Rony Rodriguez, Bernal Martínez, Oscar Solano, Silvia Hidalgo </td>
                <td>José Anastasio Uribe, Universidad de Valencia</td>
                <td>01 de enero de 2015 al 31 de diciembre de 2016</td>
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
