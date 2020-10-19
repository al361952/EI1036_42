<main>
	<h1>GestiÓn de Usuarios </h1>
	<form class="fom_usuario" action="?action=registrar" method="POST">

		<legend>Datos básicos</legend>
		<label for="nombre">ID_cliente</label>
		<br/>
		<input type="text" name="cliente_id" class="item_requerid" size="20" maxlength="25" value="<?php print $cleinte_id ?>"
		 placeholder="1" />
		<br/>
		<label for="name">Nombre</label>
		<br/>
		<input type="text" name="name" class="item_requerid" size="20" maxlength="25" value="<?php print $name ?>"
		 placeholder="Miguel" />
		<br/>
		<label for="surname">Apellidos</label>
		<br/>
		<input type="text" name="surname" class="item_requerid" size="20" maxlength="25" value="<?php print $surname ?>"
		 placeholder="Cervantes" />
		 <br/>
		<label for="address">Calle</label>
		<br/>
		<input type="address" name="address" class="item_requerid" size="20" maxlength="25" value="<?php print $address ?>"
		 placeholder="" />
		 <br/>
		 <label for="city">city</label>
		<br/>
		<input type="text" name="city" class="item_requerid" size="20" maxlength="25" value="<?php print $city ?>"
		 placeholder="" />
		 <br/>
		 <label for="zip_code">zipcode</label>
		<br/>
		<input type="text" name="zip_code" class="item_requerid" size="20" maxlength="25" value="<?php print $zip_code ?>"
		 placeholder="" />
		 <br/>
		<label for="foto_file">foto_file</label>
		<br/>
		<input type="text" name="foto_file" class="item_requerid" size="20" maxlength="25" value="<?php print $foto_file ?>"
		 placeholder="kiko@ic.es" />
		<br/>
		<p><input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
	</form>
</main>