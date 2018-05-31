<?php
include "./includes/header_doc.php";
include "./includes/header_site.php";
?>
<div class="container-fluid fondo_cuerpo" >
	<div class="row margenes_row">
		<div class="offset-lg-1 col-lg-3 align-self-center">
				<h1 style="color: #b62020">
				Déjame Salir
				</h1>
				<p style="color: white">Tú y tu grupo os coláis en una casa abandonada una noche oscura. Pero algo sale mal, la puerta se cierra tras vosotros. ¿Descubriréis el secreto que esconden sus paredes? ¿Lograreis salir a salvo? Entrar ahí no ha sido una buena idea…</p>
		</div>
		<div class="offset-lg-1 col-lg-6">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner" role="listbox">
			    <div class="carousel-item active">
			      <img class="d-block img-fluid" src="./assets/images/juego_1.jpg" alt="First slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>
	<div class="row margenes_row ultimo_row" style="padding-top: 30px">
		<div class="col-lg-5">
			<p style="text-align: center; font-size: 24px; color: white">
				<i class="fa fa-key"></i> Genero: Suspense</br>
				<i class="fa fa-key"></i> Dificultad: <i class="fa fa-lock"></i> <i class="fa fa-lock"></i> <i class="fa fa-lock"></i> <i class="fa fa-lock"></i> <i class="fa fa-lock"></i></br>
				<i class="fa fa-key"></i> Factor miedo: <i class="fa fa-lock"></i> <i class="fa fa-lock"></i> <i class="fa fa-lock"></i> <i class="fa fa-lock"></i> <i class="fa fa-lock"></i>
			</p>
		</div>
		<div class="col-lg-6 d-flex justify-content-center align-self-center">
			<input type="button" class="btn btn-dark" style="width: 150px; height: 40px;" value="RESERVA YA!" onclick="window.location.href='./reserva.php'" readonly></input>
		</div>
	</div>
</div>

<?php
include "./includes/footer_site.php";
include "./includes/footer_doc.php";
?>

<script>
$('.carousel').carousel({
  interval: 10000
})
</script>

</html>