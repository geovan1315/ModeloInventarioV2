<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-02 06:09:46
  from 'C:\xampp\htdocs\InventarioV2\ModeloInventarioV2\templates\Cabecera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e85658a83faf8_78969260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a3bcb0a870face9b8eb6f458b9778b7a9f5ea86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioV2\\ModeloInventarioV2\\templates\\Cabecera.tpl',
      1 => 1585632765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e85658a83faf8_78969260 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row  blue lighten-3">
	<div class=" col s4 " >
		<p class="white-text  "> <strong>USUARIO: <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</strong> </p>
		<p class="white-text  "> <strong>PUESTO: <?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
</strong> </p>
	</div>
	<div class=" col s4" >
		<img class="materialboxed " data-caption="Usuario" width="100"  src="Recursos/FotosUsuarios/php.png">
	</div>
	<div class=" col s4 ">
		<a href="?controller=Salir&action=CerrarSesion" class="brand-logo white-text  ">Salir</a>
	</div>
</div><?php }
}
