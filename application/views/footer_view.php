	<div id="footer" class="container-fluid mt-5 pt-3">
		<div class="row">

			<div class="offset-md-1 col-lg-2 pt-2">				
				<img src="<?=base_url();?>/assets/img/mbm.gif">									
			</div>

			<div class=" col-lg-2">
				<div class="row align-items-center">
					<div class="col-lg-3 pl-5"><i class="fas fa-map-marker-alt iconos_footer"></i></div>
					<div class="col-lg-9">
						<h6 class="pt-3 text-white"><strong>Visítanos</strong></h6>
						<p class="small">Maipú 546<br>Salta, Argentina</p>
					</div>					
				</div>				
			</div>

			<div class="col-lg-2">
				<div class="row align-items-center">
					<div class="col-lg-3 pl-5"><i class="fas fa-phone-alt iconos_footer"></i></div>
					<div class="col-lg-9">
						<h6 class="pt-3 text-white"><strong>Llámanos</strong></h6>
						<p class="small">387 - 4317964<br>387 - 4228364</p>
					</div>					
				</div>				
			</div>

			<div class="col-lg-2">
				<div class="row align-items-center">
					<div class="col-lg-3 pl-5"><i class="far fa-envelope iconos_footer"></i></div>
					<div class="col-lg-9">
						<h6 class="pt-3 text-white"><strong>Contactános</strong></h6>
						<img src="<?=base_url();?>assets/img/mail.png">
						<!-- <p class="small">ventas@antanetsa.com.ar</p> -->
					</div>					
				</div>				
			</div>

			<div class="col-lg-2">
				<div class="row align-items-center">
					<div class="col-lg-3 pl-5"><i class="far fa-copyright iconos_footer"></i></div>
					<div class="col-lg-9 pt-4">
						<p class="small">Copyright © | Design <br><a href="mailto:ventas@mbmsistemas.com.ar?subject=Mensaje%20enviado%20desde%20la%20web%20de%20Antanet&body=Estoy%20interesado%20en%20sus%20servicios">MBM SISTEMAS</a></p>

					</div>					
				</div>				
			</div>

		</div>
	</div>


	<!--Cargamos Jquery, Pooper y js de Boostrap-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script>
		$( document).ready(function(){
			console.log(<?php echo $activo; ?>);
			switch (<?php echo $activo; ?>) {
			  case 1:
			    $('#empresa').addClass('activo');
			    break;
			  case 2:
			    $('#servicios').addClass('activo');
			    break;
			  case 3:
			    $('#soluciones').addClass('activo');
			    break;
			   case 4:
			    $('#contacto').addClass('activo');
			    break;
			}
		});
	</script>

</body>
</html>