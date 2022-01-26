<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="mi_ccs/mi_css.css">

<link rel="stylesheet" type="text/css" href="icomoon/style.css">
<link rel="stylesheet" type="text/css" href="icomoon_5/style.css">
</head>


<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>

$(document).ready(function()
{
	
		
	
//--------------------------------menu movil----------------------------------------------------------------------------------//	
	$('.icon-menu').click(function()
	{
		$('nav>ul').slideDown()
		$('.icon-menu').hide()
		
		
		$('.icon-ifixit').show()
	})
	$('.icon-ifixit').click(function()
	{
		$('nav>ul').slideUp()
		$('.icon-menu').show()
		$('.icon-ifixit').hide()
		
	})
	$(window).resize(function()
	{
		if(window.matchMedia('(min-width:1023px)').matches)
		{
			$('nav>ul').css({'display':'flex'})
			$('.icon-ifixit').hide()
			$('.icon-menu').hide()
		}
		else
		{
			$('nav>ul').css({'display':'none'})
			$('.icon-menu').show()
			$('.icon-ifixit').hide()
		}
	})
	
	
	//-------------------------------------------------------------------//
	
	//$('nav>ul>li').click(function()
	
	//{
		//$('nav>ul>li>ul>li').hide()
		//$('nav>ul>li>ul').slideDown()
		
	//})
	$('.icon-circle-down').click(function()
	{
		$('nav>ul>li>ul').slideDown()
		$('.icon-circle-down').hide()
		
		
		$('.icon-circle-up').show()
	})
	$('.icon-circle-up').click(function()
	{
		$('nav>ul>li>ul').slideUp()
		$('.icon-circle-down').show()
		$('.icon-circle-up').hide()
		
	})
	
//---------------------------------fin de menu movil---------------------------------------------------------------------------//

	
})// document ready
</script>

<style>
body
{
	padding-top:100px;
	background-color:rgba(204,204,204,1);
}
@media screen and (min-width:740px)
{
	body
{
	padding-top:140px;
	background-color:rgba(204,204,204,0.2);
}

}

</style>


<body>




<!--/*//////////////////////////////////////////////////////////////////////////////////////////////*/-->
<header>



    <h1>
   <!-- Bar --><a class="inicio" href="index.html"><span class="rojo">Restaurant </a></span>Luciano
    <span class="icon-menu"> </span>
	<span class="icon-ifixit"> </span>
    
    
    
    
    
    

<!--<a href="sesion/usuario_pasword.php"><span class="icon-user"></span></a> -->


    
    </h1>


</header>
<!--/*//////////////////////////////////////////////////////////////////////////////////////////////*/-->
<nav>
    <ul>
        <li>
        	<a href="index.html">Inicio</a>
        </li>
        
        <li>
        	<a class="actual" href="#">Propuestas <span class="icon-circle-down"></span><span class="icon-circle-up"></span> </a>
            	
            	<ul>
                	
                    <li>
                    <a href="degustacion.php"> Degustacion<span class="icon-spoon-knife"></span> </a>
                    </li>
                     <li>
                    <a class="actual" href="bodega.php"> Bodega<span class="icon-glass"></span></a>
                    </li> 
			</ul>             	    
        </li>
        
        <li>
        	<!--<a href="galeria.php">Galeria</a> -->
        </li>
        
        <li>
        	<a href="contacto.php">Contacto</a>
        </li>
    </ul>
</nav>
<!--/*//////////////////////////////////////////////////////////////////////////////////////////////*/-->
<!--/*//////////////////////////////////////////////////////////////////////////////////////////////*/-->
<!--/*//////////////////////////////////////////////////////////////////////////////////////////////*/-->
<!--/*//////////////////////////////////////////////////////////////////////////////////////////////*/-->
<!--/*//////////////////////////////////////////////////////////////////////////////////////////////*/-->
<!--/*//////////////////////////////////////////////////////////////////////////////////////////////*/-->
<!--/*//////////////////////////////////////////////////////////////////////////////////////////////*/-->
<!--/*//////////////////////////////////////////////////////////////////////////////////////////////*/-->
<!--/*//////////////////////////////////////////////////////////////////////////////////////////////*/-->
<!--/*//////////////////////////////////////////////////////////////////////////////////////////////*/-->
<!--/*//////////////////////////////////////////////////////////////////////////////////////////////*/-->
<h3>Vinos</h3> <div class="linea"></div>


