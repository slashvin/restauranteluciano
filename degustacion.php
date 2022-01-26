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
    La Te<a class="inicio" href="index.html"><span class="rojo">rra</a></span>zuca
    <span class="icon-menu"> </span>
	<span class="icon-ifixit"> </span>
    
    </h1>


</header>
<!--/*//////////////////////////////////////////////////////////////////////////////////////////////*/-->
<nav>
    <ul>
        <li>
        	<a href="index.html">Inicio</a>
        </li>
        
        <li>
        	<a class="actual" href="#">Propuestas<span class="icon-circle-down"></span><span class="icon-circle-up"></span> </a>
            	
            	<ul>
                	
                    <li>
                    <a class="actual" href="degustacion.php"> Degustacion<span class="icon-spoon-knife"></span> </a>
                    </li>
                     <li>
                    <a href="bodega.php"> Bodega<span class="icon-glass"></span></a>
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
<h3>Carta Peruano</h3> <div class="linea"></div>


<section>
	
    
   
    
    <article>
     <!--<h4> Frescos </h4>-->
    	<p> <strong>Pollo</strong>  <span class="espa">10.50 €</span><br>Luciano			</p>
        <p> <strong>Ceviche</strong>  <span class="espa">12.00 €</span><br>Luciano			</p>
        <p> <strong>Ceviche</strong>  <span class="espa">13.00 €</span><br>mixto			</p>
        <p> <strong>Seco</strong> de <span class="espa">11.00 €</span><br>Cordero			</p>
        <p> <strong>chicharrón</strong>  <span class="espa">11.00 €</span><br>Luciano		</p>
        <p> <strong>Lomo</strong>  <span class="espa">11.00 €</span><br>Saltado				</p>
        <p> <strong>Pollo</strong>  <span class="espa">11.00 €</span><br>saltado			</p>
        <p> <strong>Espagueti</strong>  <span class="espa"> 11.00 €</span><br>Saltado		</p>
        <p> <strong>Causita</strong> de <span class="espa">8.00 €</span><br>pollo			</p>
		<p> <strong>Hamburguesa</strong>  <span class="espa"> 5.00 €</span><br>Luciano		</p>
        <p> <strong>Anticucho</strong>  <span class="espa">6.00 €</span><br>Luciano			</p>        
        <p> <strong>Pollo</strong>  <span class="espa"> 7.00 €</span><br>Broaster			</p>                
        <p> <strong>Ají</strong> de <span class="espa">10.00 €</span><br>Gallina			</p>       
        <p> <strong>Fajitas</strong> de <span class="espa">7.00 €</span><br>Pollo			</p>                
        <p> <strong>Carapulca</strong>  <span class="espa">12.00 €</span><br>Luciano		</p>
        <p> <strong>Papa</strong> a la <span class="espa">6.00 €</span><br>huancaína		</p>
        <p> <strong>Papa</strong> en salsa <span class="espa">6.00 €</span><br>de rocoto	</p>
        <p> <strong>Leche</strong>  <span class="espa">8.00 €</span><br>Tigre				</p>
  
        
        
	</article>
    
    <article>
  <!-- <img src="imagenes/33.jpg" alt="frescos">-->
    </article>
    
</section>

<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
 



<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->

<section class="reverse">  
    
    
    
    <article>
    <h4> Tapas </h4>
    
    	<p> <strong>Fajitas</strong> de <span class="espa">4.00 €</span><br>Pollo				</p>
        <p> <strong>Morritos</strong>  <span class="espa">5.00 €</span><br>Luciano				</p>
        <p> <strong>Salchipapa</strong>  <span class="espa">5.00 €</span><br>Luciano			</p>
        <p> <strong>Boquerones</strong>  <span class="espa">6.00 €</span><br>Luciano			</p>
        <p> <strong>Papa</strong> a la <span class="espa">4.50 €</span><br>huancaína			</p>
        <p> <strong>Papa</strong> en salsa <span class="espa">4.50 €</span><br>de rocoto		</p>
        
        
        
	</article>
    
    <article>
   <!--<img src="imagenes/queso.jpg" alt="queso">-->
    </article>
    
</section>
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
 



<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--<section>    
    
     
    
    <article>
    <h4> Embutidos </h4>
    
    
    	<p> <strong>Tabla de Lomo ibérico de Bellota</strong>,  <span class="espa">11,5 €</span><br>Dehesas Extremadura</p>
        <p> <strong>Tabla de Jamón ibérico de Bellota</strong>, <span class="espa">15,9 €</span><br> Dehesas Extremadura</p>
        <p> <strong>Tabla de Cecina de León</strong>, Reses de más de 5 años<span class="espa">9,9 €</span><br> con
virutas de manchego</p>
        
        
    </article>-->
    
    <article>
   <!--<img src="imagenes/jamon.jpg" alt="jamon">-->
    </article>
    
