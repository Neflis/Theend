<?php
include "./includes/header_doc.php";
?>

<?php

include "./includes/header_site.php";
?>


<div class="container-fluid fondo_cuerpo">
	<div class="row margenes_row ultimo_row" style="font-size: 24px; color: white;">
		<ul style="margin-left: 20px;">
			<li class="pregunta_faq">¿CUÁL ES EL NÚMERO DE PARTICIPANTES?
				<ul style="display: none;">
					<li class="respuesta_faq">LOS GRUPOS PUEDEN SER DE 2 A 6 PERSONAS.</li>
				</ul>
			</li>
			<li class="pregunta_faq">¿PUEDEN JUGAR MENORES DE EDAD?
				<ul style="display: none;">
					<li class="respuesta_faq">POR SUPUESTO, LA EDAD MÍNIMA RECOMENDADA ES 16 AÑOS; SIN EMBARGO, EN EL GRUPO DEBE HABER AL MENOS UNA PERSONA MAYOR DE EDAD.</li>
				</ul>
			</li>
			<li class="pregunta_faq">¿ES NECESARIA LA FUERZA FÍSICA?
				<ul style="display: none;">
					<li class="respuesta_faq">PARA NADA, TODO LO QUE NECESITAS ESTÁ EN TU MENTE.</li>
				</ul>
			</li>
			<li class="pregunta_faq">¿ES POSIBLE PERSONALIZAR EL JUEGO?
				<ul style="display: none;">
					<li class="respuesta_faq">CLARO. PONTE EN CONTACTO CON NOSOTROS Y CUÉNTANOS TU IDEA, JUNTOS INTENTAREMOS QUE LA EXPERIENCIA SEA ÚNICA.</li>
				</ul>
			</li>
			<li class="pregunta_faq">¿DA MIEDO?
				<ul style="display: none;">
					<li class="respuesta_faq">ES UN JUEGO DE SUSPENSE, NO TERROR. DURANTE EL JUEGO SOLO ESTARÉIS VOSOTROS EN LA SALA. NUESTRO OBJETIVO ES QUE LO PASÉIS LO MEJOR POSIBLE.</li>
				</ul>
			</li>
			<li class="pregunta_faq">¿PUEDO MODIFICAR O CANCELAR MI RESERVA?
				<ul style="display: none;">
					<li class="respuesta_faq">SÍ, AVISÁNDONOS POR TELÉFONO O EMAIL, CON UN MÍNIMO DE 24 HORAS DE ANTELACIÓN.</li>
				</ul>
			</li>
			<li class="pregunta_faq">¿CUÁL ES EL PRECIO DE LA AVENTURA?
				<ul style="display: none;">
					<li class="respuesta_faq">GRUPOS DE 2 A 3 PERSONAS, 40 €. GRUPOS DE 4 A 5 PERSONAS, 50€. GRUPOS DE 6 PERSONAS, 60€.</li>
				</ul>
			</li>
			<li class="pregunta_faq">¿TENEMOS QUE SER PUNTUALES?
				<ul style="display: none;">
					<li class="respuesta_faq">TENÉIS QUE ESTAR 10 MINUTOS ANTES DE LA HORA RESERVADA.</li>
				</ul>
			</li>
			<li class="pregunta_faq">¿PUEDO SALIR DEL JUEGO SI ME AGOBIO?
				<ul style="display: none;">
					<li class="respuesta_faq">POR SUPUESTO, PUEDES ABANDONAR LA SALA EN CUALQUIER MOMENTO Y EL RESTO DEL EQUIPO PUEDE SEGUIR JUGANDO.</li>
				</ul>
			</li>
			<li class="pregunta_faq">¿EN QUÉ IDIOMAS ESTÁ DISPONIBLE EL JUEGO?
				<ul style="display: none;">
					<li class="respuesta_faq">PODÉIS JUGAR EN ESPAÑOL O EN INGLÉS.</li>
				</ul>
			</li>
			<li class="pregunta_faq">¿ALGUNA DUDA MÁS?
				<ul style="display: none;">
					<li class="respuesta_faq">CONTACTA CON NOSOTROS.</li>
				</ul>
			</li>
		</ul>
	</div>
</div>


<?php
include "./includes/footer_site.php";
include "./includes/footer_doc.php";
?>

<script>
    $("li").click(function(){
        $(this).children().show();
    });
</script>
</html>