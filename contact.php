<?php include('header.php'); ?>
<div class="container">
		<div class="margin-top">
			<div class="row">	
			<?php include('head.php'); ?>

<div class="col-main">
	<div class="cms">
	<div class="loader_success"></div>
	<div class="contact_add" style="float: right">
	<h2>Otra forma de contactarnos</h2>
	<?php if(phoneNumber()) { ?><p><strong>Número de teléfono: </strong><?php echo phoneNumber(); ?></p> <?php } ?>
	<?php if(email()) { ?><p><strong>Email  : </strong><?php echo email(); ?></p> <?php } ?>
	<?php if(address()) { ?><p><strong>Direccion : </strong><?php echo address(); ?></p> <?php } ?>
	</div>
	<input type="hidden" class="emailaddress_admin" value="<?php echo email(); ?>" />
	
	<div class="loader_mail" style="position: absolute;">Envíando correo electrónico. Espere por favor. .</div>
	
	<div class="Cotactform">
		<div class="personal_info">
			<p>
			<label>Nombres: </label><br />
			<input type="text" name="fname" class="fname email_text" />
			</p>
			<p>
			<label>Apellidos: </label><br />
			<input type="text" name="lname" class="lname email_text" />
			</p>
			<p>
			<label>Email: </label><br />
			<input type="text" id="validate" name="email" class="email email_text" />
			</p>
			<p>
			<label>Mensaje: </label><br />
			<textarea class="message" style="width: 580px; height: 225px;"></textarea>
			</p>
			<p>
			<br />
			<button class="send"><span>Enviar</span></button>
			</p>
		</div>
	</div>
</div>
</div>

<?php include('footer.php') ?>