</section>

   <!--////////////////////////////////////////////////////////////////////////////////////////////////-->
    
    <!--<h3>Vinos Por Descorche</h3> <div class="linea_2"></div>-->


<!--////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--<section class="reverse">    
    
    
    <article>
     <h4> Fritos </h4>
    	<p> <strong>Croquetas Gourmet</strong>, Surtido de chipirón, <span class="re"><span class="espa">8,5 €</span></span><br>hongos y jamón de bellota </p>
        
        <p> <span class="re"><span class="espa">9,5 €</span></span><br><strong>Rabas de Calamar</strong></p>
        
        <p> <span class="re"><span class="espa">8,5 €</span></span><br><strong>Tempura de Verduras</strong></p>
        
    	<p> <strong>Brochetas de Pollo</strong>, macerado y <span class="re"><span class="espa">13,9 €</span></span><br>empanado, con fritada de tomate</p>
        
        
	</article>
    
     <article>
-->		<!-- <img src="imagenes/rabas.jpg" alt="rabas">-->
    </article>
    
</section>

<!--///////////////////////////////////continua aqui///////////////////////////////////////////////////////7///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


<!--////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--<section>    
    
    
    <article>
    <h4> Focaccia </h4>
    
    
    	<p> <strong>Fresca</strong>, mozzarella, tomate natural,<span class="espa">5 €</span><br>albahaca fresca y bechamel</p>
        
        <p> <strong>Tumaca</strong>, nuestro aliño de tomate<span class="espa">6,5 €</span> <br>con jamón ibérico de bellota</p>
        
        <p> <strong>Serrana</strong>, fritada de tomate y verdura<span class="espa">5 €</span><br>con panceta ibérica y bechamel</p>
        
      
        </article>
        
         <article>-->
		<!--<img src="imagenes/mozzarella.jpg" alt="mozzarella">-->
    </article>
</section>
 
 <!--////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--<section class="reverse">   
     
    
    <article>
    <h4>  Calientes </h4>
    
    	<p> <strong>Secreto Ibérico Puro Bellota</strong> , <span class="re"><span class="espa">15,9 €</span></span><br> acompañado con láminas de yuca</p>
        <p> <strong>Morcilla Artesana</strong>, a la plancha <span class="re"><span class="espa">8 €</span></span><br>con reducción de manzana</p>
        <p> <strong>Lechazo Churro I.G.P.</strong> Asado a<span class="re"><span class="espa">14 €</span></span><br>baja temperatura y deshuesado</p>
        <p> <strong>Lomo de Bacalao Salvaje</strong>, <span class="re"><span class="espa">16,5 €</span></span><br>al punto con sus salsas</p>
        <p> <strong>Delicias de Hamburguesa</strong>,  <span class="re"><span class="espa">6 €</span></span><br>con pan de pasas y nueces</p>
        <p> <strong>Foie Templado</strong> con tostas de Sobao pasiego y reducción Pedro Ximénez <span class="re"><span class="espa">14,9 €</span></span><br></p>
        
    </article>
    
    <article>-->
	<!--<img src="imagenes/24.jpg" alt="jjj">-->
 </article>
</section>



<!--<section>
<article class="drop">
<p> <strong><span class="icon-droplet"></strong> En nuestra cocina solo usamos  <span class="re"><span class="espa"></span></span><br>aceite de oliva</p>-->

<!--<p><span class="icon-drop"></span>  En nuestra cocina solo usamos aceite de oliva </p>-->
</article>
</section>




<!--<div class="espacio"> </div>-->



<footer>




<!--<article class="foter_3">

	<h4>
		<p> Contactar </p>
	</h4>
        
	
    <p>		<a class="silver" href="#">		<span class="icon-old-phone">	+34 549 98 09 23		</span>		</a>	</p>    
    <p>		<a class="silver" href="#">		<span class="icon-location">Plaza del Corro Campios 2, Comillas, Spain</span></a></p>
	<p>		<a class="silver" href="#">		<span class="icon-email">	laterrazuca@icloud.com		</span>		</a>	</p>   

</article>-->


<!--<article class="foter_4">-->

	<!--<h4>
		<p> Comunidad </p>
	</h4>-->
        
	<p>		<a class="silver" href="#">		<span class="icon-instagram1">	</span>		Instagram		</a>	</p>
	<p>		<a class="silver" href="#">		<span class="icon-twitter">		</span>		Twitter			</a>	</p>
	<p>		<a class="silver" href="#">		<span class="icon-facebook">	</span>		Facebook		</a>	</p>
	<!--<p>		<a class="silver" href="#">		<span class="icon-youtube">		</span>		Youtube			</a>	</p>-->
        
        
<!--</article>-->

</footer>
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->



</body>
</html>