<section>
	
    
   
    
    <article>
     <h4> Vinos por Copa </h4>
    	<p> <strong>Ramon Bilbao</strong>, tinto<span class="espa">3.50 €</span>   <br>crianza del 2018 </p>
        <p> <strong>Viña celemín</strong>, rioja<span class="espa">3.00 €</span><br>Rosa</p>
        <p> <strong>Acapella roble</strong>, tempranillo<span class="espa">3.00 €</span><br>2020 tinto </p>
        <p> <strong>Acappela</strong>, verdejo <span class="espa">3.00 €</span>  <br>rueda (blanco)  </p>
        <p> <strong>Vino</strong>, verdejo <span class="espa">7.00 €</span>  <br>casero   </p>
	</article>
    
    <article>
    <!--<img src="imagenes/copa_1.jpg" alt="copa">-->
    </article>
    
</section>

<!--////////////////////////////////////////////////////////////////////////////////////////////////-->

<section class="reverse">  
    
    
    
    <article>
    <h4> Chupitos </h4>
    	<p> <strong>Mamajuana</strong>,Ron <span class="re"><span class="espa">1.00 €</span></span>    <br> Dominicano</p>
        <p> <strong>Ricard</strong> <span class="re"><span class="espa">1.00 €</span></span> <br>(licor de anís aromático)</p>
        <p> <strong>Moscatel</strong> <span class="re"><span class="espa">1.00 €</span></span><br> Artesano Vidal</p>
        <p> <strong>Ron viejo</strong> <span class="re"><span class="espa">1.00 €</span></span><br>Almirante</p>
        <p> <strong>Vermouth</strong><span class="re"><span class="espa">1.00 €</span></span><br> Gran artesano </p>
        <p> <strong>Anís</strong> <span class="re"><span class="espa">1.00 €</span></span><br>de Mono</p>
		<p> <strong>Ron Flor</strong> de Caña<span class="re"><span class="espa">1.50 €</span></span><br>(ron nicaragüense)</p>
		<p> <strong>Ballentines</strong> <span class="re"><span class="espa">1.00 €</span></span><br>(whisky)</p>
		<p> <strong>Terry</strong> Centenario <span class="re"><span class="espa">1.00 €</span></span><br>(Brandy)</p>
		<p> <strong>Ron</strong> añejo <span class="re"><span class="espa">1.00 €</span></span><br>Negrita</p>
   		<p> <strong>Aguardiente</strong> <span class="re"><span class="espa">1.00 €</span></span><br>antioqueño</p>
		<p> <strong>Royal</strong> <span class="re"><span class="espa">1.00 €</span></span><br>(Crema de whisky)</p>
		<p> <strong>Knebep</strong> <span class="re"><span class="espa">1.00 €</span></span><br>(vodka)</p>
		<p> <strong>anís</strong>seco <span class="re"><span class="espa">1.00 €</span></span><br> VIDAL </p>
	</article>
    
    <article>
    <!--<img src="imagenes/tinto_2.jpg" alt="copa">-->
    </article>
    
</section>



<section>    
    
     
    
    <article>
    <h4> Cerveza </h4>
    	<p> <strong>Estrella</strong> <span class="espa">1.50 €</span>    					<br> Caña</p>
        <p> <strong>Turia</strong> <span class="espa">1.80 €</span>    						<br> Caña</p>        
        <p> <strong>Voll</strong> Damm <span class="espa">2.20 €</span>   				 	<br> tercio</p>
        <p> <strong>Keller</strong> <span class="espa">2.00 €</span>    					<br> tercio</p>        
        <p> <strong>Free Damm</strong> 0 alcohol sabor <span class="espa">1.60 €</span>   	<br> a limón tercio</p>
        <p> <strong>Estrella</strong> Damm <span class="espa">1.60 €</span>    				<br> tercio</p>
        
     
    </article>
    
    <article>
   <!--<img src="imagenes/rosado_2.jpg" alt="rosado">-->
    </article>
    
</section>


<!--//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->



<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////-->







   <!--////////////////////////////////////////////////////////////////////////////////////////////////-->
   <!-- titulo-->
   <!-- <h3>Vinos Por Descorche</h3> <div class="linea_2"></div>-->


<!--////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--<section class="reverse">    
    
    
    <article>
     <h4> Blancos </h4>
    	<p> <strong>Can Sumoi</strong>, Xarelo 100% <span class="re"><span class="espa">15,9 €</span></span><br>(Conca del rio Anoia)</p>
        <p> <strong>Rolland Gallareta</strong>,Verdejo 100% <span class="re"><span class="espa">17,5 €</span></span><br>(D.O. Rueda)</p>
        <p> <strong>Otazu</strong>, Chardonnay 100% <span class="re"><span class="espa">12,9 €</span></span><br>(D.O. Navarra)</p>
    	<p> <strong>El Zarzal</strong> Emilio Moro, Godello 100% <span class="re"><span class="espa">17,9 €</span></span><br>(D.O. Bierzo)</p>
        <p> <strong>Quinta de Couselo</strong>,Albariño <span class="re"><span class="espa">17,5 €</span></span><br>(D.O. Rías Baixas)</p>
        <p> <strong>Finca Viñoa</strong>, Treixadura <span class="re"><span class="espa">17,5 €</span></span><br>(D.O. Ribeiro)</p>
	</article>-->
    
     <article>
 <!-- <img src="imagenes/blanco.jpg" alt="blanco">-->
    </article>
    
