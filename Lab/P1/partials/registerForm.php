<main>
	<h1>GestiÓn de Usuarios </h1>
	<form class="fom_usuario" action="?action=registrar" method="POST">

		<legend>Datos básicos</legend>
		<label for="name">Nombre</label>
		<br/>
		<input type="text" name="name" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="Miguel" />
		<br/>
		<label for="surname">Apellidos</label>
		<br/>
		<input type="text" name="surname" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="Cervantes" />
		 <br/>
		<label for="address">Calle</label>
		<br/>
		<input type="text" name="address" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="" />
		 <br/>
		 <label for="city">city</label>
		<br/>
		<input type="text" name="city" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="" />
		 <br/>
		 <label for="zip_code">zipcode</label>
		<br/>
		<input type="text" name="zip_code" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="" />
		 <br/>
		<label for="foto_file">foto_file</label>
		<br/>
		<input type="text" name="foto_file" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="" />
		<br/>
		<p><input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
	</form>
</main>