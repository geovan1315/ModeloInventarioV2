<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-02 06:54:50
  from 'C:\xampp\htdocs\InventarioV2\ModeloInventarioV2\templates\CrearUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e85701a4cba17_94145976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7e8241f49386cc4352ee39ff80476f319c37b94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioV2\\ModeloInventarioV2\\templates\\CrearUsuario.tpl',
      1 => 1585803288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e85701a4cba17_94145976 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(document).ready(function() {
		$('select').material_select();
    });

	 
<?php echo '</script'; ?>
>



	<div class="row">
	  <div class="col s12  blue lighten-4">
		<h5 class="center-align">Crear Usuario</h5>
	  </div>
	</div>

	<form class = "col s12 center-align" method="post" action="">
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">account_circle</i>
				<input placeholder = "Nombre de Usuario" name="nombre"  id = "nombre" type = "text" class = "active validate" required />
				<label for = "nombre">Nombre</label>
			</div>
		</div>
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">account_circle</i>
				<input placeholder = "Apellido de Usuario" name="apellido"  id = "apellido" type = "text" class = "active validate" required />
				<label for = "apellido">Apellido</label>
			</div>
		</div>

		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">date_range</i>
				<label for="Icon_date">Fecha de Nacimiento</label>
				<input type="date" placeholder = "Fecha" class="datepicker" id="date">
			</div>
		</div>

		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">vpn_key</i>
				<input  name="pass"  id = "pass" type = "password" class = "active validate" required />
				<label for = "pass">Password</label>
			</div>
		</div>

		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">vpn_key</i>
				<input placeholder = "Password de Usuario" name="RepPass"  id = "RepPass" type = "password" class = "active validate" required />
				<label for = "RepPass">Rep.Password</label>
			</div>
		</div>
		
		<div class="row">
			<div class = "input-field col s12">
				<label for = "tipo">Tipo de usuario</label>
				<i class = "material-icons prefix">work</i>
			</div>
			<div class = "input-field col s12">
				   <select class = "browser-default" name="tipo" id="tipo" >
					  <option value = "Trabajador">Trabajador</option>
					  <option value = "Administrador">Administrador</option>
				   </select>
			</div>
		</div>

		<div class="row">
		  <div class="input-field col s12">
			<input type="submit" value="CREAR" class="btn col s12 blue">
		  </div>
		</div>
	</form>



<?php }
}
