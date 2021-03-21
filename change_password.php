<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php
$query=mysql_query("select * from students where student_id='$session_id'")or die(mysql_error());
$row=mysql_fetch_array($query);
 ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<?php include('head.php'); ?>
			<div class="span3">
			</div>
			
				<div class="span7">
						<form class="form-horizontal" method="post">
							<div class="control-group">
								<label class="control-label" for="inputEmail">Nueva Contrasena</label>
								<div class="controls">
								<input type="text" name="np" id="inputEmail" placeholder="New Password">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputPassword">Repita su Contrasena</label>
								<div class="controls">
								<input type="password" name="rp" id="inputPassword" placeholder="Re-type Password">
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
								<button type="submit" name="update" class="btn btn-success">Actualizar</button>
								</div>
								<br>
								<br>
			<?php
			
						if (isset($_POST['update'])){
						$np = $_POST['np'];
						$rp = $_POST['rp'];			
						if($np!=$rp){
						?>
						<div class="alert alert-danger">Error!!!  las contraseñas no coinciden..</div>
						<?php
						}else{
						mysql_query("update students set password = '$np' where student_id = '$session_id' ")or die(mysql_error); ?>
						<div class="alert alert-success">Contraseña cambiada Exitosamente...</div>
						<?php }}?>
							</div>
						</form>
				</div>
				

	
			
			</div>
		</div>
    </div>
<?php include('footer.php') ?>