<?php /* Template Name: Pagina inicial SEAK */ ?>
<?php get_header(); ?>

 <div class="mh-wrapper mh-clearfix">


<!--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
-->


	<div class="botoes-redes-sociais-topo">
		<a href="https://pt-br.facebook.com/seak.poa/" target="_blank"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/seak1/'?>wp-content/uploads/2020/11/logo-fb.png"></a>
    	<!-- <a href="#" target="_blank"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/seak1/'?>wp-content/uploads/2020/11/logo-ig.png"></a> -->
    	<a href="https://www.youtube.com/channel/UCQx3HjXRRgrEqFcT99Nio3A/" target="_blank"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/seak1/'?>wp-content/uploads/2020/11/logo-yt.png"></a>
    	<a href="mailto:seakadm@gmail.com" target="_blank"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/seak1/'?>wp-content/uploads/2020/11/icone-email.png"></a>
	</div>

	<div class="container-slider-home">
		<?php echo do_shortcode('[metaslider id="72"]'); ?>
	</div>

	<div class="navegacao-lateral-esq">
		<div class="menu-lateral-home">
			<div class="menu-lateral-home-item"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/seak1/'?>index.php/atividades/"> <i class="far fa-calendar-alt"></i>Horários</a></div>
			<div class="menu-lateral-home-item"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/seak1/'?>index.php/atividades/"><i class="fas fa-city"></i>Atividades</a></div>
			<div class="menu-lateral-home-item"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/seak1/'?>index.php/colabore/"><i class="fas fa-handshake"></i>Colabore</a></div>
			<div class="menu-lateral-home-item"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/seak1/'?>index.php/farmacia/"><i class="fas fa-notes-medical"></i>Farmácia</a></div>
			<div class="menu-lateral-home-item"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/seak1/'?>index.php/livraria/"><i class="fas fa-book-open"></i>Livraria</a></div>
			<div class="menu-lateral-home-item"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/seak1/'?>index.php/museu-virtual/"><i class="fas fa-archway"></i>Museu Virtual</a></div>
		</div>
		
		
		<!-- horarios - versao desktop -->
		<div class="home-horarios-desktop">
			<h4>Nossos horários:</h4>
			<div class="slideshow-container-horarios">

				<div class="dot-container-horarios">
				  <span class="dot-horarios" onclick="currentSlide(1)"></span> 
				  <span class="dot-horarios" onclick="currentSlide(2)"></span> 
				  <span class="dot-horarios" onclick="currentSlide(3)"></span> 
				  <span class="dot-horarios" onclick="currentSlide(4)"></span>
				</div>
				<div class="mySlides-horarios">
				  	<h5>Passes</h5>
				  	<p><span>Domingo:</span> 9:00 às 10:00</p>
					<p><span>2ª Feira:</span> 8:30 às 10:30, 14:00 às 16:00 e 18:30 às 19:30</p>
					<p><span>3ª Feira:</span> 8:30 às 10:30, 14:00 às 16:00</p>
					<p><span>4ª Feira:</span> 8:30 às 10:30, 17:00 às 18:00 </p>
					<p><span>5ª Feira:</span> 8:30 às 10:30, 16:15 às 18:00 e 18:30 às 19:30</p>
					<p><span>6ª Feira:</span> 8:30 às 10:30, 14:00 às 16:00 e 18:30 às 19:30</p>
					<p><span>Sábado:</span> 8:30 às 10:30</p>
				</div>

				<div class="mySlides-horarios">
				  	<h5>Atendimento Fraterno</h5>
					<p><span>2ª Feira:</span> 8:30 às 10:30, 14:00 às 16:00 e 18:00 às 19:00</p>
					<p><span>3ª Feira:</span> 8:30 às 10:30, 14:00 às 16:00</p>
					<p><span>4ª Feira:</span> 16:00 às 17:30 </p>
					<p><span>5ª Feira:</span> 8:30 às 10:30, 14:00 às 16:00 e 17:30 às 19:00</p>
					<p><span>6ª Feira:</span> 14:00 às 16:00</p>
				</div>

				<div class="mySlides-horarios">
				  	<h5>Estudo do Livro dos Espíritos</h5>
					<p><span>3ª Feira:</span> 19:30 às 20:30</p>
					
					<br>
				  	<h5>Palestras - DAFA - Assuntos de Família</h5>
					<p><span>6ª Feira:</span> 18:30 às 19:10</p>				

					<br>
				  	<h5>Palestras Doutrinárias</h5>
					<p><span>6ª Feira:</span> 19:30 às 20:30</p>
					
					<br>
				  	<h5>Estudo do Evangelho Segundo o Espiritismo</h5>
					<p><span>Domingo:</span> 10:00 às 11:00</p>	
					
					<br>
				  	<h5>Evangelização Infanto-Juvenil</h5>
					<p><span>Domingo:</span> 9:30 às 11:30</p>				
				</div>
				
				<div class="mySlides-horarios">
				  	<h5>SEAV - Sessão Espiritual de Apoio Vibratório</h5>
					<p><span>3ª Feira:</span> 9:00 às 9:30 e 16:30 às 17:00</p>
					<p><span>5ª Feira:</span> 19:00 às 19:30</p>

					<br>				
				  	<h5>Preces e Irradiações</h5>
					<p><span>3ª Feira:</span> 19:30 às 20:30</p>

				</div>			

				
				<a class="prev-horarios" onclick="plusSlides(-1)">❮</a>
				<a class="next-horarios" onclick="plusSlides(1)">❯</a>																	

			</div>
		</div>		
	</div>

	<div class="menu-base-home">
		<div class="menu-base-home-item">
			<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/seak1/'?>index.php/conheca-a-seak/"><i class="fas fa-house-user"></i>Conheça a SEAK</a>
		</div>
		<div class="menu-base-home-item">
			<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/seak1/'?>index.php/associe-se/"><i class="fas fa-users"></i>Associe-se</a>
		</div>
		<div class="menu-base-home-item">
			<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/seak1/'?>index.php/assistencia-social/"><i class="fas fa-hands-helping"></i>Assistência<br>Social</a>
		</div>
		<div class="menu-base-home-item">
			<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/seak1/'?>index.php/dij-departamento-de-infancia-e-juventude/"><i class="fas fa-seedling"></i>Evangelização <br>Infanto-Juvenil</a>
		</div>
		<div class="menu-base-home-item">
			<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/seak1/'?>index.php/luz-de-damasco/"><i class="far fa-newspaper"></i>A Luz de Damasco</a>
		</div>
		<div class="menu-base-home-item">
			<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/seak1/'?>index.php/feira-do-livro/"><i class="fas fa-book"></i>Feira do Livro</a>
		</div>
		<div class="menu-base-home-item">
			<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/seak1/'?>index.php/esde-estudo-sistematico-da-doutrina-espirita/"><i class="fas fa-chalkboard-teacher"></i>ESDE</a>
		</div>
		<div class="menu-base-home-item">
			<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/seak1/'?>index.php/biblioteca/"><i class="fas fa-book-reader"></i>Biblioteca</a>
		</div>
	</div>
</div> 

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides-horarios");
  var dots = document.getElementsByClassName("dot-horarios");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active-horarios", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active-horarios";
}
</script>

<?php get_footer(); ?>
