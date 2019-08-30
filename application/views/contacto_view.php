<div class="container">
	<div class="row">
		<div class="col-md-12 p-3 servicios_titulo">
			<h2 class="titulo">Contacto</h2>
			<hr>
		</div>		
	</div>

	<div class="row pl-5 pr-5 pb-5">
		<div class="col-md-7 contacto_mapa">
				
			<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.389326066351!2d-65.42769358516347!3d-24.78211878409092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x941bc3b576e5e307%3A0x9a34ac023a188863!2sMaip%C3%BA%20546%2C%20Salta!5e0!3m2!1ses-419!2sar!4v1566911289197!5m2!1ses-419!2sar" width="550" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			
		</div>
		
		<div class="col-md-5 contacto_formulario">
			
			<form class="" action="<?=base_url();?>welcome/enviar_mail" method="POST">
				<div class="form-group">
					<input type="text" name="nombre" id="nombre" class="form-control formulario" aria-describedby="emailHelp" placeholder="Nombre" required="true">
				</div>

				<div class="form-group">
					<input type="email" name="email" class="form-control formulario" placeholder="Email" required="true">
				</div>
				
				<div class="form-group">
					<input type="text" name="asunto" class="form-control formulario" placeholder="Asunto" required="true">
				</div>

				<div class="form-group">
				   <textarea class="form-control formulario" name="mensaje" rows="3" placeholder="Mensaje" required="true"></textarea>
				</div>
				
				<button type="submit" class="btn formulario_boton">Enviar</button>
				<?php 
                    if ($error <> '') { ?>
                        <div class="alert alert-danger float-right">
                            <span><?=$error?></span>
                        </div>
                <?php
                    }
                ?>

                <?php 
                    if ($exito <> '') { ?>
                        <div class="alert alert-primary float-right">
                            <span><?=$exito?></span>
                        </div>
                <?php
                    }
                ?>
			</form>
			
		</div>

	</div>
</div>