</section>


<!--////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--<section>    
    
    
    <article>
    <h4> Tintos </h4>
    	<p> <strong>Viuda Negra”Nunca Jamas”</strong> <span class="espa">18,9 €</span><br>(D.O.Rioja)</p>
        <p> <strong>Orben</strong>, CZA 100% Tempranillo <span class="espa">21,5 €</span> <br>(D.O.Rioja)</p>
        <p> <strong>Predicador</strong><span class="espa">24,9 €</span><br>(D.O. Rioja)</p>
        <p> <strong>Pruno</strong>, CZA <span class="espa">15,9 €</span><br>(D.O. Ribera del Duero)</p>
        <p> <strong>Quinta Generación</strong>, Dehesa de los Canónigos <span class="espa"> 16,9 € </span> <br>(D.O. Ribera del Duero)</p>
        <p> <strong>Bosque de Matasnos</strong><span class="espa">26,5 €</span><br>(D.O. Ribera del Duero)</p>
        </article>-->
        
         <article>
 <!--<img src="imagenes/tinto.jpg" alt="tinto">-->
    </article>
<!--</section>

<section class="reverse">
    <article>
		<p> <strong>La Felisa ecológico</strong>,Emilio Moro<span class="re"><span class="espa">25,9 €</span></span><br>(D.O.Ribera del Duero)</p>
        <p> <strong>Vetus CZA</strong>,100% Tinta de Toro<span class="re"><span class="espa">16,9 €</span></span><br>(D.O. Toro) </p>
      	<p> <strong>Dominio del Bendito</strong>,El Primer Paso<span class="re"><span class="espa">19,9 €</span></span><br>(D.O. Toro)</p>
		<p> <strong>Lalama</strong>Dominio do Bibei, Mencia<span class="re"><span class="espa">22,9 €</span></span><br>(D.O. Ribera Sacra)</p>
        <p> <strong>Losada</strong>,100% Mencia<span class="re"><span class="espa">18,9 €</span></span><br>(D.O. Bierzo)</p>
		<p> <strong>Pago de Calzadilla Allegro</strong>, Syrah 100%<span class="re"><span class="espa">19,5 €</span></span><br>((Pago Cuenca)</p>
        </article>
        
         <article>-->
 <!--<img src="imagenes/tinto_4.jpg" alt="tinto_2">-->
    </article>
<!--</section>

<section>    
    <article>
        <p> <strong>Habla del Silencio</strong><span class="espa">16,9 €</span>    <br>(V.T. Extremadura)</p>
        <p> <strong>Huno Blend</strong>, Pago de los Balancines<span class="espa">16,9 €</span> <br>(D.O. Rib. Guadiana)</p>
        <p> <strong>Clunia Syrah</strong><span class="espa">19,9 €</span><br>(IGP Castilla y León)</p>
        <p> <strong>Juan Gil Etiqueta Plata</strong> <span class="espa">16,9 €</span><br> (D.O.Jumilla)</p>
        <p> <strong>Juan Gil Etiqueta Azul</strong><span class="espa">24,9 €</span><br>(D.O.Jumilla) </p>
        <p> <strong>Tres picos, Borsao</strong>100% Garnacha<span class="espa">20,9 €</span><br>(D.O. Campo de Borja)</p>
	</article>
    
      <article>-->
 
 <!--<img src="imagenes/tinto_3.jpg" alt="tinto_3">-->
    </article>
 </section>
 
 
 <!--////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--<section class="reverse">   
     
    
    <article>
    <h4>  Espumosos </h4>
    	<p> <strong>de Nit Rosado</strong> <span class="re"><span class="espa">18,9 €</span></span><br> (Raventos i Blanc)</p>
        <p> <strong>Gran Reserva de la Finca</strong>,Crianza <span class="re"><span class="espa">20,9 €</span></span><br>(Raventos i Blanc)</p>
    </article>
    
    <article>-->
 <!--<img src="imagenes/espumosos.jpg" alt="espumoso">-->
 </article>
</section>







<!--<div class="espacio"> </div>-->



<footer>





        
	<p>		<a class="silver" href="#">		<span class="icon-instagram1">	</span>		Instagram		</a>	</p>
	<p>		<a class="silver" href="#">		<span class="icon-twitter">		</span>		Twitter			</a>	</p>
	<p>		<a class="silver" href="#">		<span class="icon-facebook">	</span>		Facebook		</a>	</p>
	<!--<p>		<a class="silver" href="#">		<span class="icon-youtube">		</span>		Youtube			</a>	</p>-->
        
        


</footer>
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->



</body>
</html>